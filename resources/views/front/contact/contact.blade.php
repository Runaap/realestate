@extends('front.master')

@section('title')
    Contact Us
@endsection

@section('content')

    <div class="banner1">
        <div class="container">
            <h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Contact Us</span></h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Contact Us</h3>
            <p class="qui animated wow zoomIn" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
            <div class="mail-grids">
                <div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <form action="{{url('/contact')}}" method="post">
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
                            <textarea type="text" rows="15" name="message" id="" class="form-control textarea"></textarea>
                            {{$errors->has('message') ? $errors->first('message'):''}}
                        </div>
                        <input type="submit" name= submit value="Submit Now" >
                    </form>
                </div>
                <div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="mail-grid-right1">
                        <img src="{{asset('/front/')}}/images/ap.jpg" alt=" " class="img-responsive" />
                        <h4>Runa Pervin <span>Contractor</span></h4>
                        <ul class="phone-mail">
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +01623152921</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">runaju105@gmail.com</a></li>
                        </ul>
                        <ul class="social-nav model-8">
                            <li><a href="#" class="facebook"><i></i></a></li>
                            <li><a href="#" class="twitter"><i> </i></a></li>
                            <li><a href="#" class="g"><i></i></a></li>
                            <li><a href="#" class="p"><i></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7638135888296!2d-77.47669308468912!3d39.04350424592369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b63eb3bc8da92b%3A0x78c8e09ab1cabc90!2sShopping+Plaza%2C+Ashburn%2C+VA+20147%2C+USA!5e0!3m2!1sen!2sin!4v1457602090579" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection