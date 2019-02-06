<!DOCTYPE html>
<html>
<head>
    <link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
</head>
<!-- END HEAD -->
<body>
<?php

    $ini = parse_ini_file('../app.ini.php');
    ob_start();
    session_start(); // starting session as we'll be using vars between mult pages
    $_SESSION["logged_in"] = 0; // user
    $_SESSION["logged_in_admin"] = 0; // admin
    include("../utils.php");
    
// define connection variables

    // /***
    // Create connection
    $conn = new mysqli(
        $ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name']);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    // ***/
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
        $email = sanitise($_POST["email"]);    // hashing input using below function
        $password = sanitise($_POST["password"]);

        if(isset($_POST['submit_login']))     // not empty
        {
            $checkQuery = "SELECT * from admins WHERE email='$email' AND password='$password'"; //AND confirmed='confirmed'
            $results = mysqli_query($conn, $checkQuery);
            if (mysqli_num_rows($results) == 1)
            {
                echo "login successful";
                $_SESSION["logged_in_admin"] = 1; // admin
                $_SESSION["logged_in"] = 1; // user
                header('Location: index.php');
            }else
            {
                echo "login unsuccessful";
            }
        }
    }
?>
    

        <div class="section ">
            <div class="container">
                <div class="jumbotron bg-green">
                    
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading ">Sign In</div>
                    <div class="panel-body">
                        <form class="form-horizontal" 
                                method="post"
                                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" 
                                  id="email" 
                                  placeholder="Enter email" 
                                  name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                    <input type="password" class="form-control" 
                                    id="pwd" 
                                    placeholder="Enter password" 
                                    name="password">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default" name="submit_login">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                    
                
                
            </div>
        </div>
        

</body>
</html>
