<?php
$db_host="localhost"; // NAMA SERVER
$db_username="root"; //DATABASE USERNAME
$db_password=""; //DATABASE PASSWORD
$db_name="brainly"; //NAMA DATABASE YANG DIBUAT

// KONEKSI KE MYSQL , JIKA ERROR MAKAN AKAN STOP PROGRAM
$db_connection = mysqli_connect($db_host,$db_username,$db_password) or
die;

// MEMILIH DATABASE AKTIF
mysqli_select_db($db_connection,$db_name);
?>
