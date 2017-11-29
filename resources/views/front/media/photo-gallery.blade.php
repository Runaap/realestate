@extends('front.master')

@section('title')
   Gallery
@endsection

@section('content')
<div class="banner1">
    <div class="container">
        <h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Gallery</span></h2>
    </div>
</div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery">
    <div class="container">
        <h3 class="animated wow zoomIn" data-wow-delay=".5s">Our Gallery</h3>
        <p class="qui animated wow zoomIn" data-wow-delay=".5s">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
        <div class="gallery-grids">
            <div class="gallery-grids1">
                @foreach($galleries as $galleries)
                <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s" style="margin-bottom: 10px;">
                    <a href="{{asset($galleries->image)}}" class="big">
                        <img src="{{asset($galleries->image)}}" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                        <div class="textbox textbox1">
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('/front/')}}/js/simple-lightbox.min.js"></script>
        <script>
            $(function(){
                var gallery = $('.gallery a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
            });
        </script>
    </div>
</div>
@endsection