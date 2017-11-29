

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Real Estate</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>{{Auth::user()->name}} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        Logout
                    </a>

                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i> Project Type<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-project-type')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-project-type')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-renren fa-fw"></i> Project Status<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-project-status')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-project-status')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-map-marker fa-fw"></i> District<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-district')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-district')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-location-arrow fa-fw"></i> Area<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-area')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-area')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Project<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-project')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-project')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sliders fa-fw"></i>Slider Info<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-slider')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-slider')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o fa-fw"></i>Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add-gallery')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/manage-gallery')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i>Land Owner<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage-land-owner')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone fa-fw"></i>Contact<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage-contact')}}">Manage</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                {{--<li>--}}
                    {{--<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                        {{--<li>--}}
                            {{--<a href="blank.html">Blank Page</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>