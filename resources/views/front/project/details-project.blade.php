@extends('front.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="banner1">
        <div class="container">
            <h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>About Us</span></h2>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-7 single-grid-left">
                    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
                        <div class="single-grid-left-grid">
                            <img src="{{asset($getProject->image)}}" alt=" " class="img-responsive" />
                            <div class="single-grid-left-grid1">
                                <div class="single-grid-left-grid1-left">
                                    <p>Project Type: {{$getProject->type_name}}</p></br>
                                    <p>Project Status: {{$getProject->projectstatus_name}}</p>
                                </div>
                                <div class="single-grid-left-grid1-right">
                                    <h4>{{$getProject->project_name}}</h4></br>
                                    <p><img src="{{asset('/front/')}}/images/map.png" alt="" title=""/>: {{$getProject->district_name}}, {{$getProject->area_name}}. </p>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="fugiat">{{$getProject->project_description}}.</p>
                                <ul>
                                    <li></li>
                                    <li><span><img src="{{asset('/front/')}}/images/sft.png" alt="" title=""/></span> {{$getProject->squre_fit}}.</li>
                                    <li><span><img src="{{asset('/front/')}}/images/floor.jpg" alt="" title=""/></span> {{$getProject->floor}}.</li>
                                    <li><span><img src="{{asset('/front/')}}/images/bed.png" alt="" title=""/></span> {{$getProject->bed_no}}.</li>

                                </ul>
                                <ul>
                                    <li></li>
                                    <li><span><img src="{{asset('/front/')}}/images/bath.png" alt="" title=""/></span> {{$getProject->bath_no}}.</li>
                                    <li><span><img src="{{asset('/front/')}}/images/parking.png" alt="" title=""/></span> {{$getProject->parking_no}}.</li>

                                </ul>
                            </div>
                        </div>

                        <link rel="stylesheet" href="{{asset('/front/')}}/css/flexslider.css" type="text/css" media="screen" />
                        <script defer src="{{asset('/front/')}}/js/jquery.flexslider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function () {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function (slider) {
                                        $('body').removeClass('loading');
                                    }
                                });
                            });
                        </script>
                        <!--End-slider-script-->
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1 single-grid-right">
                    <div class="blog-right1">
                        <div class="related-posts">
                            <h3>Recent Post</h3>
                            @foreach($projects as $project)
                            <div class="related-post animated wow slideInUp" data-wow-delay=".5s">

                                <div class="related-post-left">
                                    <a href="{{url('details-project/'.$project->id)}}"><img src="{{asset($project->image)}}" alt="img" class="img-responsive" style="width: 100px; height: 100px;"/></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="{{url('details-project/'.$project->id)}}">{{$project->project_name}}</a></h4>
                                    <p><img src="{{asset('/front/')}}/images/map.png" alt="" title=""/>: {{$getProject->district_name}}, {{$getProject->area_name}}. </p>

                                    <ul>
                                        {{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{date('jS F, Y', strtotime($getProject->created_at))}}</li>--}}
                                        <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{date('j M, Y  h:i A', strtotime($getProject->created_at))}}</li>
                                    </ul>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        <div class="popular-posts">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Related Posts</h3>
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
    </div>
    </div>

@endsection