@extends('layouts.main')

@section('content')

<div class="row">

    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Branches</h3>
                <div style="float: right;">
                    <a href="{{ route('branches.create') }}"
                        class="btn btn-rounded btn-info mb-5">
                        <i class="fas fa-plus"></i> Add New Branch
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
                            @foreach($branches as $branch)
                                <tr>
                                    <td>{{ $branch->id }}</td>
                                    <td>{{ $branch->name }}</td>
                                    <td>{{ $branch->location }}</td>
                                    <td>
                                        <a href="{{ route('branches.edit', $branch->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form
                                            action="{{ route('branches.destroy', $branch->id) }}"
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
