@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Edit User</h4>
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
        <form class="form" action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label class="form-label">UserName</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-user"></i></span>
                        <input type="text" class="form-control" placeholder="User name" name="name"
                            value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="email" class="form-control" placeholder="Branch Location" name="email"
                            value="{{ $user->email }}" required>
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
                                <option value="{{ $role->id }}"
                                    {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>


                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="text" class="form-control" placeholder="Password" name="password"
                            value="" >
                    </div>
                </div>

            </div>

            
            <!-- /.box-body -->
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    <i class="ti-save-alt"></i> Update User
                </button>
            </div>
        </form>
    </div>
    <!-- /.box -->
</div>
</div>
@endsection
