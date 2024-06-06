<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>


 <!DOCTYPE html>
 <html lang="en">
     <head>
<title>Admin Dashboard</title>
     </head>
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">
     <link rel="stylesheet" href="admin.css">

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
<h2>Upload House units</h2>
<br>
<div class="container">

<form action="display.php" method="post" enctype="multipart/form-data" >
<div class="input-row">
                <label style="padding-top: 20px;">HouseID</label> <span
                    id="userHouseid-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userHouseid"
                    id="userHouseid" required />
            </div>

            <div class="input-row">
                <label>Type</label> <span id="userType-info"
                    class="info"></span><br />
                    <select name="userType" id="userType">
                    <option value="">--SElect--</option>
                    <option value="house">House</option>
                    <option value="appartment">Appartment</option>
                    <option value="bedsitter">Bedsitter</option>
                    </select>
            </div>

            <div class="input-row">
            <label>Location</label> <span id="userLocation-info"
                    class="info"></span><br />
                    <select name="userLocation" id="userLocation">
                    <option value="">--SElect--</option>
                    <option value="changamwe">Changamwe</option>
                    <option value="jomvu">Jomvu</option>
                    <option value="kisauni">Kisauni</option>
                    <option value="nyali">Nyali</option>
                    <option value="likoni">Likoni</option>
                    <option value="mvita">Mvita</option>
                   
                    </select>
            </div>

            
            <div class="input-row">
                <label>Price</label> <span id="userPrice-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userPrice" id="userPrice"/>
            </div>
            
            <div class="input-row">
            <label>Available</label> <span id="userAvailable-info"
                    class="info"></span><br />
                    <select name="userAvailable" id="userAvailable">
                    <option value="">--SElect--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    </select>
            </div>

            <div class="input-row">
                <label>UnitsAvailable</label> <span id="userUnitsavailable-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userUnitsavailable" id="userUnitsavailable"  />
            </div>

            <div class="input-row">
                <label>UnitsLeft</label> <span id="userUnitsleft-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userUnitsleft" id="userUnitsleft"  />
            </div>

            <div class="input-row">
                <label>Description</label> <span id="userDescription-info"
                    class="info"></span><br />
                <textarea name="userDescription" id="userDescription"
                    class="input-field" cols="30" rows="3"></textarea>
            </div>

            <div class="input-row">
                <label>Image</label> <span id="userImage-info"
                    class="info"></span><br /> <input type="file"
                    class="input-field" name="userImage" id="userImage"  />
            </div>
<br>
            <div>
               <button type="submit" name="submit">Submit</button>
            </div>
</form>

</div>

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