
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="stylesheet.css" >
<body>
    <div class="File">
              
                    
                <h1>File Management System</h1>
    
        <p class="p1">Listed are all the Files/ Documents in the Directory</p>
   <p class="p2">You can change following things in your File:</p>
<p class="p2">1. You can add data in your file from the Add/Remove Data link corresponding to your File name which can be viewed in the File data column,</p>
<p class="p2">2. You can also Add/Delete File to your Directory. (Sorry!! Does not work.)</p>
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
                <th><a href="http://www2.cs.uregina.ca/~vbt939/CS330/Add_data.php?f_ID=<?echo "1" ?>" style="color:red;font-size: 20px;">Add/Remove Data</a></th>
               
</tr>
<tr>
<th> Only one file in the directory!!</th>
</tr>

<?php

}
?>


  </table>
</div>
     
    
    </body>
</html>
