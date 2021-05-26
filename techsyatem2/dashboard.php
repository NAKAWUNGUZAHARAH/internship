<?php
session_start();
error_reporting(0);
include 'includes/config.php';

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>T.E.C.H System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include 'includes/topbar.php';?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include 'includes/leftbar.php';?>

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">ADMIN</h2>

                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container-fluid -->
                        <font class="mt-4" style=" font:bold 25px 'Aleo'; color:#0489bd; "><center >WELCOME  TO !!</center></font>
                        <font class="mt-4" style=" font:bold 25px 'Aleo'; color:#0489bd; "><center >T.E.C.H RECORDS  MANAGEMENT SYSTEM</center></font>
                    

                
                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="view-users.php">
                                        <?php

$sql1 = "SELECT * from user ";
    $query1 = $dbh->prepare($sql1);
    $query1->execute();
    $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
    $totalusers = $query1->rowCount();
    ?>

                                            <span class="number counter"><?php echo htmlentities($totalusers); ?></span>
                                            <span class="name">System users</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="manage-customers.php">
<?php
$sql = "SELECT * from  customers ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $totalcustomers = $query->rowCount();
    ?>
                                            <span class="number counter"><?php echo htmlentities($totalcustomers); ?></span>
                                            <span class="name">customers</span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="manage-orders.php">
                                        <?php
$sql2 = "SELECT * from  orders ";
    $query2 = $dbh->prepare($sql2);
    $query2->execute();
    $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
    $totalorders = $query2->rowCount();
    ?>
                                            <span class="number counter"><?php echo htmlentities($totalorders); ?></span>
                                            <span class="name">Record Orders</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="manage-service.php">
                                        <?php
$sql3 = "SELECT  distinct Id from  service ";
    $query3 = $dbh->prepare($sql3);
    $query3->execute();
    $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
    $totalservices = $query3->rowCount();
    ?>

                                            <span class="number counter"><?php echo htmlentities($totalservices); ?></span>
                                            <span class="name">Services</span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        
                                    </div>
                                    

                                </div>
                                
                            </div>
                        
                        </section>
     

                        

        <?php

if($_SESSION['ROLE']!='Guest'){
    ?>

    <section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-primary" href="add-user.php">
<?php

$sql1 = "INSERT INTO user (firstname, lastname,username, password, Gender ,Role)  values (?,?, ?,?, ?,?)";
$query1 = $dbh->prepare($sql1);
$query1->execute();
$results1 = $query1->fetchAll(PDO::FETCH_OBJ);
$totalusers = $query1->rowCount();
?>

                    <span class="number counter"><?php echo htmlentities($totalusers); ?></span>
                    <span class="name">Add users</span>
                    <span class="bg-icon"><i class="fa fa-users"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-danger" href="add-customer.php">
<?php
$sql = " INSERT INTO customers (customerid,firstname, lastname, Gender,Age, Address,phoneNo)  values (?,?, ?,?,?,?,?)";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$totalcustomers = $query->rowCount();
?>
                    <span class="number counter"><?php echo htmlentities($totalcustomers); ?></span>
                    <span class="name">Add customer</span>
                    <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-warning" href="register-order.php">
                <?php
$sql2 =  "INSERT INTO orders (clientname, service_offered, status, total_orders, price, total_amount)  values (?,?, ?,?,?,?)" ;
$query2 = $dbh->prepare($sql2);
$query2->execute();
$results2 = $query2->fetchAll(PDO::FETCH_OBJ);
$totalorders = $query2->rowCount();
?>
                    <span class="number counter"><?php echo htmlentities($totalorders); ?></span>
                    <span class="name">Register Orders</span>
                    <span class="bg-icon"><i class="fa fa-bank"></i></span>
                </a>
                <!-- /.dashboard-stat -->
            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat bg-success" href="add-service.php">
                <?php
$sql3 = "INSERT INTO service (name, Type, amount,duration, Description) values (?,?, ?,?,?)";
$query3 = $dbh->prepare($sql3);
$query3->execute();
$results3 = $query3->fetchAll(PDO::FETCH_OBJ);
$totalservices = $query3->rowCount();
?>

                    <span class="number counter"><?php echo htmlentities($totalservices); ?></span>
                    <span class="name">Add Services</span>
                    <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                </a>
                
            </div>
            

        </div>
        
    </div>
    
</section>

<?php
}
                        
?>
                    </div>
                    


                </div>
                
            </div>
            

        </div>
        

       
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
       
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

      
        <script src="js/prism/prism.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        
        <script src="js/main.js"></script>
       
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to TFTW Management System!");

            });
        </script>
    </body>
</html>

