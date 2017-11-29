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
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="projects-title animated wow zoomIn animated">
                    <h2>Residential projects</h2>
                </div>
                <div class="recent-projects">
                    <div class="recent-projects-thumd">

                        <div class="overlay"></div>
                        <a href="{{url('/residentail-project')}}"><div class="details"><i class="fa fa-angle-double-right"></i>All Project</div>
                            <img src="{{asset('/front/')}}/images/4.jpg" alt="">
                        </a>
                    </div>
                    <a href="#">
                        <div class="recent-projects-name">
                            <h5>Equity Arunimas</h5>

                        </div>
                    </a>
                    <div class="recent-projects-status">
                        <ul>
                            <li><a href="">
                                    <h5><img src="{{asset('/front/')}}/images/map.png" alt="" title=""/>
                                        <span>Dhanmondi, Dhaka.</span></h5>
                                </a></li>
                        </ul>

                        <ul>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/bed.png" alt="" title=""/>
                                        <span>1800Sqr</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/bath.png" alt="" title=""/>
                                        <span>4 Bed.</span>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/parking.png" alt="" title=""/>
                                        <span>4 bath.</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/sft.png" alt="" title=""/>
                                        <span>2 Car.</span>
                                    </div>
                                </a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="projects-title animated wow zoomIn animated">
                    <h2>Commercial projects</h2>
                </div>
                <div class="recent-projects">
                    <div class="recent-projects-thumd">

                        <div class="overlay"></div>
                        <a href="{{url('/commercial-project')}}"><div class="details"><i class="fa fa-angle-double-right"></i> All Project</div>
                            <img src="{{asset('/front/')}}/images/12.jpg" alt="">
                        </a>
                    </div>
                    <a href="#">
                        <div class="recent-projects-name">
                            <h5>Equity Kohinoor</h5>

                        </div>
                    </a>
                    <div class="recent-projects-status">
                        <ul>
                            <li><a href="">
                                    <h5><img src="{{asset('/front/')}}/images/map.png" alt="" title=""/>
                                        <span>Savar, Dhaka</span></h5>
                                </a></li>
                        </ul>

                        <ul>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/bed.png" alt="" title=""/>
                                        <span>1200Sqr</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/bath.png" alt="" title=""/>
                                        <span>4 Bed.</span>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="projects-details-left">
                                        <img src="{{asset('/front/')}}/images/parking.png" alt="" title=""/>
                                        <span>4 bath.</span>
                                    </div>
                                    <div class="projects-details-right">
                                        <img src="{{asset('/front/')}}/images/sft.png" alt="" title=""/>
                                        <span>2 Car.</span>
                                    </div>
                                </a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection