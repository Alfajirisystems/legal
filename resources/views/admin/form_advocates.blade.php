@extends('layouts.forms.advocates_form_layout')
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
				
			</div>
		</div>
		  
		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class="col-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">New Advocate</h3>
                    </div>
                    <form action="submit_data.php" method="post">
                    <div class="box-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="advocate_id">Advocate ID (Optional):</label>
                            <input type="text" class="form-control" id="advocate_id" name="advocate_id">
                            </div>
                            <div class="form-group">
                            <label for="firm">Firm:</label>
                            <input type="text" class="form-control" id="firm" name="firm" required>
                            </div>
                            <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="physical_address">Physical Address:</label>
                            <textarea class="form-control" rows="4" id="physical_address" name="physical_address" required></textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </section>

		<!-- /.content -->
	  </div>
  </div>
@endsection