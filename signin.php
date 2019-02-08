<!DOCTYPE html>
<html>
<head>

    <?php include('templates/head_basics.php') ?>
</head>
<!-- END HEAD -->
<body>
 <?php  
    $ini = parse_ini_file('app.ini.php');
    ob_start();
    session_start(); // starting session as we'll be using vars between mult pages

    include("utils.php");
    $conn = mysqli_connect(
        $ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name']); 

 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["email"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  print_r($_POST);
           $email = mysqli_real_escape_string($conn, $_POST["email"]);  
           $email = (isset($email)) ? $email : '' ;
           $password = mysqli_real_escape_string($conn, $_POST["password"]);  
           $password = (isset($password)) ? $password : '' ;
           $query = "SELECT * FROM verified_users WHERE email = '$email'";  
           $result = mysqli_query($conn, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                    $row=mysqli_fetch_assoc($result);
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["email"] = $email;  
                          header("location:Resources.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details2")</script>';  
                     }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details1")</script>';  
           }  
      }  
 }  
 ?>  

    <?php include('templates/nav_basics.php') ?>

        <div class="section ">
            <div class="container">
                <div class="jumbotron bg-green">
                    
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading ">Sign In</div>
                    <div class="panel-body">
                        <form 
                                class="form-horizontal" 
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
                                    id="password" 
                                    placeholder="Enter password" 
                                    name="password">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button 
                                  type="submit" 
                                  class="btn btn-default" 
                                  name="login">Submit</button>
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
