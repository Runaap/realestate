@extends('admin.master')
@section('title')
    Manage
@endsection
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            {{--for delete--}}
            @if($message =Session::get('message'))
            <h1 class="page-header text-success">{{$message}}</h1>
                @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-11">
                    <span class="pull-right" style="margin: 15px;">
                        <a class="btn btn-success btn-group-xs" href="{{url('/add-district')}}"><i class="fa fa-plus"></i> Add New</a>
                    </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show All Project Type
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>District Id</th>
                            <th>District Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                         @php($i=1)
                        @foreach($getDistricts as $getDistrict)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$getDistrict->id}}</td>
                            <td>{{$getDistrict->district_name}}</td>
                            <td>{{$getDistrict->publication_status==1?'published' :'unpublished'}}</td>
                            <td>
                                @if($getDistrict->publication_status==1)
                                    <a href="{{url('/unpulished-district/'.$getDistrict->id)}}" title="Published"><button class="btn btn-success btn-circle" type="button"><i class="fa fa-arrow-up"></i> </button></a>
                                 @else
                                    <a href="{{url('/pulished-district/'.$getDistrict->id)}}" title="Unpublished"><button class="btn btn-warning btn-circle" type="button"><i class="fa fa-arrow-down"></i> </button></a>
                                @endif
                                    <a href="{{url('/edit-district/'.$getDistrict->id)}}" title="Edit"><button class="btn btn-info btn-circle" type="button"><i class="fa fa-pencil"></i> </button></a>
                                    <a href="{{url('/delete-district/'.$getDistrict->id)}}" title="Delete"title="delete" onclick="return confirm('Are you sure, you want delete this?');"><button class="btn btn-danger btn-circle" type="button"><i class="fa fa-times"></i> </button></a>
                            </td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    </div>
@endsection
