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
                    <div class="panel-heading ">Sign In</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="/action_page.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Submit</button>
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
