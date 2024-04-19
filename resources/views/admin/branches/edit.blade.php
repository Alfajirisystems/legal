@extends('layouts.main')
@section('content')
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Create Branch</h4>
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
        <form class="form" action="{{ route('branches.update', $branch->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label class="form-label">Branch Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-user"></i></span>
                        <input type="text" class="form-control" placeholder="Branch name" name="name" value="{{ $branch->name }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Branch Location</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="text" class="form-control" placeholder="Branch Location" name="location" value="{{ $branch->location }}" required>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    <i class="ti-save-alt"></i> Update Branch
                </button>
            </div>
        </form>
    </div>
    <!-- /.box -->
</div>
@endsection
