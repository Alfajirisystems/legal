@extends('layouts.main')
@section('content')
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Update Letter</h4>
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
        <form class="form" action="{{ route('letters.update', $letter->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">
                
                <div class="form-group">
                    <label class="form-label">Date of Loss</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="date" class="form-control" placeholder="Date of loss" name="dateOfLoss" value="{{$letter->date}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Insured Party</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="text" class="form-control" placeholder="Insured party" name="insuredParty" value="{{$letter->insuredParty}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Nature of claim</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <textarea type="text" class="form-control" placeholder="Nature of claim" name="natureOfClaim"  value="{{$letter->natureOfClaim}}" required></textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Auther of claim</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="text" class="form-control" placeholder="Insured party" name="autherOfClaim" value="{{$letter->autherOfClaim}}"required>
                                         
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Attachment</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                        <input type="file" class="form-control" placeholder="Insured party" name="files[]" multiple >
                                          
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
@endsection
