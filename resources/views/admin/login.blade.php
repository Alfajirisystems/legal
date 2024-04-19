@extends('layouts.login_layout')

@section('content')

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">    
        
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Let's Get Started</h2>
                            <p class="mb-0">Sign in to continue to Law Firm.</p>                            
                        </div>
                        <div class="p-40">
                            <form action="/" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                        <input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-6">
                                      <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1" name="remember">
                                        <label for="basic_checkbox_1">Remember Me</label>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                     <div class="fog-pwd text-end">
                                        <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>    
                            <div class="text-center">
                                <p class="mt-15 mb-0">Don't have an account? <a href="#" class="text-warning ms-5">Sign Up</a></p>
                            </div>    
                        </div>                      
                    </div>
                    <div class="text-center">
                      <p class="mt-20 text-white">- Sign With -</p>
                      <p class="gap-items-2 mb-20">
                          <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  


<!-- Vendor JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>
<script src="{{ asset('js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>  

@endsection
