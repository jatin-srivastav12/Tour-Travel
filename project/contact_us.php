<?php
    $sever = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tour";

    $conn = mysqli_connect($sever, $username, $password, $dbname);

    if(!$conn)
    {
        echo "not connected";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="INSERT INTO `trip`(`name`, `email`, `phone`, `subject`, `message`) VALUES 
    ('$name','$email','$phone','$subject','$message')";
    $result = mysqli_query($conn , $sql);
    if($result)
    {
        echo "data submited";
    }

    else {
        echo "query failed....!";
    }
 
?>  
