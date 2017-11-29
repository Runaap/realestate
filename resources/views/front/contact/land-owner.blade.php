@extends('front.master')

@section('title')
   Land Owner
@endsection

@section('content')

    <div class="banner1">
        <div class="container">
            <h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Land Owner</span></h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Land Owner</h3>
            <p class="qui animated wow zoomIn" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
            <div class="mail-grids">
                <div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <form action="{{url('/owner')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="" placeholder="Name">
                            {{$errors->has('name') ? $errors->first('area_name'):''}}
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                            {{$errors->has('email') ? $errors->first('email'):''}}
                        </div>
                        <div class="form-group">
                            <input type="text" name="number" class="form-control" value="" placeholder="Ex:01...">
                            {{$errors->has('number') ? $errors->first('number'):''}}
                        </div>
                        <div class="form-group">
                            <textarea type="text" rows="7" name="owner_address" id="" class="form-control textarea"></textarea>
                            {{$errors->has('owner_address') ? $errors->first('owner_address'):''}}
                        </div>
                        <div class="form-group">
                            <input type="text" name="land_area" class="form-control" value="" placeholder="Land Area">
                            {{$errors->has('land_area') ? $errors->first('land_area'):''}}
                        </div>
                        <div class="form-group">
                            <input type="text" name="land_size" class="form-control" value="" placeholder="Land Size">
                            {{$errors->has('land_size') ? $errors->first('land_size'):''}}
                        </div>
                        <div class="form-group">
                            <textarea type="text" rows="7" name="land_address" id="" class="form-control textarea"></textarea>
                            {{$errors->has('land_address') ? $errors->first('land_address'):''}}
                        </div>

                        <input type="submit" name="submit" value="Submit Now" >
                    </form>
                </div>
                <div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="blog-right1">
                        <div class="related-posts">

                            <h3>Recent Post</h3>
                            <div class="related-post animated wow slideInUp" data-wow-delay=".5s">
                                <div class="related-post-left">
                                    <a href="single.html"><img src="{{asset('/front/')}}/images/10.jpg" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="single.html">Donec sollicitudin</a></h4>
                                    <p>Aliquam dapibus tincidunt metus.
                                        <span>Praesent justo dolor, lobortis.</span>
                                    </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 10:00 AM</li>
                                        <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 5 May 2016</li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="related-post animated wow slideInUp" data-wow-delay=".5s">
                                <div class="related-post-left">
                                    <a href="single.html"><img src="{{asset('/front/')}}/images/7.jpg" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="single.html">tincidunt metus</a></h4>
                                    <p>Aliquam dapibus tincidunt metus.
                                        <span>Praesent justo dolor, lobortis.</span>
                                    </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11:30 AM</li>
                                        <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 9 May 2016</li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="related-post animated wow slideInUp" data-wow-delay=".5s">
                                <div class="related-post-left">
                                    <a href="single.html"><img src="{{asset('/front/')}}/images/5.jpg" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="single.html">earum rerum hic</a></h4>
                                    <p>Aliquam dapibus tincidunt metus.
                                        <span>Praesent justo dolor, lobortis.</span>
                                    </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12:30 PM</li>
                                        <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 17 May 2016</li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="related-post animated wow slideInUp" data-wow-delay=".5s">
                                <div class="related-post-left">
                                    <a href="single.html"><img src="{{asset('/front/')}}/images/6.jpg" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="single.html">saepe eveniet ptates</a></h4>
                                    <p>Aliquam dapibus tincidunt metus.
                                        <span>Praesent justo dolor, lobortis.</span>
                                    </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2:00 PM</li>
                                        <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 23 May 2016</li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7638135888296!2d-77.47669308468912!3d39.04350424592369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b63eb3bc8da92b%3A0x78c8e09ab1cabc90!2sShopping+Plaza%2C+Ashburn%2C+VA+20147%2C+USA!5e0!3m2!1sen!2sin!4v1457602090579" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection