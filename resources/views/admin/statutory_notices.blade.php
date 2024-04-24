@extends('layouts.statutory_notices_layout')

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
				<a href="/form_input_statutory" class="btn btn-primary px-10 mx-30" style="position: fixed; right: 0;">Add New Statutory Notice</a>
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
											<th>Reg No</th>
											<th>Date of loss</th>
											<th>Insured Party</th>
											<th>Claim</th>
											<th>Author</th>
											<th>Attachments</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>A3290</td>
											<td>2023/04/12</td>
											<td>Joseph Njoroge</td>
											<td>Claim </td>
											<td>Martin Kamau</td>
											<td>
												To be submitted 
												<i class="fa fa-paperclip" data-toggle="tooltip" data-placement="top" title="Click to download attachment (link goes here)"></i>
											</td>
										</tr>
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
				<!-- /.box-body -->
			  	</div>
				</div>
			</div>			
		</section>
		<!-- /.content -->
	  </div>
  </div>

@endsection