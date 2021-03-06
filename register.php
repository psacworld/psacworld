<!DOCTYPE html>
<html>
    <head>
        <?php
        ob_start();
        $ini = parse_ini_file('app.ini.php');
        
        session_start(); // starting session as we'll be using vars between mult pages
        use PHPMailer\PHPMailer\PHPMailer;
        require $ini['autoload_url'];
        $_SESSION["logged_in"] = 0; // user
        $_SESSION["logged_in_admin"] = 0; // admin
        include("utils.php");
        $conn = mysqli_connect(
        $ini['db_host'],
        $ini['db_user'],
        $ini['db_password'],
        $ini['db_name']);
        if(isset($_POST["signup"]))
        {
        $email = $password = $firstname = $lastname = $code = '';
        if(
            empty($_POST["email"]) ||
            empty($_POST["password"]) ||
            empty($_POST["firstname"]) ||
            empty($_POST["lastname"])
        )
        {
            echo '<script>alert("Please fill all fields")</script>';
        }
        else
        {
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
            $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
            $code = substr(md5(mt_rand()),0,15);
            $query = "INSERT INTO unverified_users(
            firstname,
            lastname,
            email,
            password,
            code
            ) VALUES(
            '$firstname',
            '$lastname',
            '$email',
            '$password',
            '$code')";
        if(mysqli_query($conn, $query))
        {
            echo '1';
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = (int)$ini['mail_smtp_debug'];
            $mail->Host = $ini['mail_smtp_host'];
            $mail->Port = $ini['mail_smtp_port'];
            $mail->SMTPAuth = true;
            $mail->Username = $ini['mail_from'];
            $mail->Password = $ini['mail_password'];
            $mail->setFrom($ini['mail_from'], 'PSAC World');
            $mail->addReplyTo($ini['mail_reply'], 'PSAC World');
            $mail->addAddress($email, $firstname .' '. $lastname);
            $mail->Subject = 'Verify Your Psac Registration';
            $mail->msgHTML('<a href="http://psac.compilertest.online/me/psac/verify.php?email='.$email.'&code='.$code.'">verify </a> dear '.
                $firstname .' '. $lastname);
            $mail->AltBody = 'This is a plain text message body';
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }
            echo '<script>alert("Registration Done. Verify Mail")</script>';
        }
        }
        }
        ?>
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
                        <form
                            class="form-horizontal"
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                            method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">First Name:</label>
                                <div class="col-sm-10">
                                    <!--first name-->
                                    <input type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Enter first name"
                                    name="firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">Last Name:</label>
                                <div class="col-sm-10">
                                    <!--last name-->
                                    <input type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Enter last name"
                                    name="lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <!--email-->
                                    <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter email"
                                    name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <!--password-->
                                    <input
                                    type="password"
                                    class="form-control"
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
                                    name="signup">Submit</button>
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