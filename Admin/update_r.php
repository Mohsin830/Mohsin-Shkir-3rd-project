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

    $select = "SELECT * FROM `records` WHERE id='$sid'";
        
    $query = mysqli_query($conn, $select);

    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){

        $idupdate = $_GET['id'];

        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Email = $_POST['Email'];
        $phone = $_POST['phone'];
        $Address = $_POST['Address'];
    $query = "UPDATE `records` SET `Username`='$Username',`Password`='$Password',`Email`='$Email',`phone`='$phone',`Address`='$Address' WHERE id= $idupdate";
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
    <h1 class="add">Add Data</h1>

    <form action="" method="POST">
        <label for="">Enter Your Username</label>
        <input type="text" name="Username" value="<?php echo $data['Username']; ?>"> <br><br>

        <label for="">Enter Your Password </label>
        <input type="text" name="Password" value="<?php echo $data['Password']; ?>"> <br><br>

        <label for="">Enter Your Email</label>
        <input type="text" name="Email" value="<?php echo $data['Email']; ?>"> <br><br>
        <label for="">Enter Your Phone</label>
        <input type="text" name="phone" value="<?php echo $data['phone']; ?>"> <br><br>
        <label for="">Enter Your Address</label>
        <input type="text" name="Address" value="<?php echo $data['Address']; ?>"> <br><br>

        <input type="submit" value="Update" name="update">
    </form>

</body>
</html>