@extends('layouts.forms.statutory_notices_form_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Statutory Notices</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Statutory Notices</li>
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
					<div class="box-header with-border">
					<h3 class="box-title">New Statutory Notice</h3>
					</div>
					<form action="submit_letter.php" method="post">
					<div class="box-body">
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							<label for="reg_no">Reg No (Required):</label>
							<input type="text" class="form-control" id="reg_no" name="reg_no" required>
							</div>
							<div class="form-group">
							<label for="date_of_loss">Date of Loss (Required):</label>
							<input type="date" class="form-control" id="date_of_loss" name="date_of_loss" required>
							</div>
							<div class="form-group">
							<label for="insured_party">Insured Party (Required):</label>
							<input type="text" class="form-control" id="insured_party" name="insured_party" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="claim">Claim (Required):</label>
							<textarea class="form-control" rows="4" id="claim" name="claim" required></textarea>
							</div>
							<div class="form-group">
							<label for="author">Author (Optional):</label>
							<input type="text" class="form-control" id="author" name="author">
							</div>
							<div class="form-group">
							<label for="attachments">Attachments (Optional):</label>
							<input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
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