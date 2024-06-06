<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<?php
include ('opp.php');
if(isset($_POST['submit'])){
    $payroll = $_POST["userPayroll"];
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $houseid = $_POST["userHouseid"];


    
    $sql ="insert into houseapplications(Payroll,Name,Email,HouseID) 
    values ('$payroll','$name','$email','$houseid') ";
        $result=mysqli_query($con, $sql);
        if ($result) {
            echo "Sucess";
        } else {
            die(mysqli_error($con));
        }
}



?>


<HTML>
<HEAD>
<TITLE>Welcome</TITLE>


    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap-reboot.css">
   
</HEAD>
<BODY> 
    
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MEAP</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="../../admin/display.php">Houses</a></li>
                    <li><a href="../repairdb.php">Repair</a></li>
                    <li><a href="../vacatedb.php">Vacate</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  
                </ul>
            </div>		
	</div>
        
        <div class="work">

        <h3>How does it work</h3>
        <br>
        <h3>1.View Houses</h3>
        <br>
        <h3>2.Choose Desired House</h3>
        <br>
        <h3>3.Fill the Form Below</h3>
        <br>
       

       <div class="application">
       <div class="form-container">
        <form name="frmApplication" id="" frmApplication"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateApplicationForm()">

            <div class="input-row">
                <label  style="padding-top: 20px;">Payroll Number</label> <span id="userPayroll-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userPayroll" id="userPayroll" />
            </div>
            <div class="input-row">
                <label>Full Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            
            <div class="input-row">
                <label>Email address</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>HouseID Tag</label> <span id="userHouseid-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userHouseid" id="userHouseid" />
            </div>
            
            <div>
                <input type="submit" name="submit" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>
       </div>
       <h3>4. You are Done</h3>
       </div>

</div>
</div>

<div class="footer">
    <hr color="gold" size="6" noshade>
<br>
<center><small>&copy;Copyright 2021</small></center>
<br/>   
    </div>

</BODY>
</HTML>
