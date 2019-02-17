<!DOCTYPE html>
<html>
    <head>
        <script src="/javascripts/application.js" type="text/javascript" charset="utf-8">
            function onLoad(){
               alert(1);
            }
        </script>
        <?php include('templates/head_basics.php') ?>
        <?php 
         ?>

        <style type="text/css" media="screen">
            .data{
                padding: 5px;border-radius:5px;
                color: black;
                text-decoration: underline;
            }
            .profilepic{
                width: 100px;
                height: 100px;
                background-color: green;
                border-radius: 5px;
            }
            .streak{
                width: 700px; height: 50px;
                background-color: white;
            }
            .badge{
                width: 100px; height:100px; border-radius: 50%;
                margin: 20px;
            }
            .profpic{
                width: 50px; height:50px; border-radius: 50%;
                margin: 10px; background-color: gray; display: inline-block;
            }
        </style>

    </head>
    <!-- END HEAD -->
    <body  onload="onLoad()">
        <?php include('templates/nav_basics.php') ?>
        
        <div class="section ">
            <div class="container">
                <div class="jumbotron bg-green">

                </div>
                <h1 class="well">
                    <div class="row">
                      <div class="col-sm-4">
                          <div class="profilepic">
                              <img id="profilepicture" src="assets/img/profile/prof1.svg">
                          </div>
                          <button class="btn btn-info" data-toggle="collapse" data-target="#chooseprofpic">change</button>
                      </div>
                      <div class="col-sm-4">
                          name<br>
                          surname
                      </div>
                      <div class="col-sm-4">
                          xp: 100
                      </div>
                    </div>
                </h1>
                <div id="chooseprofpic" class="well collapse">
                    <h2>profpic</h2><hr>

                    <div style="">
                        <div class="profpic">
                            <img onclick="changeIt(this.src)" class="profimg" src="assets/img/profile/prof1.svg">
                        </div>
                        <div class="profpic">
                            <img class="profimg" src="assets/img/profile/prof2.svg">
                        </div>
                        <div class="profpic">
                            <img class="profimg" src="assets/img/profile/prof3.svg">
                        </div>
                        <div class="profpic">
                            <img class="profimg" src="assets/img/profile/prof4.svg">
                        </div>
                        <div class="profpic">
                            <img class="profimg" src="assets/img/profile/prof5.svg">
                        </div>
                        <div class="profpic">
                            <img class="profimg" src="assets/img/profile/prof6.svg">
                        </div>
                    </div>
                    <button class="btn btn-info">save</button>
                </div>
                <div class="well" style="">
                    <div class="" style="text-align: center; display: inline-block; width: 100%" >
                        <!--
                        <div class="streak" style="display: inline-block;">
                            fwefwf
                        </div>
                    -->
                    <h1>streak: 7</h1>
                    </div>
                </div>
                <div class="well">
                    <h2>badges</h2><hr>
                    <div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                        <div class="badge">
                            
                        </div>
                    </div>
                </div>
                <div class="well">
                    <h2>plant</h2><hr>
                    <div style="text-align: center;">
                        <img width="300" height="300" src="https://openclipart.org/image/2400px/svg_to_png/191737/sample140313a.png">
                    </div>
                    
                </div>
            </div>
        </div>
        
        <?php include('templates/footer_basics.php') ?>
    </body>
</html>