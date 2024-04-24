@extends('layouts.tppd_claims_layout')
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
								<li class="breadcrumb-item active" aria-current="page">TPPD Claims</li>
							</ol>
						</nav>
					</div>
				</div>
				<a href="/form_input" class="btn btn-primary px-10 mx-30" style="position: fixed; right: 0;">Add New TPPD Claim</a>
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
                                            <th>Matter Reported</th>
                                            <th>Overpayment</th>
                                            <th>Court</th>
                                            <th>Reserve Funds</th>
                                            <th>Advocate Appointed</th>
                                            <th>Attachments</th>
                                            <th>Firm Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>CN001</td>
                                            <td>Yes</td>
                                            <td>No</td>
                                            <td>
                                                <select class="form-control">
                                                    <option value="Supreme Court">Supreme Court</option>
                                                    <option value="County Court">County Court</option>
                                                    <option value="District Court">District Court</option>
                                                </select>
                                            </td>
                                            <td>$10,000</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="#" target="_blank" style="color: blue;">Download Attachment</a>
                                            </td>
                                            <td>XYZ Law Firm</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>CN002</td>
                                            <td>No</td>
                                            <td>Yes</td>
                                            <td>
                                                <select class="form-control">
                                                    <option value="Supreme Court">Supreme Court</option>
                                                    <option value="County Court">County Court</option>
                                                    <option value="District Court">District Court</option>
                                                </select>
                                            </td>
                                            <td>$5,000</td>
                                            <td>No</td>
                                            <td>
                                                <a href="#" target="_blank" style="color: blue;">Download Attachment</a>
                                            </td>
                                            <td>ABC Law Firm</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Case No</th>
                                            <th>Matter Reported</th>
                                            <th>Overpayment</th>
                                            <th>Court</th>
                                            <th>Reserve Funds</th>
                                            <th>Advocate Appointed</th>
                                            <th>Attachments</th>
                                            <th>Firm Name</th>
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