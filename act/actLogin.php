<?php
session_start();
if(isset($_POST['submit'])){

    $admin = $_SESSION['email'];
    $adminEmail = "admin@gmail.com";
}
if(isset($_POST['submit'])){
    include "../connection.php";
    $sql = mysqli_query($db_connection,"SELECT * FROM users WHERE email = '$_POST[email]'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        if(password_verify($_POST['password'],$row['password'])){
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['profilepic'] = $row['profilepic'];

            if($row['email'] === $adminEmail){
                header("Location:../manage.php");
            }else{
                header("Location:../forum.php");
            }
        }else{
            header("Location:../login.php");
        }
    }else{
         echo "<script>alert('Login Failed, Users not found !'); window.location.replace('../login.php');</script>";
    }
}
?>