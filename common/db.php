<?php
$host="localhost";
$username="root";
$password=null;
$db_name="discuss";

$conn= new mysqli($host,$username,$password,$db_name);
if ($conn->connect_error){
    die ("not connected to database" .$conn->connect_error);
}
// $sql=
echo "database connected! ";

?>