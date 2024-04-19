@extends('layouts.appointments_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Appointments</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Appointments</li>
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
					  <div class="box-body p-10">
						  <div id="calendar" class="apt-cal"></div>
					  </div>
				  </div> 
			  </div>			   
			</div>
		</section>
		<!-- /.content -->
	  </div>	  
	
  </div>
  
@endsection