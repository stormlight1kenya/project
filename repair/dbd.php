<?php
$db = mysqli_connect("localhost","root","","housingproject");
if(!$db){
    die("Connection failed:".mysqli_connect_error());
}
?>