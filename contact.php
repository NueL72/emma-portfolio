<?php

$HOST = "127.0.0.1";
$USER = "root";
$PSW = "";
$DB = "emmaportfolio";

$conn = mysqli_connect($HOST, $USER, $PSW, $DB);


session_start();


if(isset($_POST['sendsms'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // echo $name , $email, $subject, $message;

    
    $sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `messsage`) VALUES ('$name','$email','$subject','$message')";
    $query = mysqli_query($conn, $sql);

    // $_SESSION['success'] = $query;
   
    
    if($query){    
              echo "
                 <script>
                  const Toast = Swal.mixin({
                    toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;}
                      });
                      Toast.fire({
                      icon: 'success',
                      title: 'Signed in successfully'
                  </script>
                ";
              }
            }

?>