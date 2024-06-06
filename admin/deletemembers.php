<?php

include "deletedb.php";
$id = $_GET['username'];
$del = mysqli_query($db,"delete from tbl_member where username = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:members.php");
    exit;
}
else
{
    echo "Error deleting record";
}

?>
