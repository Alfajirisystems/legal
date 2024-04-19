@extends('layouts.letters_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Letters</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Letters</li>
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
											<th>Reg No</th>
											<th>Date of loss</th>
											<th>Insured Party</th>
											<th>Claim</th>
											<th>Author</th>
											<th>Attachments</th>
											<th></th>
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