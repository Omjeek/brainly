<?php
session_start();
if(isset($_SESSION['login'])){
    include "../connection.php";
    if(isset($_POST['submit'])){
    $userid = $_SESSION['user_id'];
    $query = mysqli_query($db_connection,"INSERT INTO questions (tagid,user_id,qcontent) VALUES ('$_POST[tagid]','$userid','$_POST[qcontent]')");
    if($query){
        header('Location:../forum.php');
    }else{
        echo "Error"->$db_connection;
    }
} 
}
?>