<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from tbl_theatre where id='$mid'");
 $_SESSION['success']="Theatre deleted  successfully";
header("location:index.php");
?>