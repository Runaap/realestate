<!-- footer -->
<div class="footer">
    <div class="container">

        <div class="footer-grids1">
            <div class="footer-grids1-left animated wow slideInLeft" data-wow-delay=".5s">
                <ul>
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/about-us')}}">About Us</a></li>
                    <li><a href="{{url('/project-gallery')}}">Project</a></li>
                    <li><a href="{{url('/image-gallery')}}">Gallery</a></li>
                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-grids1-right">
                <p class="animated wow slideInRight" data-wow-delay=".5s">&copy  All rights reserved | Created by <a href="" >Runa Ap</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{asset('/front/')}}js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>