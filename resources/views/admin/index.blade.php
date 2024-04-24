
@extends('layouts.main')
@section('content')

			<div class="row">								
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header no-border">
							<h3 class="box-title">Total Cases (850)</h3>
						</div>
						<div class="box-body py-0 px-0">
							<div class="chart" id="totalcases"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header no-border">
							<h3 class="box-title">Settled Cases (745)</h3>
						</div>
						<div class="box-body py-0 px-0">
							<div class="chart" id="settledcases"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0 text-center">
							<div class="d-flex justify-content-around">
								<div class="bg-primary p-20 w-p100">									
									<div class="fw-400"><h1 class="mb-2">Won</h1></div>
									<span class="text-white fs-60 icon-Like"><span class="path1"></span><span class="path2"></span></span>
									<div class="text-white fw-600 mb-2 mt-5"><h2>170</h2></div>
									<div class="text-white-50"><h4 class="mb-0">56.7%</h4></div>
								</div>
								<div class="bg-danger p-20 w-p100">									
									<div class="fw-400"><h1 class="mb-2">Lost</h1></div>
									<span class="text-white fs-60 icon-Dislike rotate-180"><span class="path1"></span><span class="path2"></span></span>
									<div class="text-white fw-600 mb-2 mt-5"><h2>79</h2></div>
									<div class="text-white-50"><h4 class="mb-0">26.3%</h4></div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Opportunity Outcome</h3>
						</div>
						<div class="box-body py-xl-0">
							<div class="chart" id="opportunityoutcome"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box overflow-h">
						<div class="box-header">
							<h3 class="box-title">Earning this month</h3>
						</div>
						<div class="box-body pb-0">
							<h4 class="text-dark">$6,586.40 
								<small class="text-success">25% 
								<span class="badge badge-pill badge-success-light"><i class="fa fa-angle-up text-success"></i></span></small>
							</h4>
							<div id="statisticschart5"></div>
						</div>
					</div>
					<div class="box bg-info-light">
						<div class="box-body text-center">
							<div class="d-flex justify-content-between align-items-center mb-20">
								<h3 class="fw-400 mb-0">Declined</h3>
								<span class="text-info fs-36 icon-Warning-2"><span class="path1"></span><span class="path2"></span><span class="path2"></span></span>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<h4 class="text-info fs-22 mb-0">51</h4>
								<div class="text-info-50 fs-20">17.0%</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Revenue</h3>
						</div>
						<div class="box-body py-0">
							<div id="charts_widget_43_chart"></div>						
						</div>
					</div>	
				</div>			
				<div class="col-xl-6 col-12">					
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Outcomes by Opportunity Source</h3>
						</div>
						<div class="box-body py-0">
							<div class="chart" id="opportunityoutcome2"></div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title align-items-start flex-column">
								Ongoing Cases
							</h3>
						</div>
						<div class="box-body py-0">
							<div class="table-responsive">
								<table class="table mb-0 no-border">
									<tbody>
										<tr>										
											<td class="ps-0 py-1">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/1.jpg)"></div>
													</div>
													<div>
														<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Doe</a>
														<span class="text-fade d-block">johen@dummy.com</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade d-block">
													Case Type
												</span>
												<span class="fs-16">
													Business Litigation
												</span>
											</td>
											<td>
												<span class="text-fade d-block">
													Attorney
												</span>
												<span class="fs-16">
													Mical Lobani
												</span>
											</td>
											<td>
												<span class="badge badge-primary badge-lg">3 hearing</span>
											</td>
											<td class="text-end">
												<a href="#" class="waves-effect waves-light btn btn-xs btn-primary btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
												<a href="#" class="waves-effect waves-light btn btn-xs btn-danger btn-circle mx-5"><span class="icon-Trash1"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="ps-0 py-1">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/3.jpg)"></div>
													</div>
													<div>
														<a href="#" class="text-dark hover-primary mb-1 fs-16">Hemani Doe</a>
														<span class="text-fade d-block">hemani@dummy.com</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade d-block">
													Case Type
												</span>
												<span class="fs-16">
													Family Case
												</span>
											</td>
											<td>
												<span class="text-fade d-block">
													Attorney
												</span>
												<span class="fs-16">
													Jack Lobani
												</span>
											</td>
											<td>
												<span class="badge badge-primary badge-lg">1 hearing</span>
											</td>
											<td class="text-end">
												<a href="#" class="waves-effect waves-light btn btn-xs btn-primary btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
												<a href="#" class="waves-effect waves-light btn btn-xs btn-danger btn-circle mx-5"><span class="icon-Trash1"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="ps-0 py-1">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/2.jpg)"></div>
													</div>
													<div>
														<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Clark</a>
														<span class="text-fade d-block">johen@dummy.com</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade d-block">
													Case Type
												</span>
												<span class="fs-16">
													Criminal Case
												</span>
											</td>
											<td>
												<span class="text-fade d-block">
													Attorney
												</span>
												<span class="fs-16">
													Johen Panthar
												</span>
											</td>
											<td>
												<span class="badge badge-primary badge-lg">4 hearing</span>
											</td>
											<td class="text-end">
												<a href="#" class="waves-effect waves-light btn btn-xs btn-primary btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
												<a href="#" class="waves-effect waves-light btn btn-xs btn-danger btn-circle mx-5"><span class="icon-Trash1"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="ps-0 py-1">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/4.jpg)"></div>
													</div>
													<div>
														<a href="#" class="text-dark hover-primary mb-1 fs-16">Lovish Doe</a>
														<span class="text-fade d-block">lovish@dummy.com</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade d-block">
													Case Type
												</span>
												<span class="fs-16">
													Driving Case
												</span>
											</td>
											<td>
												<span class="text-fade d-block">
													Attorney
												</span>
												<span class="fs-16">
													Mical Clark
												</span>
											</td>
											<td>
												<span class="badge badge-warning badge-lg">0 hearing</span>
											</td>
											<td class="text-end">
												<a href="#" class="waves-effect waves-light btn btn-xs btn-primary btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
												<a href="#" class="waves-effect waves-light btn btn-xs btn-danger btn-circle mx-5"><span class="icon-Trash1"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="ps-0 py-1">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/avatar/5.jpg)"></div>
													</div>
													<div>
														<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Paton</a>
														<span class="text-fade d-block">johen@dummy.com</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade d-block">
													Case Type
												</span>
												<span class="fs-16">
													Financial Case
												</span>
											</td>
											<td>
												<span class="text-fade d-block">
													Attorney
												</span>
												<span class="fs-16">
													Mical Lobani
												</span>
											</td>
											<td>
												<span class="badge badge-primary badge-lg">2 hearing</span>
											</td>
											<td class="text-end">
												<a href="#" class="waves-effect waves-light btn btn-xs btn-primary btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
												<a href="#" class="waves-effect waves-light btn btn-xs btn-danger btn-circle mx-5"><span class="icon-Trash1"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
				<div class="col-xl-4 col-12"> 
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Latest Matters</h3>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/logo/logo-1.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-primary mb-1 fs-16">Centurion</a>
									<span class="text-fade">Volkswagen trial</span>
								</div>								
							</div>
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/logo/logo-2.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-danger mb-1 fs-16">Athena</a>
									<span class="text-fade">HSBC taxation</span>
								</div>								
							</div>
							<div class="d-flex align-items-center">
								<div class="me-15">
									<img src="../images/logo/logo-3.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-success mb-1 fs-16">Gemini</a>
									<span class="text-fade">BP merger & acquisition</span>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12"> 
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Latest task</h3>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/logo/logo-4.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-primary mb-1 fs-16">Produce DD report</a>
									<span class="text-fade">Centurion</span>
								</div>	
								<div>
									<input name="group1" type="radio" id="radio_1">
									<label for="radio_1"></label>
								</div>
							</div>
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/logo/logo-5.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-danger mb-1 fs-16">Closing meeting</a>
									<span class="text-fade">Bucephale</span>
								</div>		
								<div>
									<input name="group1" type="radio" id="radio_2">
									<label for="radio_2"></label>
								</div>							
							</div>
							<div class="d-flex align-items-center">
								<div class="me-15">
									<img src="../images/logo/logo-2.jpg" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-success mb-1 fs-16">Fly to SanFransisco</a>
									<span class="text-fade">Lancelot</span>
								</div>	
								<div>
									<input name="group1" type="radio" id="radio_3">
									<label for="radio_3"></label>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12"> 
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">New Members</h3>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-primary mb-1 fs-16">Fiona Daniels</a>
									<span class="text-fade">Senior associate</span>
								</div>	
								<div class="d-flex align-items-center">
									<a href="#" class="waves-effect waves-light btn btn-xs btn-warning-light btn-circle mx-5"><i class="mdi mdi-phone"></i></a>
									<a href="#" class="waves-effect waves-light btn btn-xs btn-success-light btn-circle mx-5"><i class="mdi mdi-comment"></i></a>
								</div>
							</div>
							<div class="d-flex align-items-center mb-30">
								<div class="me-15">
									<img src="../images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-danger mb-1 fs-16">Denise Johnson</a>
									<span class="text-fade">Partners</span>
								</div>	
								<div class="d-flex align-items-center">
									<a href="#" class="waves-effect waves-light btn btn-xs btn-warning-light btn-circle mx-5"><i class="mdi mdi-phone"></i></a>
									<a href="#" class="waves-effect waves-light btn btn-xs btn-success-light btn-circle mx-5"><i class="mdi mdi-comment"></i></a>
								</div>						
							</div>
							<div class="d-flex align-items-center">
								<div class="me-15">
									<img src="../images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
								</div>
								<div class="d-flex flex-column flex-grow-1 fw-500">
									<a href="#" class="text-dark hover-success mb-1 fs-16">Charlotte Doe</a>
									<span class="text-fade">Associate</span>
								</div>
								<div class="d-flex align-items-center">
									<a href="#" class="waves-effect waves-light btn btn-xs btn-warning-light btn-circle mx-5"><i class="mdi mdi-phone"></i></a>
									<a href="#" class="waves-effect waves-light btn btn-xs btn-success-light btn-circle mx-5"><i class="mdi mdi-comment"></i></a>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>				
		

@endsection