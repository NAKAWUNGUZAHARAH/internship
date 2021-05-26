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
    <title>T.E.C.H Admin Order Creation </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="css/prism/prism.css" media="screen">
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <script src="js/modernizr/modernizr.min.js"></script>
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">
      <!-- ========== TOP NAVBAR ========== -->
      <?php include 'includes/topbar.php'; ?>
        <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">
             <!-- ========== LEFT SIDEBAR ========== -->
             <?php include 'includes/leftbar.php'; ?>
                  <div class="main-page">

                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">Order Creation</h2>

                            </div>

                            <!-- /.col-md-6 text-right -->
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li> Orders</li>
                                    <li class="active"><a href="register-order.php"><i class="fa fa-home"></i> Order creation</a></li>
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
                                            <h5>Create Order</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal"  id="add-form" method="post">
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Clientname</label>
                                                <div class="col-sm-10 col-md-6">
                                                    <input type="text" name="clientname" class="form-control"
                                                        id="name" placeholder="clientname" required="required">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Service-offerded</label>
                                                <div class="col-sm-10 col-md-6">
                                                    <select name="service" class="form-control" id="service" required="required">
	                                                <option>select-service</option>
                                                    <option>computer training</option>
                                                      <option>web development</option>
                                                      <option>mobile app development</option>
                                                      <option>Business classes</option>
                                                      <option>lamenting</option>
                                                      <option>printing</option>
                                                      <option>binding</option>
                                                      <option>photo copying</option>
                                                      <option>volunteer</option>
	                                             </select><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2  col-md-6 control-label">Status</label>
                                                  <div class="col-sm-10 ml-5">
                                                        <input type="radio" name="status"  id="status"value="ongoing" required="required" checked="">Ongoing 
                                                        <input type="radio" name="status"  id="status" value="draft" required="required" >Draft
                                                        <input type="radio" name="status" id="status" value="completed" required="required">Completed
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Total-orders</label>
                                                <div class="col-sm-10   col-md-6">
                                                    <input type="text" name="orders" class="form-control"
                                                        id="orders" placeholder="orders" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Price-each</label>
                                                <div class="col-sm-10  col-md-6">
                                                    <input type="text" name="amount" class="form-control"
                                                        id="amount" placeholder="amount" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Total amount</label>
                                                <div class="col-sm-10  col-md-6">
                                                    <input type="text" name="total" class="form-control"
                                                        id="total" placeholder="total" required="required">
                                                </div>
                                            </div>
                                            <div id="msg" class="text-canter mb-3"></div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10  ">
                                                    <button type="submit" name="submit" id="submit"
                                                        class="btn btn-primary">Submit</button>
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
        <script src="js/order.js"></script>
       
</body>

</html>
