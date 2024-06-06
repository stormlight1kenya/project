<?php

include "dbd.php";
$id = $_GET['contact_id'];
$del = mysqli_query($db,"delete from tblcontact where contact_id = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:dashboard.php");
    exit;
}
else
{
    echo "Error deleting record";
}

?>
