<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Admin Display</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .dropbtn {
            background-color: #5d7c5e;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-right: 100px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12 bg-dark">
                <div class="text-light ms-5 outline-primary ">
                    <h2 style="margin-top: 20px">1st project design</h2>
                </div>
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn" style="margin-top: -120px;">Admin</button>
                    <div class="dropdown-content">
                        <a href="#">Add Admin</a>
                        <a href="#">View Admin</a>
                        <a href="logout.php">logout</a>
                        <a href="index1.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 bg-dark text-light">
                <div class="ms-5 mt-3">
                    <ul class="fs-2" style="color: white;">
                        <li>
                            <a href="index1.php" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="index1.php" style="color: white;">User</a>
                        </li>
                        <li>
                            <a href="display_b.php" style="color: white;">Booking</a>
                        </li>
                        <li>
                            <a href="display_c.php" style="color: white;">Contact</a>
                        </li>
                        <li>
                            <a href="display_r.php" style="color: white;">Register</a>
                        </li>


                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                        <li>
                            <a href="" style="color: white;">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12 mt-5">
                <div class="ms-3">
                    <button><a href="index_c.php">Add New Data</a></button>
                </div>
                
                <div class="container mt-2">
                    <div class="row">
                        <table class="table table-bordered text-center">
                            <thead class=" bg-success text-white fs-3">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Cpassword</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <?php
                    
                            include "conn.php";
                            
                                $select = "SELECT * FROM `contacts`";
                            
                                $query = mysqli_query($conn, $select);
                            
                                while($result = mysqli_fetch_array($query) ){
                            ?>
                            <div class=" mt-1">
                                <div class=" bg-success text-light">
                                    <tbody>

                                        <tr>
                                            <th scope="col">
                                                <?php echo $result['id'] ?>
                                            </th>
                                            <th scope="col">
                                                <?php echo $result['Name'] ?>
                                            </th>
                                            <th scope="col">
                                                <?php echo $result['Email'] ?>
                                            </th>
                                            <th scope="col">
                                                <?php echo $result['Password'] ?>
                                            </th>
                                            <th scope="col">
                                                <?php echo $result['Cpassword'] ?>
                                            </th>


                                            <!-- <td><img id="display-img" src="upload/<?php echo $result['image']; ?>"></td> -->

                                            <td scope="col">
                                                <a href="update_c.php?id=<?php echo $result['id']; ?>"><i
                                                        class="far fa-edit ms-3"></i></a>
                                                <!-- <a href="detail.php?id=<?php echo $result['id']; ?>" <i class="far fa-user ms-3"></i></a> -->
                                                <a href="delete_c.php?id=<?php echo $result['id']; ?>"><i
                                                        class="far fa-trash ms-3"></i></a>
                                            </td>
                                        </tr>


                                        <?php
                           }
                        ?>
                                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

