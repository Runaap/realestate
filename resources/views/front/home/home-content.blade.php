@extends('front.master')
@section('title')
    Home
    @endsection
@section('content')

    <div class="example-animation">

        @foreach($sliders as $getSliders)
        <div data-lazy-background="{{asset($getSliders->image)}}" class="banner">
            <div class="container">
                <div class="banner-info">
                    <h3> Want to Sell Your Land !! Then Click "Add Sell" </h3>
                    <div class="more">
                        <a href="{{url('/land-owner')}}" class="hvr-shutter-in-vertical">Add Sell</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.example-animation').DrSlider(); //Yes! that's it!
        });
    </script>
    <!-- //banner -->
    <!-- services -->
    <div class="services">
        <div class="container bg-primary" style="padding: 60px;">
            <div class="place-grids">
                <form action="{{url('/residentail-project')}}" method="GET">
                    <div class="col-md-3 col-xs-4 place-grid">
                        <h5>Project Type</h5>
                        <select class="sel" name="type_id" required="">
                            <option value="">--Select--</option>
                            @foreach($projectType as $projectType)
                                <option value="{{$projectType->id}}">{{$projectType->type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 col-xs-4 place-grid">
                        <h5>Project Status</h5>
                        <select class="sel" name="project_status_id" required="">
                            <option value="">--Select--</option>
                        @foreach($projectStatus as $projectStatus)
                                <option value="{{$projectStatus->id}}">{{$projectStatus->projectstatus_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-xs-4 place-grid">
                        <h5> Land District</h5>
                        <select class="sel" name="district_id" required="">
                            <option value="">--Select--</option>
                        @foreach($districts as $district)
                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-xs-4 place-grid">
                        <h5>Land Area</h5>
                        <select class="sel" name="area_id" required="">
                            <option value="">--Select--</option>
                        @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->area_name}}</option>
                            @endforeach
                        </select>
                     </div>
                    <div class="property-search-btn">
                        <input type="submit" name="search" value="search" style="margin-top: 37px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- services-bottom -->

    <!-- //services-bottom -->
    <!-- testimonials -->

    <div class="popular-posts">
        <h3 class="animated wow zoomIn text-center" data-wow-delay=".5s">Our Recent Works</h3>
        <div class="popular-posts-grids">
            @foreach($projects as $project)
            <div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
                <div class="popular-posts-grid1">
                    <a href="{{url('/details-project/'.$project->id)}}"><img src="{{asset($project->image)}}" alt=" " class="img-responsive" /></a>
                    <h4><a href="{{url('/details-project/'.$project->id)}}">{{$project->project_name}}</a></h4>
                    <p>{{substr(strip_tags($project->project_description), 0, 100) . '...'}} </p>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>

    @endsection