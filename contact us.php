<!DOCTYPE html>
<html>
<head>
    <?php 
        include('templates/head_basics.php');
    ?>
</head>
<!-- END HEAD -->
<body >
    <?php
    include('templates/nav_basics.php');
    ?>
        <div class="section grey text-center m-t-60 p-t-40 p-b-40" id="banner-footer">
            <h2 class="normal m-b-10">
                We would love to hear from you</h2>
            <p>
                Why not drop us a line or pick up the phone and give us a shout. Our team would
                love to talk to you and help you achieving your dreams.</p>
        </div>
        <div class="section white">
            <div class="container">
                <div class=" p-b-60">
                    <div class="row p-t-30">
                        <div class="col-md-6 col-sm-6">
						<form id="contact_form" method="post" action="#">
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="txtFirstName" id="textFirstName" type="text" class="form-control "
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="txtLastName" id="txtLastName" type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="txtCompany" id="txtCompany" type="text" class="form-control" placeholder="School">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="txtEmailAddress" id="txtEmailAddress" type="text" class="form-control"
                                        placeholder="Email address">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <textarea id="txtDesc" name="txtMessage" type="text" class="form-control" placeholder="Message" rows="8">

						</textarea>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <button type="button" id="button-send" class="btn btn-primary btn-cons">
                                        Send</button>
                                </div>
								<div id="success">Your message has been successfully!</div>
								<div id="error">Unable to send your message, please try later.</div>
                            </div>
						</form>
                        </div>
                        <div class="col-md-6 feature-list">
                            <h4 class="title custom-font text-black no-margin p-b-10">
                                TELEPHONE</h4>
                            <p class="no-margin">
                                Support</p>
                            <h2 class="custom-font text-black no-margin">
                                unavailable for now</h2>
                          <!--  <p class="no-margin">
                                Technical</p>
                            <h2 class="custom-font text-black no-margin">
                                +230 582-486-41</h2>-->
                            <section class="p-t-20 p-b-20">
                                <h4 class="title custom-font text-black">
                                    ADDRESS</h4>
                                <ul class="address-list">
                                    <li><i class="fa fa-map-marker"></i><strong>Address:</strong> Montreal, QC, CA.</li>
                                    <li><i class="fa fa-phone"></i><strong>Phone:</strong> unavailable for now</li>
                                    <li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:samuel@psacworld.com">
                                        samuel@psacworld.com</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section dark-grey">
            <div class="container">
                <div class="p-t-80">
                    <div class="row">
                        <div class="row mt-30">
                            <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible;
                                animation-duration: 2s; -webkit-animation-duration: 2s; animation-delay: 0.2s;
                                -webkit-animation-delay: 0.2s; animation-name: fadeIn; -webkit-animation-name: fadeIn;">
                                <div class="team-member">
                                    <div class="team-img">
                                       <img src="assets/img/team/team_1.png" alt="">
                                        <div class="team-details text-center">
                                            <h5 class="team-title mb-10">
                                                Annaël Shiu</h5>
                                            <span>Benevolent teacher</span>
                                            <div class="socials mt-20">
                                                    <a href="#"><i class="fa fa-envelope">
                                                    </i></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end team member -->
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" style="visibility: visible;
                                animation-duration: 2s; -webkit-animation-duration: 2s; animation-delay: 0.4s;
                                -webkit-animation-delay: 0.4s; animation-name: fadeIn; -webkit-animation-name: fadeIn;">
                              <div class="team-member mt-mdm-40">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2.png" alt="">
                                        <div class="team-details text-center">
                                            <h5 class="team-title mb-10">
                                                Roseline Bonne</h5>
                                            <span>Benevolent French teacher</span>
                                        <div class="socials mt-20">
                                                <a href="#"><i class="fa fa-envelope">
                                                </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end team member -->
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="visibility: visible;
                                animation-duration: 2s; -webkit-animation-duration: 2s; animation-delay: 0.6s;
                                -webkit-animation-delay: 0.6s; animation-name: fadeIn; -webkit-animation-name: fadeIn;">
                                <div class="team-member mt-mdm-40">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_3.png" alt="">
                                        <div class="team-details text-center">
                                            <h5 class="team-title mb-10">
                                                Samuel Bonne</h5>
                                            <span>Founder & CEO</span>
                                            <div class="socials mt-20">
                                              <a href="samuel@psacworld.com"><i class="fa fa-envelope">
                                                </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end team member -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('templates/footer_basics.php') ?>

</body>
</html>
