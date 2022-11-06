<?php
     $username=$_POST['username'];
     $password=$_POST['password'];

     //Database Connection
     $conn = new mysqli('localhost','root','','travsy_reg');
     if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into log_form(Username, Password)
           values(?,?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $stmt->close();
        $conn->close();
     }


?>