<?php
//Declare connection variables
$servername = "sql306.infinityfree.com";
$username = "if0_39114208"; 
$pw = "4LmiFOsdqLilZ"; 
$db = "if0_39114208_1dt_project"; 

// `Recieves 4 parameters through php builtin function
//and stores them in variables
$conn = mysqli_connect($servername, $username,$pw,$db);

//Check if the connection is established & if established
if (!$conn){
    die("Could not connect: " .mysqli_connect_error());
}
