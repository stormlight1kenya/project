
<?php

include "deletedb.php";
$id = $_GET['Payroll'];
$del = mysqli_query($db,"delete from houseapplications where Payroll = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:applications.php");
    exit;
}
else
{
    echo "Error deleting record";
}

?>
