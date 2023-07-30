<?php
  
    // $servername = 'localhost';
	$servername = '127.0.0.1:5501';
	$username = 'root';
	$password = '';
	$database = 'plant_db';
    $conn = mysqli_connect($servername, $username, $password, $database);

    $firstname = $_POST['First Name'];
    $lastname = $_POST['Last Name'];
    $email = $_POST['Email Id'];
    $address = $_POST['Address'];
    $password = $_POST['Password'];

    
//database connection
$conn = new mysqli('localhost','root', '','plant_db');
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registeration(firstname, lastname, email, address, password)
    value(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$firstname,$lastname,  $email, $address, $password);
    $stmt->execute();
    
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
     
} 

?>