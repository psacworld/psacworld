<!DOCTYPE html>
<html>
<head>

    <?php 
    include('templates/head_basics.php');
    ob_start();
    session_start(); // starting session as we'll be using vars between mult pages
    $_SESSION["logged_in"] = 0; // user
    $_SESSION["logged_in_admin"] = 0; // admin
    ?>

</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        <header id="ha-header" class="ha-header ha-header-hide ">
            <div class="ha-header-perspective">
                <div class="ha-header-front navbar navbar-default">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand compressed">
                                <img src="assets/img/logo r.png" alt="" data-src="assets/img/logo r.png"
                                    data-src-retina="assets/img/logo r.png" height="25%" width="25%" /></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="signin.php">Sign in</a></li>
                                <li><a href="register.php">Sign up</a></li>
                                <li><a href="Resources.php">Resources</a></li>
                                <li><a href="contact us.php">Contact us</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </header>
        <div class="section ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
            <div role="navigation" class="navbar navbar-transparent navbar-top">
                <div class="container">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand">
                                </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="signin.php">Sign in</a></li>
                                <li><a href="register.php">Sign up</a></li>
                                <li><a href="Resources.php">Resources</a></li>
                                <li><a href="contact us.php">Contact us</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!--BEGIN SLIDER -->
            <div class="tp-banner-container">
                <div class="tp-banner" id="home">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/bg/slide_one.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="80" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We create<br>
                                    free notes & sample past papers
                                    <br />
                                    for PSAC students</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="320" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="Donate .html" class="btn btn-info btn-lg  btn-large m-r-10">Donate Now</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/bg/picture-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="120" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We Craft<br>
                                    Our Work to Last Perfection!</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="300" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="Donate .html" class="btn btn-info btn-lg  btn-large m-r-10">Donate Now</a>
                            </div>
                            <div class="tp-caption fade slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="360" data-speed="500" data-start="800" data-easing="Power4.easeOut" data-endspeed="300"
                                data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                              <!--<a href="#" class="text-white m-r-10">or view our pricing</a>-->
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/bg/picture-2.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="120" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We build the future<br>
                                    of every children of Mauritius</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="300" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="Donate .html" class="btn btn-info btn-lg  btn-large m-r-10">Donate Now</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer">
                    </div>
                </div>
            </div>
            <!--END SLIDER

	-->
        </div>
        <div class="section ">
            <div class="container">
                <div class="p-t-40 p-b-40  text-center">
                    <h2 class="text-center">
                        We provide simplified solutions with a great attention to details.</h2>
                    <a href="Donate .html" class="btn btn-primary btn-lg  btn-large m-r-10">Donate NOW</a>
                </div>
            </div>
        </div>
        <div class="section white ha-waypoint" data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <div class="container">
                <div class="p-t-60">
                    <div class="row">
                        <div class="col-md-12 feature-list ">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
                                <i class="fa fa-archive fa-4x"></i>
                                <h4 class="title">
                                    NOTES</h4>
                                <p>
                                    We provide PSAC notes for Science, Mathematics,French,English History and Geography but we are still
                                     in expansion.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
                                <i class="fa fa-cog fa-4x"></i>
                                <h4 class="title">
                                    PAST PAPERS</h4>
                                <p>
                                    We provide past papers which can also be found on the government's website, but we found that it would
                                    be more user-friendly if all the resources are found on the same website.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
                                <i class="fa fa-share fa-4x"></i>
                                <h4 class="title">
                                    MOCK PAPERS</h4>
                                <p>
                                    All mock past papers are made with great care by benevolent HSC students and teachers who want to help
                                    make hollistic education more accessible to every child around the island.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        <?php include('templates/footer_basics.php') ?>
</body>
</html>
