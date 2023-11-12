<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from tbl_registration where user_id='$mid'");
 $_SESSION['success']="User deleted  successfully";
header("location:index.php");
?>