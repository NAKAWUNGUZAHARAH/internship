<?php
session_start();
error_reporting(0);
include 'includes/config.php';


    $stid = intval($_GET['ID']);

    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $Role = $_POST['role'];
        $sql = "UPDATE user set firstname=:firstname,lastname=:lastname,username=:username,password=:password,Gender=:gender,Role=:role where ID=:ID ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':gender', $gender, PDO::PARAM_STR);
        $query->bindParam(':role', $Role, PDO::PARAM_STR);
        $query->bindParam(':ID', $stid, PDO::PARAM_STR);
        $query->execute();

        $msg = "user info updated successfully";
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T.E.C.H Admin| Edit user  </title> <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
            <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
            <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
            <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
            <link rel="stylesheet" href="css/prism/prism.css" media="screen">
            <link rel="stylesheet" href="css/select2/select2.min.css">
            <link rel="stylesheet" href="css/main.css" media="screen">
            <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->
        <?php include 'includes/topbar.php';?>
        <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">

                <!-- ========== LEFT SIDEBAR ========== -->
                <?php include 'includes/leftbar.php';?>
                <!-- /.left-sidebar -->

                <div class="main-page">

                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">user registration</h2>

                            </div>

                            <!-- /.col-md-6 text-right -->
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="edit-user.php"><i class="fa fa-home"></i> user editing</a></li>
                                    
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Fill the user info</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                     
                                            <?php

                     $sql = "SELECT *from user firstname=:firstname,lastname=:lastname,username=:username,password=:password,Gender=:gender,Role=:role where ID=:ID ";
                     $query = $dbh->prepare($sql);
                      $query->bindParam(':ID', $stid, PDO::PARAM_STR);
                      $query->execute();
                       $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                     // foreach ($results as $result) 
                        }
                        
                      ?>


                   <form class="form-horizontal" id="add-form" method="post">
                                        <div id="msg" class="text-canter mb-3"></div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Firstname</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="firstname" class="form-control" id="firstname" required="required" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Lastname</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="lastname" class="form-control" id="lastname" required="required" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="username" class="form-control" id="username" maxlength="5" required="required" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="password" class="form-control" id="password" required="required" autocomplete="off">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender"  id="gender" value="Female" required="required">Female <input type="radio" name="gender" id="gender" value="Other" required="required">Other
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Role</label>
                                                <div class="col-sm-10">
                                                 <select name="role" class="form-control" id="role" required="required">
	                                                <option>select-role</option>
                                                     <option>Records</option>
                                                      <option>admin</option>
                                                      <option>Guest</option>
	                                             </select><br>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" name="submit" class="btn btn-primary" >Add</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>