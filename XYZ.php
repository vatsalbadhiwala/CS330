<?php
session_start();

$email=$_SESSION["email"];

$bid = $_GET["b_ID"];



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
 {

$db = new mysqli("Localhost", "ppa488", "pP0816;", "ppa488");
   
 if ($db->connect_error)
    {
        die ("Connection failed: " . $db->connect_error);
    }


$qp = "SELECT * FROM user WHERE email = '$email'";
    $rp = $db->query($qp);
    $rowp = $rp->fetch_assoc();
    $id = $rowp["user_ID"];
    $photo = $rowp["u_avatar"];
$handle = $rowp ["handle"];


$comment = "SELECT u_dec FROM note WHERE n_ID = $bid";
$r1 = $db->query($comment);
$row2 = $r1->fetch_assoc();
$c = $row2["u_dec"];


if (isset($_POST["submitted"]) && $_POST["submitted"])
{
$cc = $_POST["message"];
$change = "UPDATE note SET u_dec = '$cc' WHERE n_ID = $bid";
$r3 = $db->query($change);
header("Location: RoomBooking1.php");

}

if (isset($_POST["Delete"]) && $_POST["Delete"])
{
$cc = $_POST["message"];
$change = "UPDATE note SET u_dec = '' WHERE n_ID = $bid";
$r3 = $db->query($change);
header("Location: RoomBooking1.php");


}






}
else {
    echo "Please log in first to see this page.";
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
                <div class="avatartitle">
                    <img src="<?php echo $photo; ?>" width="50px" height="50px" alt="Avatar" class="avatar">
                </div>
                <div class="handletitle">
                    <p><?php echo $handle; ?></p>
                </div>
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