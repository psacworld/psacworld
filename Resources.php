<?php
    session_start();
    if ($_SESSION["logged_in"] === 0)
    {
        header("Location: loginrequest.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
        include('templates/head_basics.php');
    ?>
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<body>
    <?php
    include('templates/nav_basics.php');
    ?>
        <div class="section first white">
            <div class=" p-b-60">
                <div class="section grey p-t-20  p-b-20 m-b-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>
                                    Resources</h2>
                            </div>
                            <div class="col-md-6 p-t-20 xs-no-padding xs-p-l-20">
                                <div class="portfolio-filter">
                                    <ul id="portfolio-nav">
                                      <!--  <li class="current"><a href="#" data-filter="*">All</a></li>-->
                                       <li><a data-filter=".web" href="#">Notes</a></li>
                                    <!--<li><a data-filter=".logo-design" href="#">Notes</a></li>-->
                                        <li><a data-filter=".branding" href="#">Past Papers</a></li>
                                    <!--<li><a data-filter=".video" href="#">Mock past papers</a></li>
                                        <li><a data-filter=".photo" href="#">Photography</a></li>-->
                                    </ul>
                                    <!--END PORTFOLIO-NAV-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="container">
                    <div class="portfolio-grid portfolioContainer ">
                        <ul id="thumbs" class="col3">
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/science.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Science</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                      <a href="History files.html" >Science</a></h4>
                                    <p>
                                      updated on : --
                                    </p>
                                </div>
                                <!--END ITEM-INFO-->
                                <div class="clearfix">
                                </div>
                            </li>
                            <li class="item branding">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/past papers.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <a href="#" class="overlay-link"></a>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                2017 Past Papers</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        <a href="2017 past papers .html">2017 Past Papers</a></h4>
                                        <p>
                                          updated on : --
                                        </p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/geo.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Geography</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                      <a href="404.html"> History & Geography</a></h4>
                                    <p>
                                        updated on : --</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item branding">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/past papers.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                2018 Past Papers</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        <a href="2018 past papers .html">2018 Past Papers</a></h4>
                                        <p>
                                          updated on : --
                                        </p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/maths.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Mathematics</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        <a href="maths files.html">Mathematics</a></h4>
                                    <p>
                                        updated on : --</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/english.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                English</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                      <a href="english files.html" > English</a></h4>
                                    <p>
                                        updated on : --</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/French.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                French</h3>
                                            <p class="project-description">
                                                +++</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                      <a href="french files.html" > French</a></h4>
                                    <p>
                                        updated on : --</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include('templates/footer_basics.php') ?>
</body>
</html>
