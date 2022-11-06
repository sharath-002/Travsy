<?php
     $name=$_POST['name'];
     $dob=$_POST['date'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $address=$_POST['address'];

     //Database Connection
     $conn = new mysqli('localhost','root','','travsy_reg');
     if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into reg_form(Name, Date Of Birth, Email, Phone, Address)
           values(?,?,?,?,?)");
        $stmt->bind_param("sssis",$name,$dob,$email,$phone,$address);
        $stmt->execute();
        $stmt->close();
        $conn->close();
     }


?>