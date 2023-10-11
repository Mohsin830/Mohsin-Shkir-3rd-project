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

    $select = "SELECT * FROM `contacts` WHERE id='$sid'";
        
    $query = mysqli_query($conn, $select);

    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){

        $idupdate = $_GET['id'];

        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Cpassword = $_POST['Cpassword'];
    $query = "UPDATE `contacts` SET `Name`='$Name',`Email`='$Email',`Password`='$Password',`Cpassword`='$Cpassword' WHERE id= $idupdate";
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
    <h1 class="add">Add Data</h1>

    <form action="" method="POST">
        <label for="">Enter Your Username</label>
        <input type="text" name="Name" value="<?php echo $data['Name']; ?>"> <br><br>

        <label for="">Enter Your Email </label>
        <input type="text" name="Email" value="<?php echo $data['Email']; ?>"> <br><br>

        <label for="">Enter Your Password</label>
        <input type="text" name="Password" value="<?php echo $data['Password']; ?>"> <br><br>
        <label for="">Enter Your Cpassword</label>
        <input type="text" name="Cpassword" value="<?php echo $data['Cpassword']; ?>"> <br><br>
        <label for="">Enter Your Address</label>

        <input type="submit" value="Update" name="update">
    </form>

</body>
</html>