<?php

$HOST = "127.0.0.1";
$USER = "root";
$PSW = "";
$DB = "emmaportfolio";

$conn = mysqli_connect($HOST, $USER, $PSW, $DB);


if(isset($_POST['sendsms'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contact_us`(`id`,`name`, `email`, `subject`, `messsage`) VALUES ('','$name','$email','$subject','$message')";
    $query = mysqli_query($conn, $sql);
   
    if($query==true){
        echo "the data has been added successfully to the database";
    }
    // else{
    //     echo "Error: " . $conn->error;
    // }
}




?>