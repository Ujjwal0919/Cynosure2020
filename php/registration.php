<?php
$con n = new mysqli("localhost","root","","event_registration");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

 $name=$_POST['Name'];
 $secname = $_POST['SecondName'];
 $college = $_POST['college'];
 $mobile = $_POST['Mobile'];
 $email = $_POST['E-mail'];
 $sql = "INSERT INTO Event01 (Name,Second_Name,College,Mobile,Email)
 VALUES ($name,$secname,$college,$mobile,$email)";
 
 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 echo $name;
 ?>