<?php 

include 'dbcon.php';

$idNum=$_GET['id'];

$deleteQuery= "delete from todo where id=$idNum";

$res= mysqli_query($con,$deleteQuery);

header('location:index.php');

?>