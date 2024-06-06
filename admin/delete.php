<?php

include "deletedb.php";
$id = $_GET['Name'];
$del = mysqli_query($db,"delete from services where Name = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:vacate.php");
    exit;
}
else
{
    echo "Error deleting record";
}

?>
