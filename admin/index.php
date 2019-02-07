<?php
// /*
    ob_start();
    session_start();
    if ($_SESSION["logged_in_admin"] === 0)
    {
        header("Location: ../index.php");
    }
    //*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
        $email = sanitise($_POST["email"]);    // hashing input 
        $password = sanitise($_POST["password"]);

        if(isset($_POST['email']))     // not empty
        {
            $checkQuery = "SELECT * from verified_users WHERE email='$email' AND password='$password'";
            $results = mysqli_query($conn, $checkQuery);
            
            if (mysqli_num_rows($results) == 1)
            {
                echo "login successful";
                $_SESSION["logged_in"] = 1;
                header('Location: Resources.php');
            }else
            {
                //echo "login unsuccessful";
            }
        }

    }
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
        <li><a href="#">Notes</a></li>
        <li><a href="#">Past Papers</a></li>
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
        <li><a href="#section2">Notes</a></li>
        <li><a href="#section3">Past Papers</a></li>
        <li><a href="#section3">Feedback</a></li>
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
                <form 
                  class=""
                  method="post"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                  enctype="multipart/form-data">
                    <div class="row container">
                        <label class="btn btn-default col-sm-4">
                            Browse <input 
                            type="file" 
                            name="file" 
                            id="file" >
                        </label>
                        <select name="subject">
                          <option value="maths">Maths</option>
                          <option value="english">English</option>
                          <option value="french">French</option>
                          <option value="science">Science</option>
                          <option value="geography">Geography</option>
                        </select>
                        <select name="type">
                          <option value="notes">Notes</option>
                          <option value="pastpapers">Past Papers</option>
                        </select>
                    </div><br>
                    <input type="submit" class="btn btn-success" value="upload" name="submit">
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
            <p></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p></p> 
          </div>
        </div>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>psac</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>psac</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>psac</p> 
          </div>
        </div>
      </div>

      <!--ROW-->
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>psac</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>psac</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
