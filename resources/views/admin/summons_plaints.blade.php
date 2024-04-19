@extends('layouts.summons_plaints_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Summons & Plaints</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Summons & Plaints</li>
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
											<th>Case ID</th>
											<th>Nature of Claim</th>
											<th>Type of Claim</th>
											<th>Court Location</th>
											<th>Date of filing</th>
											<th>Reserve</th>
											<th>Parties</th>
											<th>Date</th>
											<th>Advocate</th>
											<th>Firm</th>
											<th>Costs</th>
											<th>Attachments</th>
											<th>Deadline Type</th>
											<th>Deadline</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr class="hover-primary">
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
										</tr>										 -->
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