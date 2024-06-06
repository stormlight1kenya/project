<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("dbd.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Finance area</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.js">
   
</head>
<body>
   
		   <button><a href="logout.php">Logout</a></button><br><br><br>
     
   

<h2>User Financial Queries</h2>      
     
 <table border="1" class="table table-hover">
<tr>
  <th>ContactId</th>
  <th>UserName</th>
  <th>UserEmail	</th>
  <th>Subject	</th>
  <th>Content</th>
  <th>Delete</th>
</tr>

<?php
include "dbd.php";
$records = mysqli_query($db,"select * from tblcontact");
while ($data = mysqli_fetch_array($records))
 {
    ?>
  <tr>
    <td><?php echo $data['contact_id']; ?></td>
    <td><?php echo $data['user_name']; ?></td>
    <td><?php echo $data['user_email']; ?></td>
    <td><?php echo $data['subject']; ?></td>
    <td><?php echo $data['content']; ?></td>
    <td><a href="delete.php?contact_id=<?php echo $data['contact_id']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
 </table>
</body>
</html>
