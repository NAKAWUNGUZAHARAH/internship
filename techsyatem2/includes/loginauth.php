<?php 
session_start();
if($_SESSION['SESS_MEMBER_ID']=="")
     header("location: index.php");

?>