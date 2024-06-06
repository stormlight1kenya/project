<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
    $payroll = $_POST["userPayroll"];
    $mobile = $_POST["userMobile"];
	$email = $_POST["userEmail"];
	$houseid = $_POST["userHouseid"];

	$conn = mysqli_connect("localhost", "root", "", "housingproject") or die("Connection Error: " .mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO services (Name,Payroll,Mobile,Email,HouseID) VALUES ('" . $name. "', '" . $payroll. "','" . $mobile. "','" . $email. "','" . $houseid. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your Intention to vacate notice is saved.";
	   $type = "success";
	//
}
require_once "vacate.php";
?>
