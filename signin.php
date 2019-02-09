<!DOCTYPE html>
<html>
    <head>
        <?php
        ob_start();
        include('templates/head_basics.php'); ?>
    </head>
    <!-- END HEAD -->
    <body>
        <?php

        ob_start();
        session_start(); // starting session as we'll be using vars between mult pages
        $ini = parse_ini_file('app.ini.php');
        $_SESSION["logged_in"] = 0; // user
        $_SESSION["logged_in_admin"] = 0; // admin
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
        {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $query = "SELECT * FROM verified_users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if($result->num_rows > 0)
        {

        $sql = "select firstname, lastname, email, password from verified_users where email='$email'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
        print_r($row);
        #$row=mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]))
        {
        //return true;
        $_SESSION["email"] = $email;
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];

        header("Location:Resources.php");
        exit();
        }
        else
        {
        //return false;
        echo '<script>alert("Wrong User Details")</script>';
        }
        }
        }
        else
        {
        echo '<script>alert("Wrong User Details")</script>';
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
                                    id="pwd"
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