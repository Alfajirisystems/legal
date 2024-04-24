@extends('layouts.forms.matters_form_layout')
@section('content')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Matters</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Matters</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>
		  
		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class="col-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">New Matter</h3>
                    </div>
                    <form action="submit_data.php" method="post">
						<div class="box-body">
							<div class="row">
								<!-- Left Column -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="matter_id">Matter ID:</label>
										<input type="text" class="form-control" id="matter_id" name="matter_id" required>
									</div>
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" class="form-control" id="name" name="name" required>
									</div>
									<div class="form-group">
										<label for="category">Category:</label>
										<select class="form-control" id="category" name="category" required>
											<option value="">Select Category</option>
											<!-- Add your dropdown options here -->
										</select>
									</div>
									<div class="form-group">
										<label for="plaintiff_name">Plaintiff Name:</label>
										<input type="text" class="form-control" id="plaintiff_name" name="plaintiff_name" required>
									</div>
									<div class="form-group">
										<label for="plaintiff_advocate">Plaintiff Advocate:</label>
										<select class="form-control" id="plaintiff_advocate" name="plaintiff_advocate" required>
											<option value="">Select Plaintiff Advocate</option>
											<!-- Add your dropdown options here -->
										</select>
									</div>
									<div class="form-group">
										<label for="witness">Witness:</label>
										<input type="text" class="form-control" id="witness" name="witness" required>
									</div>
									<div class="form-group">
										<label for="claimedamount">Claimed Amount:</label>
										<input type="text" class="form-control" id="claimedamount" name="claimedamount" required>
									</div>
								</div>

								<!-- Right Column -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="court">Court:</label>
										<select class="form-control" id="court" name="court" required>
											<option value="">Select Court</option>
											<!-- Add your dropdown options here -->
										</select>
									</div>
									<div class="form-group">
										<label for="date">Date:</label>
										<input type="date" class="form-control" id="date" name="date" required>
									</div>
									<div class="form-group">
										<label for="insurer">Insurer:</label>
										<select class="form-control" id="insurer" name="insurer" required>
											<option value="">Select Insurer</option>
											<!-- Add your dropdown options here -->
										</select>
									</div>
									<div class="form-group">
										<label for="attachments">Attachments:</label>
										<input type="file" class="form-control" id="attachments" name="attachments" multiple required>
									</div>
									<div class="form-group">
										<label for="status">Status:</label>
										<select class="form-control" id="status" name="status" required>
											<option value="">Select Status</option>
											<option value="Open">Open</option>
											<option value="In Progress">In Progress</option>
											<option value="Closed">Closed</option>
										</select>
									</div>
									<div class="form-group">
										<label for="filing_dates">Filing Dates:</label>
										<input type="text" class="form-control" id="filing_dates" name="filing_dates" required>
									</div>
									<div class="form-group">
										<label for="submission_date">Submission Date:</label>
										<input type="date" class="form-control" id="submission_date" name="submission_date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="hearing">Hearing (Optional):</label>
										<textarea class="form-control" rows="3" id="hearing" name="hearing"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>

                </div>
                </div>
            </div>
		</section>

		<!-- /.content -->
	  </div>
  </div>
@endsection