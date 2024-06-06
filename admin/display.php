<?php

include ('operation.php');
if(isset($_POST['submit'])){
    $houseid = $_POST["userHouseid"];
    $type = $_POST["userType"];
    $location = $_POST["userLocation"];
    $price = $_POST["userPrice"];
    $available = $_POST["userAvailable"];
    $unitsavailable = $_POST["userUnitsavailable"];
    $unitsleft = $_POST["userUnitsleft"];
    $description = $_POST["userDescription"];
    $image = $_FILES['userImage'];
    
    

    $imagefilename= $image['name'];
    

    $imagefileerror=$image['error'];
     

    $imagefiletemp =$image['tmp_name'];
    

    $filename_separate=explode('.',$imagefilename);
   
    $file_extension=strtolower(end($filename_separate));
   

    $extension= array('jpeg','jpg','png');
    if (in_array($file_extension, $extension)) {
        $upload_image='images/'.$imagefilename;

        move_uploaded_file($imagefiletemp, $upload_image);
    

        $sql ="insert into houseunits (HouseID,Type,Location,Price,Available,Unitsavailable,Unitsleft,Description,Image) 
    values ('$houseid',' $type','$location','$price','$available','$unitsavailable','$unitsleft','$description','$upload_image') ";
        $result=mysqli_query($con, $sql);
        if ($result) {
            echo "Sucess";
        } else {
            die(mysqli_error($con));
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
            width: 200px;
        }
    </style>
    <title>Display</title>
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">
</head>
<body>

    <div class="main">

    <div class="navbar">
            <div class="icon">
                <h2 class="logo">MEAP</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../user/registration/home.php">Home</a></li>
                    <li><a href="display.php">Houses</a></li>
                    <li><a href="../user/repairdb.php">Repair</a></li>
                    <li><a href="../user/vacatedb.php">Vacate</a></li>
                    <li><a href="../user/registration/logout.php">Logout</a></li>
                  
                </ul>
            </div>
            
        </div>
        <div class="content">

    <h1>Houses Available</h1>
    <table border="2" class="table table-hover">
    <tr>
    <th>HouseIDTag </th>
    <th> HouseType </th>
    <th>Location </th>
    <th> Price </th>
    <th>Available </th>
    <th> Unitsavailable</th>
    <th>Description</th>
    <th>Image</th>
</tr>

<?php

$sql="Select * from houseunits ";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['HouseID'];
    $htype =$row['Type'];
    $hlocation =$row['Location'];
    $hprice = $row['Price'];
    $havailable =$row['Available'];
    $hunitsavailable =$row['Unitsavailable'];
    $hunitslef = $row['Unitsleft'];
    $hdescription = $row['Description'];
    $himage =$row['Image'];
    
    echo'
<tr>
<td>'.$id.'</td>
<td>'.$htype.'</td>
<td> '.$hlocation.'</td>
<td> '.$hprice.'</td>
<td> '.$havailable.'</td>
<td>'.$hunitsavailable.' </td>
<td>'.$hdescription.' </td>
<td><img src='.$himage.' /></td>
</tr>

';
}
?>
    </table>
    </div>

    </div>

    <div class="footer">
    <hr color="gold" size="6" noshade>
<br>
<center><small>&copy;Copyright 2021</small></center>
<br/>   
    </div>
</body>
</html> 