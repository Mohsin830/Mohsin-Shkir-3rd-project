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
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    // $profile = $_FILES['image'];
    // $filename = $profile['name'];
    // move_uploaded_file($image['tmp_name'],'upload/'.$filename);
 $query =  "INSERT INTO `booking`(`id`, `Username`, `Email`, `Password`, `Address`, `City`, `Country`)
    VALUES ('','$Username','$Email','$Password','$Address','$City','$Country')";
     $result = mysqli_query($conn, $query);


if($result){
    header('location:display_b.php');
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
    <div class=" ms-5" style="margin-left: 300px;">
        <h1 class="text-warning">Form</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Enter your Username</label>
                <input type="text" name="Username" required><br><br>
            <label for="">Enter your Email</label>
                <input type="text" name="Email" required><br><br>
            <label for="">Enter your  Password</label>
                <input type="text" name="Password" required><br><br>   
            <label for="">Enter your  Address</label>
                <input type="text" name="Address" required><br><br>
            <label for="">Enter your City </label>
                <input type="text" name="City" required><br><br>
            <label for="">Enter your Country </label>
                <input type="text" name="Country" required><br><br>
            <input type="submit" name="submit" value="submit">

        </form>
    </div>
</body>

</html>