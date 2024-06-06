<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of members</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">
     <link rel="stylesheet" href="admin.css">
</head>
<body>
  <div class="main">
  <div class="navbar" >
            <div class="icon">
                <h2 class="logo">MEAP</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">Upload</a></li>
                    <li><a href="houseunits.php">HouseUnits</a></li>
                    <li><a href="members.php">Members</a></li>
                    <li><a href="vacate.php">VacationNotices</a></li>
                    <li><a href="applications.php">HouseApplications</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  
                </ul>
            </div>
            
        </div>


<div class="tables">
<h2>User Member Lists</h2>
<table  border="1">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Creation</th>
    <th>Delete</th>

    </tr>
    <?php
include "deletedb.php";
$records = mysqli_query($db,"select * from tbl_member");
while ($data = mysqli_fetch_array($records))
 {
    ?>
  <tr>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['create_at']; ?></td>
    <td><a href="deletemembers.php?username=<?php echo $data['username']; ?>">Delete</a></td>
  </tr>
<?php
}
?>


</table>
    
</div>
</div>
</body>

<div class="footer">
    <hr color="gold" size="6" noshade>
<br>
<center><small>&copy;Copyright 2021</small></center>
<br/>   
    </div>
</html>