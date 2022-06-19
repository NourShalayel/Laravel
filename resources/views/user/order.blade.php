@extends('userPage.menuuser')

@section('content')

<html>

<head>

</head>
<body>


<link rel="stylesheet" type="text/css" media="screen" href="../new/css/clientpage.css" />
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
        <div class="form-area">
            <form role="form"  action="conform_order.php" method="POST">
                <br style="clear: both">
                <br>


{{--                <!-- <div class="form-group"> -->--}}
{{--                <h5> Selected Car:&nbsp;  <b><?php echo($car_name);?></b></h5>--}}
{{--                <!-- </div> -->--}}

{{--                <!-- <div class="form-group"> -->--}}
{{--                <h5> Model:&nbsp;<b> <?php echo($model);?></b></h5>--}}
{{--                <h5> Company Name :<b> <?php echo($company_name);?></b></h5>--}}
{{--                <h5> Color :<b> <?php echo($color);?></b></h5>--}}
{{--                <!-- </div>      -->--}}
{{--                <!-- <div class="form-group"> -->--}}
{{--                <?php $today = date("Y-m-d") ?>--}}
{{--                <label><h5>Start Date:</h5></label>--}}
{{--                <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">--}}
{{--                &nbsp;--}}
{{--                <label><h5>End Date:</h5></label>--}}
{{--                <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">--}}
{{--                <!-- </div>      -->--}}



                <h5> Charge type:  &nbsp;
                    <input onclick="reveal()" type="radio" name="radio1" value="km"><b> per KM</b> &nbsp;
                    <input onclick="reveal()" type="radio" name="radio1" value="days"><b> per day</b>

                    <br><br>

                    <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">
            </form>

        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 500</span> for each day after the due date ends.</h6>
        </div>
    </div>
</div>

<div class="mkl_footer">
    <div class="sub-footer">
        <div class="container">
            <div class="mkls_footer_grid">
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Location:</h4>
                    <p>Palestine,
                        <br> North Gaza</p>
                </div>
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Mail Us:</h4>
                    <p>
                        <span>Phone : </span>0592222222</p>
                    <p>
                        <span>Email : </span>
                        <a href="mailto:info@example.com">noorshalayel@gmail.com</a>
                    </p>
                </div>
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Opening Hours:</h4>
                    <p>Working days : 8am-10pm</p>
                    <p>Sunday
                        <span>(closed)</span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
    <div class="footer-copy-right">
        <div class="container">
            <div class="allah-copy">
                <p>© 2022 Best Rebtal. All rights reserved
                </p>
            </div>
            <div class="footercopy-social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/noor.esam.965">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/noor_shalayel">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-rss"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--/footer -->

<!-- js files -->
<!-- js -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- stats numscroller-js-file -->
<script src="js/numscroller-1.0.js"></script>
<!-- //stats numscroller-js-file -->

<!-- Flexslider-js for-testimonials -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script src="js/jquery.flexisel.js"></script>
<!-- //Flexslider-js for-testimonials -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->
<!-- //js-files -->

    </body>
</html>
@endsection

