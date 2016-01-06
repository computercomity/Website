<!------------------------------------响应式菜单-------------------------------------------------------------------->
<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">About us</a>
            <ul>
                <li><a href="/about/">About C@C</a></li>
                <li><a href="/about/history">History of C@C</a></li>
                <li><a href="/about/team">Our Team</a></li>
                <li><a href="/about/contact">Contact Us</a></li>
            </ul>
        </li>
        <li><a href="#">Events</a>
            <ul>
                <li><a href="/events/upcoming">Upcoming Events</a></li>
                <li><a href="/events/review">Review</a></li>
                <li><a href="/events/annoucement">Announcement</a></li>
            </ul>
        </li>
        <li><a href="#">Contests</a>
            <ul>
                <li><a href="/contest/oj">Online Judge</a></li>
                <li><a href="/contest/competitionevent">Events & Information</a></li>
            </ul>
        </li>
        <li><a href="#">Membership</a>
            <ul>
                <li><a href="/member/resources">Resources</a></li>
                <li><a href="/member/mirrorsite">Mirror Site</a></li>
                <li><a href="/member/recommendation">Recommendation</a></li>
                <li><a href="/member/forum">Forum</a></li>
            </ul>
        </li>
        <!--  Forum:if possible
        <li><a href="archives.html">Forum</a></li>
        -->
        <li><a href="#">Join Us</a>
            <ul>
                <li><a href="/member/login">Log In</a></li>
                <li><a href="/member/signup">Sign Up</a></li>
                <li><a href="/member/jointeam">Join The Team</a></li>
            </ul>
        </li>
        <li><a href="/utils/switchlang?lang=cn">中文</a>
    </ul> <!-- /.main_menu -->
</div> <!-- /.responsive_menu -->
<!------------------------------------菜单栏------------------------------------------------------------------------>
<header class="site-header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left logo"><a href="/"> <img src="/assets/images/logo-head.png"
                                                              alt="Computer And Comity logo"> </a>
                </div>    <!-- /.logo -->
                <div class="main-navigation pull-right">
                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">About us</a>
                                <ul>
                                    <li><a href="/about/">About C@C</a></li>
                                    <li><a href="/about/history">History of C@C</a></li>
                                    <li><a href="/about/team">Our Team</a></li>
                                    <li><a href="/about/contact">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Events</a>
                                <ul>
                                    <li><a href="/events/upcoming">Upcoming Events</a></li>
                                    <li><a href="/events/review">Review</a></li>
                                    <li><a href="/events/annoucement">Announcement</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contests</a>
                                <ul>
                                    <li><a href="/contest/oj">Online Judge</a></li>
                                    <li><a href="/contest/competitionevent">Events & Information</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Membership</a>
                                <ul>
                                    <li><a href="/member/resources">Resources</a></li>
                                    <li><a href="/member/mirrorsite">Mirror Site</a></li>
                                    <li><a href="/member/recommendation">Recommendation</a></li>
                                    <li><a href="/member/forum">Forum</a></li>
                                </ul>
                            </li>
                            <!--  Forum:if possible
                            <li><a href="archives.html">Forum</a></li>
                            -->
                            <li><a href="#">Join Us</a>
                                <ul>
                                    <li><a href="/member/login">Log In</a></li>
                                    <li><a href="/member/signup">Sign Up</a></li>
                                    <li><a href="/member/jointeam">Join The Team</a></li>
                                </ul>
                            </li>
                            <li><a href="/utils/switchlang?lang=cn">中文</a>
                        </ul> <!-- /.sf-menu -->
                    </nav> <!-- /.main-nav -->

                    <!-- This one in here is responsive menu for tablet and mobiles -->
                    <div class="responsive-navigation visible-sm visible-xs">
                        <a href="#nogo" class="menu-toggle-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> <!-- /responsive_navigation -->
                </div> <!-- /.main-navigation -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</header> <!-- /.site-header -->

<? if(!(g('c') == "cac")){?>
<div class="first-widget parallax" id="portfolio">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title"><?=$data['title']?></h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location"><?=$data['location']?></span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle --><?}?>