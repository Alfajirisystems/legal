@extends('layouts.auth_lockscreen_layout')

@section('content')

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg">
                        <div class="content-top-agile p-20">
                            <img src="../images/avatar/2.jpg" alt="User Image" class="rounded-circle">
                            <h3 class="mb-0">Maical Doe</h3>                                
                        </div>
                        <div class="p-40">
                            <form action="https://lawfirm-admin-template.multipurposethemes.com/main/index.html" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-info mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>        

                            <div class="text-center">
                              <p class="mt-20">- OR -</p>
                              <p class="mb-5">Enter your password to retrieve your session</p>    
                            </div>

                            <div class="text-center">
                                <p class="mt-15 mb-0">Or <a href="/" class="text-warning"><b>Sign In</b></a> as a Different User</p>
                            </div>
                        </div>
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
