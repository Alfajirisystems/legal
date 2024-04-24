@extends('layouts.cases_layout')
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
				<a href="/form_matters" class="btn btn-primary px-10 mx-30" style="position: fixed; right: 0;">Add New Matter</a>
			</div>
		</div>
		  
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>Matter ID</th>
											<th>Name</th>
											<th>Category</th>
											<th>Plaintiff Name</th>
											<th>Plaintiff Advocate</th>
											<th>Witness</th>
											<th>Claimed Amount</th>
											<th>Court</th>
											<th>Date</th>
											<th>Insurer</th>
											<th>Attachments</th>
											<th>Status</th>
											<th>Filing Dates</th>
											<th>Submission Date</th>
											<th>Hearing</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>001</td>
											<td>John Doe</td>
											<td>Personal Injury</td>
											<td>Jane Doe</td>
											<td>John Smith</td>
											<td>Witness1, Witness2</td>
											<td>$50,000</td>
											<td>Supreme Court</td>
											<td>2024-04-24</td>
											<td>XYZ Insurance</td>
											<td>
												<a href="#" target="_blank" style="color: blue;">Download Attachment</a>
											</td>
											<td>Open</td>
											<td>2024-04-20</td>
											<td>2024-04-22</td>
											<td>Not set</td>
										</tr>
										<tr>
											<td>002</td>
											<td>Jane Smith</td>
											<td>Property Damage</td>
											<td>John Smith</td>
											<td>Jane Smith</td>
											<td>Witness3</td>
											<td>$20,000</td>
											<td>County Court</td>
											<td>2024-04-25</td>
											<td>ABC Insurance</td>
											<td>
												<a href="#" target="_blank" style="color: blue;">Download Attachment</a>
											</td>
											<td>In Progress</td>
											<td>2024-04-21</td>
											<td>2024-04-23</td>
											<td>2024-04-28</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Matter ID</th>
											<th>Name</th>
											<th>Category</th>
											<th>Plaintiff Name</th>
											<th>Plaintiff Advocate</th>
											<th>Witness</th>
											<th>Claimed Amount</th>
											<th>Court</th>
											<th>Date</th>
											<th>Insurer</th>
											<th>Attachments</th>
											<th>Status</th>
											<th>Filing Dates</th>
											<th>Submission Date</th>
											<th>Hearing</th>
										</tr>
									</tfoot>
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