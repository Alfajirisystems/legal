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
                    <form action="submit_data.php" method="post"> <div class="box-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="matter_id">Matter ID:</label>
                            <input type="text" class="form-control" id="matter_id" name="matter_id" required>
                            </div>
                            <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                            <label for="client_name">Client Name:</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="attorney_assigned">Attorney Assigned:</label>
                            <select class="form-control" id="attorney_assigned" name="attorney_assigned" required>
                                <option value="">Select Attorney</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="case_type">Case Type:</label>
                            <select class="form-control" id="case_type" name="case_type" required>
                                <option value="">Select Case Type</option>
                                </select>
                            </div>
                            <div class.form-group>
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Select Status</option>
                                <option value="Open">Open</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Closed">Closed</option>
                            </select>
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