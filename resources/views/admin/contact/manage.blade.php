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
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Number</th>
                            <th>Customer Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                         @php($i=1)
                        @foreach($contacts as $contacts)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$contacts->name}}</td>
                            <td>{{$contacts->email}}</td>
                            <td>{{$contacts->number}}</td>
                            <td>{{$contacts->message}}</td>
                            <td>
                                    <a href="{{url('/delete-contact/'.$contacts->id)}}" title="Delete"title="delete" onclick="return confirm('Are you sure, you want delete this?');"><button class="btn btn-danger btn-circle" type="button"><i class="fa fa-times"></i> </button></a>
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
