<!DOCTYPE html>
<html>
    <head>
        <?php include('templates/head_basics.php') ?>
        <?php 
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    echo '<ol>';
    foreach($ffs as $ff){
        echo '<li class="data"><a href="'.$dir.'/'.$ff.'">'.$ff;
        if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
        echo '</a></li>';
    }
    echo '</ol>';
}
         ?>
        <style type="text/css" media="screen">
            .data{
                padding: 5px;border-radius:5px;
                color: black;
                text-decoration: underline;
            }
        </style>
    </head>
    <!-- END HEAD -->
    <body>
        <?php include('templates/nav_basics.php') ?>
        <div class="section ">
            <div class="container">
                <div class="jumbotron bg-green">

                </div>
                <h1 class="">
                    PASTPAPERS
                </h1>
                <div class="well">
                    <h2>ENGLISH</h2>
                    <div>
                    <?php
                    $dir = "uploads/pastpapers/english";
                    // Open a directory, and read its contents
                    // Open a directory, and read its contents
                    listFolderFiles($dir);
                    ?>
                    </div>
                </div>
                <div class="well">
                    <h2>FRENCH</h2>
                    <div>
                    <?php
                    $dir = "uploads/pastpapers/french";
                    // Open a directory, and read its contents
                    // Open a directory, and read its contents
                    listFolderFiles($dir);
                    ?>
                    </div>
                </div>
                <div class="well">
                    <h2>MATHS</h2>
                    <div>
                    <?php
                    $dir = "uploads/pastpapers/maths";
                    // Open a directory, and read its contents
                    // Open a directory, and read its contents
                    listFolderFiles($dir);
                    ?>
                    </div>
                </div>
                <div class="well">
                    <h2>SCIENCE</h2>
                    <div>
                    <?php
                    $dir = "uploads/pastpapers/science";
                    // Open a directory, and read its contents
                    // Open a directory, and read its contents
                    listFolderFiles($dir);
                    ?>
                    </div>
                </div>
                <div class="well">
                    <h2>GEOGRAPHY</h2>
                    <div>
                    <?php
                    $dir = "uploads/pastpapers/geography";
                    // Open a directory, and read its contents
                    // Open a directory, and read its contents
                    listFolderFiles($dir);
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('templates/footer_basics.php') ?>
    </body>
</html>