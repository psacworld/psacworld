<?php
echo 'c0';
$ini = parse_ini_file('app.ini.php');

if(isset($_GET['email']) && isset($_GET['code']))
{
    $email=$_GET['email'];
    $code=$_GET['code'];
    echo $email;
    $conn = new mysqli(
        $ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "select firstname, lastname, email, password from unverified_users where email='$email' and code='$code'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
    // output data of each row
        $row=mysqli_fetch_assoc($result);
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $pass=$row['password'];
        $sql = "insert into verified_users values('$firstname', '$lastname','$email','$pass', 'no', 0)";
        #$results = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error inserting values: " . $conn->error;
        }
        $sql = "delete from unverified_users where email='$email' and code='$code'";
        $result = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error deleting " . $conn->error;
        }

    } else {
        echo "0 results";
    }

    
}

?>