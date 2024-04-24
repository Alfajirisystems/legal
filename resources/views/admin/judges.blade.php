@extends('layouts.judges_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Law Personnel</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Judges</li>
							</ol>
						</nav>
					</div>
				</div>
				<a href="/form_advocates" class="btn btn-primary px-10 mx-30" style="position: fixed; right: 0;">Add New Advocate</a>
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
											<th>Judge ID</th>
											<th>Name</th>
											<!-- <th>Court</th> -->
											<th>Court ID</th>
											<!-- <th>Physical Address</th> -->
										</tr>
									</thead>
									<tbody>
										<tr>
											<!-- <td>Donna Snider</td>
											<td>Customer Support</td>
											<td>New York</td>
											<td>27</td>
											<td>2011/01/25</td> -->
										</tr>
									</tbody>				  
									<tfoot>
                                        <tr>
											<th>Judge ID</th>
											<th>Name</th>
											<!-- <th>Court</th> -->
											<th>Court ID</th>
											<!-- <th>Physical Address</th> -->
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