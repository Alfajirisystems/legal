@extends('layouts.forms.settlements_form_input_layout')
@section('content')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Claims</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Settlements</li>
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
					<h3 class="box-title">New Settlement</h3>
					</div>
					<form action="submit_data.php" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id">ID:</label>
                                        <input type="text" class="form-control" id="id" name="id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="case_no">Case No:</label>
                                        <input type="text" class="form-control" id="case_no" name="case_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="response_time">Response Time:</label>
                                        <input type="date" class="form-control" id="response_time" name="response_time" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="advocate">Advocate:</label>
                                        <select class="form-control" id="advocate" name="advocate" required>
                                            <option value="">Select Advocate</option>
                                            <!-- Options fetched from the database will be inserted here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="negotiation_details">Negotiation Details:</label>
                                        <textarea class="form-control" rows="3" id="negotiation_details" name="negotiation_details"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="settlement_status">Settlement Status:</label>
                                        <select class="form-control" id="settlement_status" name="settlement_status" required>
                                            <option value="">Select Settlement Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Failed">Failed</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="savings">Savings:</label>
                                        <input type="number" class="form-control" id="savings" name="savings" step="0.01" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="attachments">Attachments:</label>
                                        <input type="file" class="form-control" id="attachments" name="attachments">
                                    </div>
                                    <div class="form-group">
                                        <label for="out_of_court_settlement">Out of Court Settlement:</label>
                                        <select class="form-control" id="out_of_court_settlement" name="out_of_court_settlement" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
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