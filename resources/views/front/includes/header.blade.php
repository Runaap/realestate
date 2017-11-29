
<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="logo">
                    <a class="" href="{{url('/')}}"><img src="{{asset('/front/')}}/images/logo.jpg" alt=""></a>
                </div>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--francisco">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="{{url('/')}}" class="menu__link"><span class="menu__helper">Home</span></a></li>
                        <li class="menu__item"><a href="{{url('/about-us')}}" class="menu__link"><span class="menu__helper">About Us</span></a></li>
                        <li class="menu__item"><a href="{{url('/project')}}" class="menu__link"><span class="menu__helper">Project</span></a></li>
                        {{--<li class="menu__item dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Project <b class="caret"></b></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="short-codes.htm">Icons</a></li>--}}
                                {{--<li><a href="typography.html">Typography</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        <li class="menu__item"><a href="{{url('/image-gallery')}}" class="menu__link"><span class="menu__helper">Gallery</span></a></li>
                        <li class="menu__item"><a href="{{url('/land-owner')}}" class="menu__link">Land Owner</a></li>
                        <li class="menu__item"><a href="{{url('/contact-us')}}" class="menu__link"><span class="menu__helper">Contact Us</span></a></li>

                    </ul>
                </nav>

            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>