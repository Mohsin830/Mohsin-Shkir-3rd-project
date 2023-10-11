<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php

    include "conn.php";

    $sid = $_GET['id'];

    $select = "SELECT * FROM `booking` WHERE id='$sid'";
        
    $query = mysqli_query($conn, $select);

    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){

        $idupdate = $_GET['id'];

        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $Country = $_POST['Country'];
        $query = "UPDATE `booking` SET `Username`='$Username',`Email`='$Email',`Password`='$Password',`Address`='$Address',`City`='$City',`Country`='$Country' WHERE id= $idupdate";
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
    <div style="text-align: center;"> 
        <h1 class="add">Add Data</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Enter Your Username</label>
            <input type="text" name="Username" value="<?php echo $data['Username']; ?>"> <br><br>
            <label for="">Enter Your Email </label>
            <input type="text" name="Email" value="<?php echo $data['Email']; ?>"> <br><br>
            <label for="">Enter Your Password</label>
            <input type="text" name="Password" value="<?php echo $data['Password']; ?>"> <br><br>
            <label for="">Enter Your Address</label>
            <input type="text" name="Address" value="<?php echo $data['Address']; ?>"> <br><br>
            <label for="">Enter Your City Name</label>
            <input type="" name="City" value="<?php echo $data['City']; ?>"> <br><br>
            <label for="">Enter Your Country Name</label>
            <input type="" name="City" value="<?php echo $data['Country']; ?>"> <br><br>
            <input type="submit" value="Update" name="update">
        </form>
    </div>
</body>

</html>