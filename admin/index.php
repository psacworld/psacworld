<?php
// /*
    ob_start();
    session_start();
    if ($_SESSION["logged_in_admin"] === 0)
    {
        header("Location: ../index.php");
    }
    //*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Uploads</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
        <div style="padding:10px; text-align: center;">
            <img src="../assets/img/logo r.png" style="width:100px; height:100px">
        </div>
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Uploads</a></li>
        <li><a href="#section2">sas</a></li>
        <li><a href="#section3">wd</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h1>Dashboard</h1>
        <p>Welcome {admin-name}</p>
        <a href="logout.php?log=out"><button class="btn btn-warning">logout</button></a>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <h2>uploads</h2>
            <div class="">
                <form class="">
                    <div class="row container">
                        <label class="btn btn-default col-sm-4">
                            Browse <input type="file" hidden>
                        </label>
                        <div class="dropdown col-sm-2">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Subject
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-sm-2">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose type
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4"></div>
                    </div><br>
                    <input type="button" class="btn btn-success" value="upload">
                </form>
                
            </div>

          </div>
        </div>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
