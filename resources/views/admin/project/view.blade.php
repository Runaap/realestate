@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                {{--for delete--}}
                {{--@if($message =Session::get('message'))--}}
                    {{--<h1 class="page-header text-success">{{$message}}</h1>--}}
                {{--@endif--}}
            </div>
            <!-- /.col-lg-12 -->
        </div><br>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Show All Product
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                               <tr>
                                <th>Project Name</th>
                                <td>{{$getProject->project_name}}</td>
                            </tr>
                            <tr>
                                <th>Project Type</th>
                                <td>{{$getProject->type_name}}</td>
                            </tr>
                            <tr>
                                <th>Project Status</th>
                                <td>{{$getProject->projectstatus_name}}</td>
                            </tr>

                            <tr>
                                <th>Project District</th>
                                <td>{{$getProject->district_name}}</td>
                            </tr>
                            <tr>
                                <th>Project Area</th>
                                <td>{{$getProject->area_name}}</td>
                            </tr>
                            <tr>
                                <th>Squre Fit</th>
                                <td>{{$getProject->squre_fit}}</td>
                            </tr>
                            <tr>
                                <th>Flat Position</th>
                                <td>{{$getProject->floor}}</td>
                            </tr>
                            <tr>
                                <th>Bed Number</th>
                                <td>{{$getProject->bed_no}}</td>
                            </tr>
                            <tr>
                                <th>Bath Number</th>
                                <td>{{$getProject->bath_no}}</td>
                            </tr><tr>
                                <th>Parking Number</th>
                                <td>{{$getProject->parking_no}}</td>
                            </tr>
                            <tr>
                                <th>Project Image</th>
                                <td><img src="{{asset($getProject->image)}}" style="width: 100px; height: 100px;"></td>
                            </tr>
                            <tr>
                                <th> Project Status</th>
                                <td>{{$getProject->publication_status==1?'published' :'unpublished'}}</td>
                            </tr>

                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection
