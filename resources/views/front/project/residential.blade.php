@extends('front.master')

@section('title')
    Residential
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="projects-title">
                    <h2> RESIDENTIAL PROJECTS</h2>
                </div>
            </div>
            @foreach($getProjects as $getProject)
            <div class="col-md-4">

                <div class="recent-projects">
                    <div class="recent-projects-thumd">

                        <div class="overlay"></div>
                        <a href="{{url('details-project/'.$getProject->id)}}"><div class="details"><i class="fa fa-angle-double-right"></i>details</div>
                            <div class="upcoming">{{$getProject->projectstatus_name}}</div>
                            <img src="{{asset($getProject->image)}}" alt="">
                        </a>
                    </div>
                    <a href="#">
                        <div class="recent-projects-name">
                            <h5>{{$getProject->project_name}}</h5>

                        </div>
                    </a>
                    <div class="recent-projects-status">
                        <ul>
                            <li><a href="">
                                    <h5><img src="{{asset('/front/')}}/images/map.png" alt="" title=""/>
                                        <span>{{$getProject->district_name}}, {{$getProject->area_name}}.</span></h5>
                                </a></li>
                        </ul>

                        <ul>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/sft.png" alt="" title=""/>
                                        <span>{{$getProject->squre_fit}}.</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/bed.png" alt="" title=""/>
                                        <span>{{$getProject->bed_no}}.</span>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/bath.png" alt="" title=""/>
                                        <span>{{$getProject->bath_no}}.</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/parking.png" alt="" title=""/>
                                        <span>{{$getProject->parking_no}}.</span>
                                    </div>
                                </a></li>
                        </ul>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
