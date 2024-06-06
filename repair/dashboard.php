<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("dbd.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.js">

</head>
<body>
  
       
		   <button><a href="logout.php">Logout</a></button><br><br><br>
     

	
    <h2>User Repair Requests</h2>   
    <table border="1" class="table table-striped">
      <tr>
        <th>ID</th>
        <th> Name</th>
        <th>Email </th>
        <th>Payroll </th>
        <th>HouseID </th>
        <th> Subject</th>
        <th>Description</th>
        <th>Delete</th>
      </tr>

      <?php
      include "dbd.php";
      $records = mysqli_query($db,"select * from repairtl");
      while ($data = mysqli_fetch_array($records))
      {
        ?>

        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['Name']; ?></td>
          <td><?php echo $data['Email']; ?></td>
          <td><?php echo $data['Payroll']; ?></td>
          <td><?php echo $data['HouseID']; ?></td>
          <td><?php echo $data['Subject']; ?></td>
          <td><?php echo $data['Description']; ?></td>
          <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
        <?php
      }
      ?>

    </table>         
  
</body>
</html>
