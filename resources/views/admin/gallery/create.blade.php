@extends('admin.master')
@section('title')
    Add Slider
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Gallery</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="text-success">{{Session::get('message')}}</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('/new-gallery')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name"> Slider Caption</label>
                                        <input type="text" name="caption" class="form-control" value="" placeholder="Caption">
                                        <span class="text-danger">{{$errors->has('caption')?$errors->first('caption'):''}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Slider Image</label>
                                        <input type="file" name="image" accept="image/*">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
