@extends('layouts.cases_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Cases</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Cases</li>
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
						<div class="box-body">
							<div class="table-responsive rounded card-table">
								<table class="table border-no" id="example1">
									<thead>
										<tr>
											<th>Cases ID</th>
											<th>Date</th>
											<th>Client Name</th>
											<th>Attorney Assgined</th>
											<th>Case Type</th>
											<th>Status</th>
											<th>Hearing</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="hover-primary">
											<td>#p245879</td>
											<td>14 April 2021</td>
											<td>Aaliyah clark</td>
											<td>Mr. Johen Doe</td>
											<td>Business Litigation</td>
											<td><span class="badge badge-success-light">Win</span></td>
											<td>1 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245880</td>
											<td>18 April 2021</td>
											<td>Mical clark</td>
											<td>Mr. Aiden Doe</td>
											<td>Criminal Law</td>
											<td><span class="badge badge-success-light">Win</span></td>
											<td>3 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245881</td>
											<td>22 May 2021, 15:30 PM</td>
											<td>Stela clark</td>
											<td>Mr. Lalvani doe</td>
											<td>Identity Theft</td>
											<td><span class="badge badge-danger-light">Lost</span></td>
											<td>FF-112</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245882</td>
											<td>26 April 2021</td>
											<td>Boone Doe</td>
											<td>Mr. Don Paton</td>
											<td>Travel Accident</td>
											<td><span class="badge badge-danger-light">Lost</span></td>
											<td>No Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245883</td>
											<td>30 April 2021</td>
											<td>Carlie Paton</td>
											<td>Mr. Mical Doe</td>
											<td>Legal Advice</td>
											<td><span class="badge badge-warning-light">Declined</span></td>
											<td>5 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245884</td>
											<td>1 May 2021</td>
											<td>Delilah</td>
											<td>Mr. Johen Doe</td>
											<td>Business Law</td>
											<td><span class="badge badge-success-light">Win</span></td>
											<td>3 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245885</td>
											<td>2 May 2021</td>
											<td>Hannah Doe</td>
											<td>Mr. Jennifer Ruby</td>
											<td>Civil Litigation</td>
											<td><span class="badge badge-warning-light">Declined</span></td>
											<td>7 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245886</td>
											<td>3 May 2021</td>
											<td>Emerson Clark</td>
											<td>Mr. Alex Siauw</td>
											<td>Insurance Defence</td>
											<td><span class="badge badge-warning-light">Declined</span></td>
											<td>1 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245887</td>
											<td>4 May 2021</td>
											<td>Crystal Doe</td>
											<td>Mr. Samuel Jr.</td>
											<td>Family Law</td>
											<td><span class="badge badge-success-light">Win</span></td>
											<td>3 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245888</td>
											<td>5 May 2021</td>
											<td>Jenny don</td>
											<td>Mr. Widan Cheeh</td>
											<td>Cold & Flu</td>
											<td><span class="badge badge-warning-light">Declined</span></td>
											<td>3 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245889</td>
											<td>6 May 2021</td>
											<td>Joanne Clark</td>
											<td>Mr. Samantha</td>
											<td>Employment Law</td>
											<td><span class="badge badge-danger-light">Lost</span></td>
											<td>No Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>										
										<tr class="hover-primary">
											<td>#p245890</td>
											<td>6 May 2021</td>
											<td>Madeline doe</td>
											<td>Mr. Widan Cheeh</td>
											<td>Business Litigation</td>
											<td><span class="badge badge-warning-light">Declined</span></td>
											<td>4 Hearing</td>
											<td>												
												<div class="btn-group">
												  <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
												  <div class="dropdown-menu">
													<a class="dropdown-item" href="#">View Details</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												  </div>
											    </div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</section>
		<!-- /.content -->
	  </div>
  </div>

@endsection