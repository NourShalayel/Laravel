@extends('user.menuuser')

@section('content')
<head>
    <title>PlayBook</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
</head>

<style>

    .panel {
        box-shadow: none;
        margin-left: 240px;
        margin-top: 30px;
    }

    .panel-heading {
        border-bottom: 0;
    }

    .panel-title {
        font-size: 17px;
    }

    .panel-title > small {
        font-size: .75em;
        color: #999999;
    }

    .panel-body *:first-child {
        margin-top: 0;
    }

    .panel-footer {
        border-top: 0;
    }

    .panel-default > .panel-heading {
        color: #333333;
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.07);
    }

    form label {
        color: #999999;
        font-weight: 400;
    }

    .form-horizontal .form-group {
        margin-left: -15px;
        margin-right: -15px;
    }

    @media (min-width: 768px) {
        .form-horizontal .control-label {
            text-align: right;
            margin-bottom: 0;
            padding-top: 7px;
        }
    }

    .profile__contact-info-icon {
        float: left;
        font-size: 18px;
        color: #999999;
    }

    .profile__contact-info-body {
        overflow: hidden;
        padding-left: 20px;
        color: #999999;
    }

    .profile-avatar {
        min-height: 168px;
        min-width: 191px;
        width: 200px;
        position: relative;
        margin: 0px auto;
        margin-top: 196px;
        border: 4px solid #f3f3f3;
    }
   .panel-body{
        padding-right: 100px;
    }
   h3 {
       margin-left: 180px;
       text-align: center;
       margin-top: 20px;
   }
   .img{
       padding:20px
   }


</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
        <div class="col-xs-12 col-sm-9">
                <h3 class="tittle" >
                    <span>C</span>ompany
                    <span>F</span>orm
                </h3>
            @include('admin.layout.message')

            <form class="form-horizontal" action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="panel panel-default">

                    <div class="panel-body">


                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Company Name" name="name" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input id="text" placeholder="Company Code" name="code" type="text" value="" class="addinput" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Age Company" name="age" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="email"  placeholder="Your E-mail" name="email" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Phone Number" name="contact" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Address" name="address" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Description" name="description" required="" class="addinput">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10" class="img">
                                <input type="file"  name="image" style=" margin: auto;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="submit" value="Create New Post" class="btn btn-success float-right">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
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
@endsection
