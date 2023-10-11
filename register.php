<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register page desgin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
        @media only screen and (max-width: 600px) {
            .ab {
                background-color: red;
            }
        }

        @media only screen and (min-width: 768px) {
            .ab {
                background-color: green;
            }
        }

        @media only screen and (min-width: 1268px) {
            .ab {
                background-color: yellow;
                height: 300px;
                margin-left: 104px;
                width: 50%;
                text-align: center;
            }
        }

        @media only screen and (max-width: 600px) {
            .bj {
                background-color: yellow;
            }
        }

        @media only screen and (min-width: 768px) {
            .bj {
                background-color: green;
            }
        }

        @media only screen and (min-width: 1268px) {
            .bj {
                background-color: blue;
                height: 300px;
                width: 50%;
                margin-left: 100px;
                text-align: center;
            }
        }
    </style> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning p-3">
        <div class="container-fluid">
            <div>
                <a class="nb navbar-brand fs-4" href="#">Find Partner</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="one collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6 one">
          <li class="nav-item">
            <a class="nav-link active text-warning" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="About.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="Contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">Our Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">All Matches</a>
          <li class="nav-item">
          </li>
          <a class="nav-link text-light" href="Login.php">Login</a>
          </li>

          <button class="bt btn bg-warning">Register now</button>
        </ul>

            </div>
        </div>
    </nav>
    <!-- <h4 class="ab mt-5">Silider Aplly in this file. </h4> -->
    <div class="container-fluid bg-warning">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div style="margin-left: 90px;">
                    <h1>You & Me together<br>forever</br></h1>
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, fugit! Laboriosam
                        omnis sint dolores ut
                        blanditiis ducimus quidem cum eligendi ullam dolorum! Harum magnam explicabo voluptatem
                        asperiores
                        laboriosam, obcaecati culpa?</p>
                    <button class="mt-5 btn bg-warning">Get Started </button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div id="carouselExampleIndicators" class="two carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mb-5">
                        <div class="carousel-item active">
                            <img src="./images/hero1.jpg" class="d-block w-100" alt="..." height="400px">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/hero2.jpg" class="d-block w-100" alt="..." height="400px">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/hero3.jpg" class="d-block w-100" alt="..." height="400px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 text-center border border-danger">
        <div class="row">
            <div class="col-lg-12 ">
                <h3>Register data</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam doloribus recusandae eligendi veniam
                    quod quia sapiente, reprehenderit corrupti amet odio velit saepe quasi voluptate, autem obcaecati
                    quaerat eaque architecto repudiandae.</p>
            </div>
        </div>
    </div>
    <div class="container mt-4 p-3 border border-danger">
        <div class="row">
            <form action="" class="form_main col-10 ">
                <h3 class="fs-2">Register Data</h3>

                <div class="inputContainer">
                    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e"
                        viewBox="0 0 16 16">
                        <path
                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="text" class="inputField" id="username" placeholder="Username">
                </div>


                <div class="inputContainer">
                    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" class="inputField" id="password" placeholder="Password">
                </div>

                <div class="inputContainer">
                    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="Email" class="inputField" id="Email" placeholder="Email">
                </div>
                <div class="inputContainer">
                    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="text" class="inputField" id="Phone" placeholder="Phone">
                </div>
                <div class="inputContainer">
                    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="text" class="inputField" id="Address" placeholder="Address">
                </div>

                <button id="button col-3">Submit</button>
                <a class="forgotLink" href="#">Forgot your Password?</a>
            </form>


        </div>
    </div>
    <!-- <h3>Footer Apply.</h3> -->
    <div class="Footer">
        <div class="container-fluid mt-4 bg-warning border border-danger">
            <div class="row" style="margin-left: 80px;">
                <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
                    <div>
                        <h2 class="text-danger">Find partner</h2>
                        <h6 class="mt-4">A108 Adnan Street</h6>
                        <h6 class="mt-3">New yark, NY 535022 </h6>
                        <h6 class="mt-3">United States</h6>
                        <h6 class="mt-4">Phone : +1 5589 55448 55</h6>
                        <h6 class="mt-3">Email : info@example.com</h6>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
                    <div class="ms-5">
                        <h3 class="text-danger">Useful Links</h3>
                        <H6 class="mt-4">Home</H6>
                        <h6 class="mt-4">About Us News</H6>
                        <h6 class="mt-4">Services</H6>
                        <H6 class="mt-4">Terms of service</H6>
                        <h6 class="mt-4">Privacy policy</H6>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6  mt-5 mb-3">
                    <div class="ms-5">
                        <h3 class="text-danger">Our service</h3>
                        <h6 class="mt-3">Web design</h6>
                        <h6 class="mt-3">Web development</h6>
                        <h6 class="mt-3">Product Management</h6>
                        <h6 class="mt-3">Marketing</h6>
                        <h6 class="mt-3">Graphic Design</h6>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
                    <div>
                        <h3 class="text-danger">Social Networks</h3>
                        <h6 class="mt-3">Pizza and Business</h6>
                        <h6 class="mt-3">Shop for Business</h6>
                        <h6 class="mt-3">For Education</h6>
                        <h6 class="mt-3">Skills and Education</h6>
                        <h6 class="mt-3">Shop for k-12</h6>
                        <h6 class="mt-3">For Healthcare</h6>
                        <h6 class="mt-3">Pizza is a high Quality</h6>
                        <h6 class="mt-3">services</h6>
                    </div>
                </div>
            </div>

            <div class="row mt-3 text-center ">
                <div class="mb-5">
                    <h3> Copyright Tech step. All Rights Reserved</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>