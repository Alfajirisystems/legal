@extends('layouts.attorney_details_layout')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Attorney Details</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Attorney Details</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-body text-end min-h-150" style="background-image:url(../images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
							<div class="bg-success rounded10 p-15 fs-18 d-inline"><i class="fa fa-legal"></i> Family Lawyer</div>	
						</div>						
						<div class="box-body wed-up position-relative">
							<div class="d-md-flex align-items-end">
								<img src="../images/avatar/avatar-1.png" class="bg-success-light rounded10 me-20" alt="" />
								<div>
									<h4>Ms. Emma Bunton</h4>
									<p><i class="fa fa-clock-o"></i> Join on 15 May 2019, 10:00 AM</p>
								</div>
							</div>
						</div>						
						<div class="box-body">
							<h4>Biography</h4>
							<p>Vestibulum tincidunt sit amet sapien et eleifend. Fusce pretium libero enim, nec lacinia est ultrices id. Duis nibh sapien, ultrices in hendrerit ac, pulvinar ut mauris. Quisque eu condimentum justo. In consectetur dapibus justo, et dapibus augue pellentesque sed. Etiam pulvinar pharetra est, at euismod augue vulputate sed. Morbi id porta turpis, a porta turpis. Suspendisse maximus finibus est at pellentesque. Integer ut sapien urna.</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Assigned Cases</h4>
						</div>
						<div class="box-body">
							<div class="media d-lg-flex d-block text-lg-start text-center">
								<img class="me-3 img-fluid rounded bg-primary-light w-100" src="../images/avatar/1.jpg" alt="">
								<div class="media-body my-10 my-lg-0">
									<h4 class="mt-0 mb-2">Loky Doe</h4>
									<h6 class="mb-4 text-primary">Domestic Violence</h6>
									<div class="d-flex justify-content-center justify-content-lg-start">
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light me-4">Unassign</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-danger-light ">Imporvement</a>
									</div>
								</div>
								<div id="chart" class="me-3"></div>
								<div class="media-footer align-self-center">
									<div class="up-sign text-success">
										<i class="fa fa-caret-up fs-38"></i>
										<h3 class="text-success">10%</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Resent Review</h4>
						</div>
						<div class="box-body p-0">
							<div class="inner-user-div">								
							  <div class="media-list bb-1 bb-dashed border-light">
								<div class="media align-items-center">
								  <a class="avatar avatar-lg status-success" href="#">
									<img src="../images/avatar/1.jpg" class="bg-success-light" alt="...">
								  </a>
								  <div class="media-body">
									<p class="fs-16">
									  <a class="hover-primary" href="#">Theron Trump</a>
									</p>
									  <span class="text-muted">2 day ago</span>
								  </div>
								  <div class="media-right">
									  <div class="d-flex">
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star-o"></i>
									  </div>
								  </div>
								</div>					
								<div class="media pt-0">
									<p class="text-fade">Vestibulum tincidunt sit amet sapien et eleifend. Fusce pretium libero enim, nec lacinia est ultrices id. Duis nibh sapien, ultrices in hendrerit ac, pulvinar ut mauris. Quisque eu condimentum justo. </p>
								</div>
							  </div>
							  <div class="media-list bb-1 bb-dashed border-light">
								<div class="media align-items-center">
								  <a class="avatar avatar-lg status-success" href="#">
									<img src="../images/avatar/3.jpg" class="bg-success-light" alt="...">
								  </a>
								  <div class="media-body">
									<p class="fs-16">
									  <a class="hover-primary" href="#">Johen Doe</a>
									</p>
									  <span class="text-muted">5 day ago</span>
								  </div>
								  <div class="media-right">
									  <div class="d-flex">
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star-half-o"></i>
									  </div>
								  </div>
								</div>					
								<div class="media pt-0">
									<p class="text-fade">Praesent venenatis viverra turpis quis varius. Nullam ullamcorper congue urna, in sodales eros placerat non.</p>
								</div>
							  </div>
							  <div class="media-list">
								<div class="media align-items-center">
								  <a class="avatar avatar-lg status-success" href="#">
									<img src="../images/avatar/4.jpg" class="bg-success-light" alt="...">
								  </a>
								  <div class="media-body">
									<p class="fs-16">
									  <a class="hover-primary" href="#">Tyler Mark</a>
									</p>
									  <span class="text-muted">7 day ago</span>
								  </div>
								  <div class="media-right">
									  <div class="d-flex">
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
									  </div>
								  </div>
								</div>					
								<div class="media pt-0">
									<p class="text-fade">Pellentesque a pretium orci. In hac habitasse platea dictumst. Nulla mattis odio enim, id euismod neque bibendum non.</p>
								</div>
							  </div>
							  <div class="media-list bb-1 bb-dashed border-light">
								<div class="media align-items-center">
								  <a class="avatar avatar-lg status-success" href="#">
									<img src="../images/avatar/5.jpg" class="bg-success-light" alt="...">
								  </a>
								  <div class="media-body">
									<p class="fs-16">
									  <a class="hover-primary" href="#">Theron Trump</a>
									</p>
									  <span class="text-muted">2 day ago</span>
								  </div>
								  <div class="media-right">
									  <div class="d-flex">
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star-half-o"></i>
									  </div>
								  </div>
								</div>					
								<div class="media pt-0">
									<p class="text-fade">Curabitur condimentum molestie ligula iaculis euismod. Fusce nulla lectus, tincidunt eu consequat.</p>
								</div>
							  </div>
							  <div class="media-list bb-1 bb-dashed border-light">
								<div class="media align-items-center">
								  <a class="avatar avatar-lg status-success" href="#">
									<img src="../images/avatar/6.jpg" class="bg-success-light" alt="...">
								  </a>
								  <div class="media-body">
									<p class="fs-16">
									  <a class="hover-primary" href="#">Johen Doe</a>
									</p>
									  <span class="text-muted">5 day ago</span>
								  </div>
								  <div class="media-right">
									  <div class="d-flex">
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star"></i>
										  <i class="text-warning fa fa-star-o"></i>
									  </div>
								  </div>
								</div>					
								<div class="media pt-0">
									<p class="text-fade">Proin lacinia eleifend nulla eu ornare. Integer commodo elit purus. Suspendisse mattis gravida interdum. In laoreet nisi eget felis ornare, tempus luctus nulla pellentesque. Donec maximus lobortis ullamcorper. </p>
								</div>
							  </div>
							</div>
						</div>
						<div class="box-footer">
							<a href="#" class="waves-effect waves-light d-block w-p100 btn btn-primary">See More Reviews</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">				
					<div class="box">
						<div class="box-header">							
							<div class="d-flex justify-content-between align-items-center">
								<h4 class="mb-0">Today Mettings</h4>
								<a href="#" class="">All Cases <i class="ms-10 fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="box-body p-15">	
							<div class="mb-10 d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									10:30am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/1.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">Sarah Hostemn</h6>
											<p class="mb-0 fs-12 text-mute">Personal Injury</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
							<div class="mb-10 d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									11:00am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/2.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">Dakota Smith</h6>
											<p class="mb-0 fs-12 text-mute">Domestic Violence</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									11:30am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/3.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">John Lane</h6>
											<p class="mb-0 fs-12 text-mute">Driving Crimes</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Appointments</h4>
						</div>
						<div class="box-body">
							<div id="paginator1"></div>
						</div>
						<div class="box-body">
							<div class="inner-user-div4">
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
											<span class="text-dark fs-16">Gun Crimes</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:00 <span class="mx-20">$ 30</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
											<span class="text-dark fs-16">Juvenile Crimes</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:30 <span class="mx-20">$ 50</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
											<span class="text-dark fs-16">Drug Crimes</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:00 <span class="mx-20">$ 70</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Harmani Doe</p>
											<span class="text-dark fs-16">Realestate Crimes</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:30 </p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Mark Wood</p>
											<span class="text-dark fs-16">Personal Injury</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 12:00 <span class="mx-20">$ 30</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-6.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Shawn Marsh</p>
											<span class="text-dark fs-16">Domestic Violence</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 13:00 <span class="mx-20">$ 90</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body px-0 pb-0">
							<div class="px-20 bb-1 pb-15 d-flex align-items-center justify-content-between">
								<h4 class="mb-0">Recent questions</h4>
								<div class="d-flex align-items-center justify-content-end">
									<button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light">All</button>
									<button type="button" class="waves-effect waves-light mx-10 btn btn-sm btn-primary">Unread</button>
									<button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light">New</button>
								</div>
							</div>
						</div>
						<div class="box-body">
							<div class="inner-user-div3">
								<div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
									<div class="pe-20">
										<p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>																	<h4>Creative Para Jóvenes: Designer’s UI/UX Complete Checklist.?</h4>												
										<div class="d-flex align-items-center">
											<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
											<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
										</div>
									</div>
									<div>
										<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-sm"><i class="fa fa-comments"></i></a>
									</div>
								</div>
								<div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
									<div class="pe-20">
										<p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>																	<h4>Definitive Guide to Make a Daily More Productive Working Flow?</h4>												
										<div class="d-flex align-items-center">
											<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
											<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
										</div>
									</div>
									<div>
										<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-sm"><i class="fa fa-comments"></i></a>
									</div>
								</div>
								<div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
									<div class="pe-20">
										<p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>																	<h4>The Start-Up Ultimate Guide to Make Your WordPress Journal?</h4>												
										<div class="d-flex align-items-center">
											<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
											<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
										</div>
									</div>
									<div>
										<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-sm"><i class="fa fa-comments"></i></a>
									</div>
								</div>
								<div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
									<div class="pe-20">
										<p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>																	<h4>Basic Rules of Running Web Morancy Business?</h4>												
										<div class="d-flex align-items-center">
											<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
											<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
										</div>
									</div>
									<div>
										<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-sm"><i class="fa fa-comments"></i></a>
									</div>
								</div>
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