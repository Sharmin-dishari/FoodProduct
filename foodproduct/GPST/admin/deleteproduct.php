<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../store/connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from internet_shop where id='$id'";
 mysqli_query( $conn,$sql);
}

?>