<!DOCTYPE html>
<html lang="en">
    <head>

    
    <title>Welcome to Mombasa county employee housing assistance management program</title>
    <link rel="stylesheet" href="repair.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">
    
    </head>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MEAP</h2>
            </div>
            <div class="menu">
                <ul>
                <li><a href="registration/home.php">Home</a></li>
                    <li><a href="../admin/display.php">Houses</a></li>
                    <li><a href="repairdb.php">Repair</a></li>
                    <li><a href="vacatedb.php">Vacate</a></li>
                    <li><a href="registration/logout.php">Logout</a></li>
                  
                </ul>
            </div>
            
        </div>
        <div class="content">
            <h1> Get first-class repair services</h1>
            <p class="par">
                Mombasa county government enables you to get repair services from our trusted and top rated repair men.
                Fill the form below to get help. Repair costs will be directly deducted from your pay.
            </p>

        </div>

        <div class="form-container">
        <form name="frmRepair" id="" frmRepair"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateRepairForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Full Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" required />
            </div>

            <div class="input-row">
                <label>Email address</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail"  required />
            </div>

            <div class="input-row">
                <label>Payroll Number</label> <span id="userPayroll-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userPayroll" id="userPayroll"  required />
            </div>

            <div class="input-row">
                <label>HouseID Tag</label> <span id="userHouseid-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userHouseid" id="userHouseid"  required />
            </div>

            <div class="input-row">
                <label>Repair</label> <span id="userRepair-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userRepair" id="userRepair"  required />
            </div>

            <div class="input-row">
                <label>Description</label> <span id="userDescription-info"
                    class="info"></span><br />
                <textarea name="userDescription" id="userDescription"
                    class="input-field" cols="30" rows="3"></textarea>
            </div>

            <div>
                <input type="submit" name="send" class="btn-submit"
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

          <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateRepairForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var userHouseid = $("#userHouseid").val();
            var userPayroll = $("#userPayroll").val();
            var userRepair = $("#userRepair").val();
            var userDescription = $("#userDescription");

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userHouseid == "") {
                $("#userHouseid-info").html("Required.");
                $("#userHouseid").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userPayroll == "") {
                $("#userPayroll-info").html("Required.");
                $("#userPayroll").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (userRepair == "") {
                $("#userRepair-info").html("Required.");
                $("#userRepair").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (userDescription == "") {
                $("#userDescription-info").html("Required.");
                $("#userDescription").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

    </div>

    <div class="footer">
    <hr color="gold" size="6" noshade>
<br>
<center><small>&copy;Copyright 2021</small></center>
<br/>   
    </div>


</html>