@extends('admin.master')
@section('title')
   Update
@endsection
@section('content')


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Area</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h1 class="text-success">{{Session::get('message')}}</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('/update-project')}}" method="POST" name="editForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name"> Project Name</label>
                                        <input type="text" name="project_name" class="form-control" value="{{$projectById->project_name}}">
                                        <input type="hidden" name="project_id" class="form-control" value="{{$projectById->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Project Type</label>
                                        <select name="type_id" class="form-control">
                                            @foreach($projectType as $projectType)
                                                <option value="{{$projectType->id}}">{{$projectType->type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Project Status</label>
                                        <select name="project_status_id" class="form-control">
                                            @foreach($projectStatus as $projectStatus)
                                                <option value="{{$projectStatus->id}}">{{$projectStatus->projectstatus_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">District Name</label>
                                        <select name="district_id" class="form-control">
                                            @foreach($districts as $district)
                                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Area Name</label>
                                        <select name="area_id" class="form-control">
                                            @foreach($areas as $area)
                                                <option value="{{$area->id}}">{{$area->area_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Project Descrition</label>
                                        <textarea type="text" rows="15" name="project_description" id="" class="form-control textarea">{{$projectById->project_description}}</textarea>
                                        <span class="text-danger">{{$errors->has('project_description')?$errors->first('project_description'):''}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Squre Fit</label>
                                        <input type="text" name="squre_fit" class="form-control" value="{{$projectById->squre_fit}}">
                                        {{$errors->has('squre_fit') ? $errors->first('squre_fit'):''}}
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Flat Position</label>
                                        <input type="text" name="floor" class="form-control" value="{{$projectById->floor}}">
                                        {{$errors->has('floor') ? $errors->first('floor'):''}}
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Number of Bed</label>
                                        <input type="text" name="bed_no" class="form-control" value="{{$projectById->bed_no}}">
                                        {{$errors->has('bed_no') ? $errors->first('bed_no'):''}}
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Number of Bath</label>
                                        <input type="text" name="bath_no" class="form-control" value="{{$projectById->bath_no}}">
                                        {{$errors->has('bath_no') ? $errors->first('bath_no'):''}}
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Parking Nummber</label>
                                        <input type="text" name="parking_no" class="form-control" value="{{$projectById->parking_no}}">
                                        {{$errors->has('parking_no') ? $errors->first('parking_no'):''}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Project Image</label>
                                        <input type="file" name="image" accept="image/*">
                                        <img src="{{asset($projectById->image)}}" width="80" height="80" alt="logo">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Publication Status</label>
                                        <select name="publication_status" class="form-control">
                                            <option>--Publication Satus--</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="update" class="btn btn-primary btn-lg">Update</button>
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
    <script>
        document.forms['editForm'].elements['type_id'].value = '{{$projectById->type_id}}';
        document.forms['editForm'].elements['project_status_id'].value = '{{$projectById->project_status_id}}';
        document.forms['editForm'].elements['district_id'].value = '{{$projectById->district_id}}';
        document.forms['editForm'].elements['area_id'].value = '{{$projectById->area_id}}';
        document.forms['editForm'].elements['publication_status'].value = '{{$projectById->publication_status}}';
    </script>
@endsection
