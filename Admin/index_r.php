<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Data insert</title>
</head>
<body>

<?php

include 'conn.php';

if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $Address = $_POST['Address'];  
    // $profile = $_FILES['image'];
    // $filename = $profile['name'];
    // move_uploaded_file($image['tmp_name'],'upload/'.$filename);

    $query = "INSERT INTO `records`(`id`, `Username`, `Password`, `Email`, `phone`, `Address`) 
     VALUES ('','$Username','$Password','$Email','$phone','$Address')";
     $result = mysqli_query($conn, $query);


if($result){
    header('location:display_r.php');
 }
 else{
   ?>
    <script>
        alert("Sorry! Data no Updated..");
    </script>
    
 <?php
}
}
?> 
<div style="text-align: center;">
<h1>Form</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">enter your Username</label>
    <input type="text" name="Username" required><br><br>
    <label for="">enter your Password</label>
    <input type="text" name="Password" required><br><br>
    <label for="">enter your name Email</label>
    <input type="text" name="Email" required><br><br>
    <label for="">enter your name Phone</label>
    <input type="text" name="phone" required><br><br>
    <label for="">enter your name Address</label>
    <input type="text" name="Address" required><br><br>
    <label for="">enter your name Image</label>
    <input type="file" name="image" required><br><br>
    <input type="submit" name="submit" value="submit">
    
</form>
</div>
</body>
</html>