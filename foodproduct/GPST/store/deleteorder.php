<?php
include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE from orders WHERE id='$id'";
 header("location: index.php");
 mysqli_query($conn, $sql);
}

?>