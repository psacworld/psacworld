<?php
/*
if( !isset($_SESSION['logged_in_admin']) || ($_SESSION['logged_in_admin'] != 1) ){
    //if the user is not allowed, display a message and a link to go back to login page
    echo 'You are not allowed. <a href="login.php">back to login page</a>';
     
    //then abort the script
    exit();
}
*/

if(isset($_GET['log']) && ($_GET['log']=='out')){
        //if the user logged out, delete any SESSION variables
    session_destroy();
 
 
 
//then redirect to login page
    header('Location: login.php');
}//end log out
?>