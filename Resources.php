<?php
/*
session_start();
if ($_SESSION["logged_in"] === 0) {
    header("Location: loginrequest.php");
}*/
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
                    <div>
                        <a href="notes.php" title="">
                            <div class="well">
                                NOTES
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="pastpapers.php" title="">
                            <div class="well">
                                PASPAPERS
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="games.php" title="">
                            <div class="well">
                                GAMES
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php include('templates/footer_basics.php') ?>
    </body>
</html>