

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        section{
    margin: 20px;
    padding: 10px;
   
}
table,th,tr{
    border: 2px solid black;
  border-collapse: collapse;
}
table{
    box-shadow: 5px 5px grey;
}
    </style>
</head>
<body>
    <header>
        <div class = "headcontainer">
            <div class="symbol">
                <a href="Login.php"><img src="logo.JPG" width="max" height="67px" alt="Avatar" class="avatar"></a>
            </div>
            <div class="title">
                <h1>CHAMBER ARENA</h1>
            </div>
           
        </div>
    </header>
    <div  class="btn1">
        <a href="Logout.php">Log-Out</a>
    </div>
    <section>
        <h1 style="text-align: center;" >Book Your Rooms and Manage Your Bookings Here</h1>
    </section>
    <article>
        <table style="width: 100%;">
            <tr>
                <th>File Name</th>
                <th>File Data</th>
                <th>Date</th>
                <th>Functions</th>
            </tr>


<?php  


  $connection = mysqli_connect ("localhost", "vbt939", "Vatsa@", "vbt939");
   
  $db = mysqli_select_db($connection,'vbt939');

  $q2 = "SELECT * FROM FileMnge WHERE f_ID = '1'";
  $q3 = mysqli_query($connection,$q2);

  while($r2 = mysqli_fetch_array($q3))
  {
?>

            <tr>
                <th>  <?echo $r2['Filename'] ?></th>
                <th>  <?echo $r2['FileData'] ?> </th>
                <th> <?echo $r2['Date'] ?> </th>
                <th><a href="http://www2.cs.uregina.ca/~vbt939/CS330/XYZ.php?f_ID=<?echo "1" ?>" style="color:red;font-size: 20px;">Edit/Delete</a></th>
               
</tr>

<?php

}
?>


        </table>
    </article>
        <footer style="margin-top: 500px;">
        <p>&copy; 2020 P.P. All rights reserved.</p>
    </footer>
</body>
</html>
