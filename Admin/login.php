<?php

//                      login Query   (Session)

session_start();

include 'conn.php';

if(isset($_POST['login'])){
    $Username=  $_POST['Username'];
    $Email= $_POST['Email'];

    $query = "SELECT * FROM `records` WHERE `Username`='$Username' AND `Email`='$Email'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);

   if($row > 0){
//    Session start
    $row1 = mysqli_fetch_assoc($result);
    $_SESSION['aid'] = $row1['id'];
    $_SESSION['name'] = $row1['name'];
//  Profile image 
    $_SESSION['image'] = $row1['Image'];
    header('location:index1.php'); 

    ?>

<script>
    alert("account login Successfully");
</script>

<?php
   }
   else{
    ?>
<script>
    alert("Email & Password not match");
</script>
<?php
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container ">
        <div class="row" style="margin-left: 200px;">
            <div class="SS col-8 ms-5  mt-5">
                <form class="card login-form border border-danger bg-success text-light" method="POST" enctype="multipart/form-data" id="page">
                    <div class="card-body"><p class="text-center text-warning">Wel come to Admin panel</p>
                        <h2 class="text-center text-light">Login Design</h2>
                        <div class="form-group input-group">
                            <label for="reg-fn">Username :</label>
                            <input class="form-control ms-3" type="text" name="Username" id="reg-email">
                        </div><br><br>
                        <div class="form-group input-group">
                            <label for="reg-fn">Email :</label>
                            <input class="form-control ms-5" type="text" name="Email" id="reg-pass">
                        </div><br><br>
                        <div class="button">
                            <button class="btn btn-success text-center" type="submit" id="submit"
                                name="login">Login</button>
                        </div>
                        <p class="outer-link ms-5 mt-5">Don't have an account? <a href="display.php">Register here </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>