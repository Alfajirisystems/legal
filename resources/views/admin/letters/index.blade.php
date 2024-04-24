@extends('layouts.main');
@section('content')

<div class="row">
				<div class="col-12">
					<div class="box">
                    <div class="box-header with-border">
                <h3 class="box-title">Letters</h3>
                <div style="float: right;">
                    <a href="{{ route('letters.create') }}" class="btn btn-rounded btn-info mb-5">
                        <i class="fas fa-plus"></i> Add New Letter
                    </a>
                </div>
            </div>
                    	<div class="box-body">
							<div class="table-responsive">
                            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>Reg No</th>
											<th>Date of loss</th>
											<th>Insured Party</th>
											<th>Claim</th>
											<th>Author</th>
											<th>Attachments</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($letters as $letter)
                                        <tr>
											<td>{{$letter->id}}</td>
											<td>{{$letter->date}}</td>
                                            <td>{{$letter->insuredParty}}</td>
											<td>{{$letter->natureOfClaim}}</td>
											<td>{{$letter->autherOfClaim}} </td>
										
											<td>
												<a href="" target="_blank" style="color: blue;" download>Download Attachment</a>
											</td>

                                            <td>
                                        <a href="{{ route('letters.edit', $letter->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('letters.destroy', $letter->id) }}"
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
											<th>Reg No</th>
											<th>Date of loss</th>
											<th>Insured Party</th>
											<th>Claim</th>
											<th>Author</th>
											<th>Attachments</th>
										</tr>
									</tfoot>
							</table>
							</div>
						</div>
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