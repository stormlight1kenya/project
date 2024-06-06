
<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$houseid = $_POST["userHouseid"];
	$payroll = $_POST["userPayroll"];
	$repair = $_POST["userRepair"];
	$description = $_POST["userDescription"];

	$conn = mysqli_connect("localhost", "root", "", "housingproject") or die("Connection Error: " .mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO services (Name,Email,Payroll,HouseID,Subject,Description) VALUES ('$name','$email','$payroll','$houseid','$repair','$description')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your repair request has been saved.";
	   $type = "success";
	//
}
require_once "repair.php";
?>



