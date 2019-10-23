<!--==========================
Header
============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h3 class="text-light"><a href="#intro" class="scrollto"><span>U.K Radiologist</span></a></h3>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">{{__('front.home')}}</a></li>
                <li><a href="#about">About Us</a></li>
                {{--                <li><a href="#services">Services</a></li>--}}
                {{--                <li><a href="#portfolio">Portfolio</a></li>--}}
                <li><a href="#team">Team</a></li>
                {{--                <li class="drop-down"><a href="">Drop Down</a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="#">Drop Down 1</a></li>--}}
                {{--                        <li class="drop-down"><a href="#">Drop Down 2</a>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="#">Drop Down 3</a></li>--}}
                {{--                        <li><a href="#">Drop Down 4</a></li>--}}
                {{--                        <li><a href="#">Drop Down 5</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <li><a href="#contact">{{__('front.contact')}}</a></li>
                <li><a href="/admin">{{__('front.administration')}}</a></li>
                <li style="padding: 10px"><select onchange=""><option value="en">en</option><option value="ar">ar</option><option value="es">es</option></select></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->
