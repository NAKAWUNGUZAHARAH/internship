<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>messages</title>
     <!-- Core Style CSS -->
 <link rel="stylesheet" href="css/core-style.css">


    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


<style>
body{
 background:pink;
 justify-content: center;
 align-items:center;
 
}
</style>
</head>
<body>
     <!-- ****** Header Area Start ****** --> 
   <header class="header_area  ">
        <div class="main_header_area bg-dark3 ">
          <div class="container-fluid ">
              <div class="row">
                  <div class="col-12 d-md-flex justify-content-between sticky-lg-top">
                      <!--  nav bar Menu Area -->
                      <div class="main-menu-area  ">
                          <nav class="navbar navbar-expand-lg align-items-center">

                              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                  data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false"
                                  aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i
                                          class="ti-menu"></i></span></button>

                              <div class="collapse navbar-collapse collapse "id="karl-navbar">
                                  <ul class="navbar-nav animated  align-items-center ">
                                      <li class="nav-item"><img class="card-img-center"
                                              src="img/images/logoTFTW.png" alt="logo" width="200px">
                                      </li>
                                      <li class="nav-item active "><a class="nav-link text-light"
                                              href="index.php">Home</a>
                                      </li>
                                      <li class="nav-item"><a class="nav-link text-light" href="ABOUT.php">About us
                                          </a>
                                      </li>
                                      <li class="nav-item"><a class="nav-link text-light"
                                              href="PROJECTS.php">projects</a>
                                      </li>
                                      <li class="nav-item"><a class="nav-link text-light"
                                              href="GETINVOLVED.php">Get
                                              involved</a></li>
                                      <li class="nav-item"><a class="nav-link text-light"
                                              href="CONTACT.php">Contact us</a>
                                      </li>
                                      <li class="nav-item"><a class="nav-link text-light"
                                              href="DONATE.php">Donate</a></li>
                                      <li class="nav-item"><a class="nav-link text-light"
                                              href="EVENT.php">programs</a></li>
                                              <li class="nav-item"><a class="nav-link text-light"
                                              href="GETDATA.php">messages</a></li>
                                  </ul>
                              </div>
                          </nav>
                      </div>
                      <!-- Help Line -->
                      <div class="help-line d-flex align-items-center">
                          <a class=" text-light " href="#"><i class="ti-headphone-alt "></i>+256 (780) 334-757</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
<!-- ****** Header Area End ****** -->
        <!-- ****** Header Area End ****** -->
        <br><br><br>
        <h1 class="heading mt-5">COMMUNITY VIEWS /COMMENTS </h1>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "tech";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM contacts");
$all_property = array();  //declare an array for saving property


//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td> <br>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td> <br>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>
<br>
<h1>REGISTERED STUDENTS</h1>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "tech";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM registration");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td> <br>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td><br> ' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>
</body>
</body>
</html>