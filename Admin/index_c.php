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
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Cpassword = $_POST['Cpassword'];
    // $profile = $_FILES['image'];
    // $filename = $profile['name'];
    // move_uploaded_file($image['tmp_name'],'upload/'.$filename);

    $query = "INSERT INTO `contacts`(`id`, `Name`, `Email`, `Password`, `Cpassword`) 
     VALUES ('','$Name','$Email','$Password','$Cpassword')";
     $result = mysqli_query($conn, $query);


if($result){
    header('location:display_c.php');
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
<div class =" ms-5">
<h1>form</h1>

<form action="" method="POST" enctype="multipart/form-data" class ="">
    <label for="">enter your Name</label>
    <input type="text" name="Name" required><br><br>
    <label for="">enter your Email</label>
    <input type="text" name="Email" required><br><br>
    <label for="">enter your name Password</label>
    <input type="text" name="Password" required><br><br>
    <label for="">enter your  Cinform password</label>
    <input type="text" name="Cpassword" required><br><br>

    <!-- <label for="">enter your name Image</label>
    <input type="file" name="image" required><br><br> -->
    <input type="submit" name="submit" value="submit">
    
</form>
</div>
</body>
</html>