@extends('layouts.settlements_layout')

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
				<a href="/form_settlement" class="btn btn-primary px-10 mx-30" style="position: fixed; right: 0;">Add New Settlement</a>
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
                                            <th>ID</th>
                                            <th>Case No</th>
                                            <th>Response Time</th>
                                            <th>Advocate</th>
                                            <th>Negotiation Details</th>
                                            <th>Settlement Status</th>
                                            <th>Savings</th>
                                            <th>Attachments</th>
                                            <th>Out of Court Settlement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>C001</td>
                                            <td>2024-04-24</td>
                                            <td>
                                                Jane Achieng
                                            </td>
                                            <td>Details of negotiation will be added here.</td>
                                            <td>Pending</td>
                                            <td>10,000</td>
                                            <td>
                                                <a href="#" target="_blank" style="color: blue;">Download Attachment</a>
                                            </td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>C002</td>
                                            <td>2024-04-25</td>
                                            <td>
                                                Martin Karanja
                                            </td>
                                            <td>Comments go here</td>
                                            <td>In Progress</td>
                                            <td>5,000</td>
                                            <td>
                                                <a href="#" target="_blank" style="color: blue;">Download Attachment</a>
                                            </td>
                                            <td>No</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Case No</th>
                                            <th>Response Time</th>
                                            <th>Advocate</th>
                                            <th>Negotiation Details</th>
                                            <th>Settlement Status</th>
                                            <th>Savings</th>
                                            <th>Attachments</th>
                                            <th>Out of Court Settlement</th>
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