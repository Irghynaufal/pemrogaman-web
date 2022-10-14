<?php
//mysqli_connect("host_name", "username", "passsword", "db_name");
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully";
?>