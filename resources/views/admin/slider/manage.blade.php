@extends('admin.master')
@section('title')
    Manage Category
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
                        <a class="btn btn-success btn-group-xs" href="{{url('/add-slider')}}"><i class="fa fa-plus"></i> Add New</a>
                    </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Slider Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Caption</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($getSliders as $getSlider)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$getSlider->caption}}</td>
                            <td><img src="{{asset($getSlider->image)}}" style="width: 150px; height: 40px;"></td>
                            <td>
                                <a href="{{url('/delete-slider/'.$getSlider->id)}}" title="Delete"title="delete" onclick="return confirm('Are you sure, you want delete this?');"><button class="btn btn-danger btn-circle" type="button"><i class="fa fa-times"></i> </button></a>
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
