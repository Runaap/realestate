@extends('admin.master')
@section('title')
    Project Type
@endsection
@section('content')


<div id="page-wrapper">
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Project Type</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                 <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-success">{{Session::get('message')}}</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{url('/create-project-type')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="name"> Project Type</label>
                                            <input type="text" name="type_name" class="form-control" value="" placeholder="Project Type">
                                            {{$errors->has('type_name') ? $errors->first('type_name'):''}}
                                         </div>
                                        <div class="form-group">
                                           <label for="inputPassword3" control-label>Publication Status</label>
                                        <select name="publication_status" class="form-control">
                                           <option>--Select--</option>
                                           <option value="1">Published</option>
                                           <option value="0">Unpublished</option>
                                       </select>
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
