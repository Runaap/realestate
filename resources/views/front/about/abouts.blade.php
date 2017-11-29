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
    <div class="about">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">About Us</h3>
            <p class="qui animated wow zoomIn" data-wow-delay=".5s">In change we believe… We change….</p>
            <div class="about-grids">
                <div class="col-md-6 about-grids-left">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-sub" role="tab" id="headingOne">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>assumenda est cliche repreh
                                    </a>
                                </h4>
                            </div>
                            <div id="" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body panel_text">
                                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                    rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                                    consequatur aut perferendis doloribus asperiores repellat.<br>
                                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                    rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                                    consequatur aut perferendis doloribus asperiores repellat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 about-grids-right animated wow slideInRight" data-wow-delay=".5s">
                    <img src="{{asset('/front/')}}/images/3.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Our Amazing Team</h3>
            <p class="qui animated wow zoomIn" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
            <div class="team-grids">
                <div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".5s">
                    <img src="{{asset('/front/')}}/images/pic.jpg" alt=" " class="img-responsive" />
                    <h4>Runa Pervin <span>Contractor</span></h4>
                    <ul class="social-nav model-8">
                        <li><a href="https://www.facebook.com/" class="facebook"><i></i></a></li>
                        <li><a href="https://twitter.com/" class="twitter"><i> </i></a></li>
                        <li><a href="https://www.google.com/" class="g"><i></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".5s">
                    <img src="{{asset('/front/')}}/images/5.png" alt=" " class="img-responsive" />
                    <h4>Smith Kevin <span>Contractor</span></h4>
                    <ul class="social-nav model-8">
                        <li><a href="https://www.facebook.com/" class="facebook"><i></i></a></li>
                        <li><a href="https://twitter.com/" class="twitter"><i> </i></a></li>
                        <li><a href="https://www.google.com/" class="g"><i></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".6s">
                    <img src="{{asset('/front/')}}/images/6.png" alt=" " class="img-responsive" />
                    <h4>Allen Rosy <span>Contractor</span></h4>
                    <ul class="social-nav model-8">
                        <li><a href="https://www.facebook.com/" class="facebook"><i></i></a></li>
                        <li><a href="https://twitter.com/" class="twitter"><i> </i></a></li>
                        <li><a href="https://www.google.com/" class="g"><i></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 team-grid animated wow slideInLeft" data-wow-delay=".7s">
                    <img src="{{asset('/front/')}}/images/7.png" alt=" " class="img-responsive" />
                    <h4>Andrew Mark <span>Contractor</span></h4>
                    <ul class="social-nav model-8">
                        <li><a href="https://www.facebook.com/" class="facebook"><i></i></a></li>
                        <li><a href="https://twitter.com/" class="twitter"><i> </i></a></li>
                        <li><a href="https://www.google.com/" class="g"><i></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <p class="animated wow slideInUp" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
            </div>
        </div>
    </div>


@endsection