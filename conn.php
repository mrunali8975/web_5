
<?php

$servername='localhost';
$username='id15217845_root';
$password='M&GJ1y=|K5Skhhym';
$database='mydb';
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die ('connection is fail '. $conn->error());
}
else{
   // echo " connected";
}
?>