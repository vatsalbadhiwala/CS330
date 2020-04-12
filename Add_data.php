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
header("Location: Files.php");

}

if (isset($_POST["Delete"]) && $_POST["Delete"])
{
$cc = $_POST["message"];
$change = "UPDATE FileMnge SET FileData = '' WHERE f_ID = '1'";
$r3 = $db->query($change);
header("Location: Files.php");
}

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="stylesheet.css" >
<body>
    <div class="File">
              
                    
                <h1>File Management System</h1>
    

   <p class="p2">You can change following things in your File:</p>
<p class="p2">You can add data to your file here:</p>

        
<form method = "POST">
<input type = "hidden" name= "submitted" value ="1"/>
                <textarea name="message" rows="20" cols="200" placeholder="Enter more information about Your Booking"></textarea>
                   <input type="hidden" id="roomId" name="roomId" value="">

                <input type="submit" value="Submit">
<input type="submit" value="Delete">
</form>
   
   
</body>
</html>







