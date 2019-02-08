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
<?php
$path = "uploads/notes/";

 if(is_dir($path))
{
    $dir_handle = opendir($path);

    //extra check to see if it's a directory handle.
    //loop round one directory and read all it's content.
    //readdir takes optional parameter of directory handle.
    //if you only scan one single directory then no need to passs in argument.
    //if you are then going to scan into sub-directories the argument needs 
    //to be passed into readdir.
    while (($dir = readdir($dir_handle))!== false) 
    {
    if(is_dir($dir))
    {
    echo "is dir: " . $dir . "<br>"; 


    if($dir == "mkdir") 
        {
        $sub_dir_handle = opendir($dir);
        while(($sub_dir = readdir($sub_dir_handle))!== false)
            {
            echo "--> --> contents=$sub_dir <br>";
            }
    }



    }    
        elseif(is_file($dir)) 
         {
            echo "is file: " . $dir . "<br>"  ;
        }
    }
closedir($dir_handle); //will close the automatically open dir.
}

else {

    echo "is not a directory";
}
?>
            </div>
        </div>
        
<?php include('templates/footer_basics.php') ?>
</body>
</html>
