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
                                <form action="{{url('/update-area')}}" method="POST" name="editForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">District Name</label>
                                        <select name="district_id" class="form-control">
                                            @foreach($districts as $district)
                                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Area Name</label>
                                        <input type="text" name="area_name" class="form-control" value="{{$getAreaById->area_name}}">
                                        <input type="hidden" name="area_id" class="form-control" value="{{$getAreaById->id}}">
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
        document.forms['editForm'].elements['district_id'].value = '{{$getAreaById->district_id}}';
        document.forms['editForm'].elements['publication_status'].value = '{{$getAreaById->publication_status}}';
    </script>
@endsection
