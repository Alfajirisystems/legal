@extends('layouts.main')

@section('content')

            <div class="row">

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Branches</h3>
                            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        
                            <a href="{{ route('admin.branches.create') }}" class="btn btn-rounded btn-info mb-5">
                                <i class="fa fa-plus"></i> Add New Branch</a>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            
                                        </tr>
                                    </thead>
                                  <tbody>
                                    @foreach($branches as $branch)
                                    <tr>
                                        <td>{{$branch->id}}</td>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$branch->location}}</td>
                                        
                                    </tr>
                                    @endforeach
                                  </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
            </div>
            

            @endsection
