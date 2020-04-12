<?php
$db = new mysqli("Localhost", "vbt939", "Vatsa@", "vbt939");
   
 if ($db->connect_error)
    {
        die ("Connection failed: " . $db->connect_error);
    }


if (isset($_POST["submitted"]) && $_POST["submitted"])
{
$cc = $_POST["message"];
$change = "UPDATE FileMnge SET FileData = '$cc' WHERE f_ID = '1'";
$r3 = $db->query($change);
header("Location: vbt.php");

}

if (isset($_POST["Delete"]) && $_POST["Delete"])
{
$cc = $_POST["message"];
$change = "UPDATE FileMnge SET FileData = '' WHERE f_ID = '1'";
$r3 = $db->query($change);
header("Location: vbt.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Notes</title>
    <link rel="stylesheet" href="style1.css">
    <script type="text/javascript" src="Signup.js"> </script>
</head>
<body>
    <header>
        <div class = "headcontainer">
            <div class="symbol">
                 <a href="index.html"><img src="logo.JPG" width="max" height="67px" alt="Avatar" class="avatar"></a>
            </div>
            <div class="title">
                <h1>CHAMBER ARENA</h1>
            </div>
            <div class="usersinfo">
              >
            </div>
        </div>
    </header>
    <div  class="btn1">
        <a href="Logout.php">Log-Out</a>
    </div>
    <section style="text-align: center;">
            <h1>About Booking </h1>

            <form id="editnote" method = "POST">
<input type = "hidden" name= "submitted" value ="1"/>
                <textarea name="message" rows="20" cols="200" placeholder="Enter more information about Your Booking"></textarea>
            </br>
                <label  id="note_msg" class="err_msg"></label>
            </br>
                <label  id="notecount_msg" class="err_msg"></label>
       
            </br>  
                <input type="hidden" id="roomId" name="roomId" value="">

                <input type="submit" value="Submit">
<input type="submit" value="Delete">
        </section>
          </form>

    <footer style="margin-top: 390px;">
        <p>&copy; 2020 P.P. All rights reserved.</p>
    </footer>
    <script type = "text/javascript"  src = "editnote_r.js" ></script>
</body>
</html>