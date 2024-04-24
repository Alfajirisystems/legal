@extends('layouts.main')

@section('content')

<div class="row">

    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Courts</h3>
                <div style="float: right;">
                    <a href="{{ route('courts.create') }}"
                        class="btn btn-rounded btn-info mb-5">
                        <i class="fas fa-plus"></i> Add New Court
                    </a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courts as $court)
                                <tr>
                                    <td>{{ $court->id }}</td>
                                    <td>{{ $court->name }}</td>
                                    <td>{{ $court->location }}</td>
                                    <td>
                                        <a href="{{ route('courts.edit', $court->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form
                                            action="{{ route('courts.destroy', $court->id) }}"
                                            method="POST" class="delete-form d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Location</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select all forms with the class 'delete-form'
        const deleteForms = document.querySelectorAll('.delete-form');

        // Loop through all delete forms
        deleteForms.forEach(function (form) {
            // Add a submit event listener to each form
            form.addEventListener('submit', function (event) {
                // Prevent form submission
                event.preventDefault();

                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user confirms, submit the form
                        form.submit();
                    }
                });
            });
        });
    });

</script>


@endsection
