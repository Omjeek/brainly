<?php
if(isset($_POST['submit'])) {
    include '../connection.php'; //memanggil koneksi php mysql
  
  //create default password
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
  // sql query INSERT INTO VALUES
  $query = "INSERT INTO users (username, email,  password, fullname ) VALUES ('$_POST[username]','$_POST[email]',
    '$password','$_POST[fullname]')";
  
  // run query
  $create = mysqli_query($db_connection, $query);
  
  if($create){ // check if query succes
        header("Location:../login.php");
  } else {
        header("Location:regis_action.php");
   }
  
  }
  ?>