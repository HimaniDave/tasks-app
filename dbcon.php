<?php
$server="localhost";
$username="root";
$password="";
$db="todoapp";

$con= mysqli_connect($server,$username,$password,$db);

if(!$con){
    echo die("Unable to connect");
}

?>