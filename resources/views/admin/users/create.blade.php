@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Create User</h4>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- /.box-header -->
        <form class="form" action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label class="form-label">UserName</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Role</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <?php
                        $roles=App\Models\Roles::all();
                        ?>

                        <select class="form-control" name="role_id">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                      
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Password" name="password" required>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    <i class="ti-save-alt"></i> Submit
                </button>
            </div>
        </form>
    </div>
    <!-- /.box -->
</div>
</div>
@endsection
