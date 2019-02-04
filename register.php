<!DOCTYPE html>
<html>
<head>

    <?php include('templates/head_basics.php') ?>
</head>
<!-- END HEAD -->
<body>
    <?php include('templates/nav_basics.php') ?>

        <div class="section ">
            <div class="container">
                <div class="jumbotron bg-green">
                    
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading ">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="verify.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">First Name:</label>
                                <div class="col-sm-10">
                                    <!--first name-->
                                  <input type="text" class="form-control" id="name" placeholder="Enter first name" name="firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">Last Name:</label>
                                <div class="col-sm-10">
                                    <!--last name-->
                                  <input type="text" class="form-control" id="name" placeholder="Enter last name" name="lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <!--email-->
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                    <!--password-->
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                </div>
                            </div>
                            
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                    
                
                
            </div>
        </div>
        
<?php include('templates/footer_basics.php') ?>
</body>
</html>
