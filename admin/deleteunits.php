<?php

include "deletedb.php";
$id = $_GET['HouseID'];
$del = mysqli_query($db,"delete from houseunits where HouseID = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:houseunits.php");
    exit;
}
else
{
    echo "Error deleting record";
}

?>
