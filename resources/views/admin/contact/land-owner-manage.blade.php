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
                                <th>Land Owner Name</th>
                                <th>Land Owner Email</th>
                                <th>Land Owner Number</th>
                                <th>Land Owner Address</th>
                                <th>Land Area</th>
                                <th>Land Size</th>
                                <th>Land Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($landOwners as $landOwner)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$landOwner->name}}</td>
                                    <td>{{$landOwner->email}}</td>
                                    <td>{{$landOwner->number}}</td>
                                    <td>{{$landOwner->owner_address}}</td>
                                    <td>{{$landOwner->land_area}}</td>
                                    <td>{{$landOwner->land_size}}</td>
                                    <td>{{$landOwner->land_address}}</td>
                                    <td>
                                        <a href="{{url('/delete-land-owner/'.$landOwner->id)}}" title="Delete"title="delete" onclick="return confirm('Are you sure, you want delete this?');"><button class="btn btn-danger btn-circle" type="button"><i class="fa fa-times"></i> </button></a>
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
