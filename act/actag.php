<?php
session_start();
if(isset($_POST['submit'])){
    include "../connection.php";
    $query = mysqli_query($db_connection, "INSERT INTO tags (nametag) VALUES ('$_POST[nametag]')");
    if($query){
        header('Location:../manage.php');
    }else{
        echo "ERROR";
    }
}
?>