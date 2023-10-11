<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <title>Index page desgin</title>

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
        margin-left: 100px;
        width: 50%;
        text-align: center;
      }
    }

    @media only screen and (max-width: 600px) {
      .cd {
        background-color: yellow;
      }
    }

    @media only screen and (min-width: 768px) {
      .cd {
        background-color: green;
      }
    }

    @media only screen and (min-width: 1268px) {
      .cd {
        background-color: blue;
        height: 300px;
        width: 50%;
        margin-left: 100px;
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
<script>
  AOS.init();
</script>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger p-3">
    <div class="container-fluid">
      <div>
        <a class="nb navbar-brand text-light fs-4" href="#">Find Partner</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  <div class="container-fluid bg-danger">
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-6">
        <div style="margin-left: 90px;">
          <h1 class="text-light">You & Me together<br>forever</br></h1>
          <p class="text-light mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, fugit! Laboriosam
            omnis sint dolores ut
            blanditiis ducimus quidem cum eligendi ullam dolorum! Harum magnam explicabo voluptatem asperiores
            laboriosam, obcaecati culpa?</p>
          <button class="mt-5 btn bg-warning">Get Started </button>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6">
        <div id="carouselExampleIndicators" class="two carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
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

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 data-aos="fade-up" data-aos-offset="200">ABOUT <span class="text-danger">PARTNER</span> </h3><hr / class="w-25 m-auto">
        <!-- <div>
          <div> <img src="./images/img1.png" class="image-fluied" alt="" height="10px" width="200px"></div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-6 d-flex">
        <div style="margin-left: -10px;">
          <p> <button class="btn bg-warning">Find Partner,s </button>Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Mollitia enim, minima ullam sed laboriosam quas
            dolorum iusto nisi dolor aperiam, dolorem fuga odit quam ea asperiores vitae rem eum sunt!Lorem ipsum dolor
            sit, amet consectetur adipisicing elit. Mollitia enim, minima ullam sed laboriosam quas
            dolorum iusto nisi dolor aperiam, dolorem fuga odit quam ea asperiores vitae rem eum sunt!
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6 ">
        <div style="margin-left: -10px;">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Mollitia enim, minima ullam sed laboriosam quas
            dolorum iusto nisi dolor aperiam, dolorem fuga odit quam ea asperiores vitae rem eum sunt!Lorem ipsum dolor
            sit, amet consectetur adipisicing elit. Mollitia enim, minima ullam sed laboriosam quas
            dolorum iusto nisi dolor aperiam, dolorem fuga odit quam ea asperiores vitae rem eum sunt!
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3 text-center">
    <div class="row">
      <div class="col-lg-12">
        <h3>INTERNATIONAL HOST PROFILES</h3>
        <div> <img src="./images/img1.png" class="image-fluied" alt="" height="10px" width="200px"></div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid mt-5 bg-danger p-5">
    <div class="row" style="margin-left: 45px; margin-right: 45px;">
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-4.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-2.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-3.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-1.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-2.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6 text-center">
        <div class="card">
          <img class="card-img-top rounded-circle" src="./images/team-1.jpg" alt="Card image cap" height="150px"
            width="150px">
          <div class="card-body">
            <h2 class="card-title">Raza</h2>
            <p class="card-text">Age : 25</p>
            <a href="#" class="btn btn-outline-success">Pak</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-12 p-2">
        <ul class="pagination justify-content-center ">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid text-center p-3 three">
    <div class="row">
      <div class="col-lg-12">
        <h3>How To Pesonalized Matchings</h3>
        <div> <img src="./images/img1.png" class="image-fluied" alt="" height="10px" width="200px"></div>
      </div>
    </div>

    <div class="row mt-5 p-4" style="margin-left: 50px; margin-right: 50px;">
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <h3>Registration and verifcation</h3>
            <div> <img src="./images/under-heading.png" class="image-fluied" alt="" height="40px" width="200px"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni commodi tenetur quod, expedita quae
              inventore porro a mollitia, non illo recusandae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card" style="margin-bottom: -100px;">
          <div class="card-body">
            <h3>Creating your<br>Files</br></h3>
            <div> <img src="./images/under-heading.png" class="image-fluied" alt="" height="40px" width="200px"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni commodi tenetur quod,
              expedita quae
              inventore porro a mollitia, non illo recusandae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <h3>Now Chart<br>Start</br></h3>
            <div> <img src="./images/under-heading.png" class="image-fluied" alt="" height="40px" width="200px"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni commodi tenetur quod, expedita quae
              inventore porro a mollitia, non illo recusandae.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-5 four">
    <div class="row text-center">
      <h1>Our Packages</h1>
      <div class="col-lg-12">
        <div> <img src="./images/img1.png" class="image-fluied" alt="" height="10px" width="180px"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, reiciendis. Nostrum delectus cupiditate
          Veniam tempore magnam quae sequi.
        </p>
      </div>
    </div>
    <div class="row mt-5 p-4" style="margin-left: 55px; margin-right: 50px;">
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="text-warning">Free PLan</h1>
            <h2>$ 0</h2>
            <h4 class="text-primary">Per Month</h4>
            <h4>Quam adipiscing vitae proin</h4>
            <h4>Nec feugiat nisl pretium</h4>
            <h4>Nulla at volutpat diam utreea</h4>
            <h4>phareta massa ultrices</h4>
            <h4>massa ulterices mi quis hendrerit</h4>
            <button class="mt-5 btn bg-warning">Get Started </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card" style="margin-bottom: -100px;">
          <div class="card-body">
            <h1 class="text-warning">Peimum Plan</h1>
            <h2>$ 0</h2>
            <h4 class="text-primary">Per Month</h4>
            <h4>Quam adipiscing vitae proin</h4>
            <h4>Nec feugiat nisl pretium</h4>
            <h4>Nulla at volutpat diam utreea</h4>
            <h4>phareta massa ultrices</h4>
            <h4>massa ulterices mi quis hendrerit</h4>
            <button class="mt-5 btn bg-warning">Get Started </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="text-warning">Golden PLan</h1>
            <h2>$ 0</h2>
            <h4 class="text-primary">Per Month</h4>
            <h4>Quam adipiscing vitae proin</h4>
            <h4>Nec feugiat nisl pretium</h4>
            <h4>Nulla at volutpat diam utreea</h4>
            <h4>phareta massa ultrices</h4>
            <h4>massa ulterices mi quis hendrerit</h4>
            <button class="mt-5 btn bg-warning">Get Started </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container border border-primary p-5">
    <div class="row">
      <div class="col-lg-12">
        <form>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" id="Username" placeholder="">
            </div>
            <div class="form-group col-md-8 mt-3">
              <label for="inputEmail4">Email</label>
              <input type="text" class="form-control" id="Email" placeholder="">
            </div>
            <div class="form-group col-md-8 mt-3">
              <label for="inputPassword4">Password</label>
              <input type="text" class="form-control" id="Password" placeholder="">
            </div>
          </div>
          <div class="form-group col-md-8">
            <label for="inputAddress mt-3">Address</label>
            <input type="text" class="form-control" id="Address" placeholder="">
          </div>

          <div class="form-row">
            <div class="form-group col-md-8 mt-3">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="City">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8 mt-3">
              <label for="inputCity">Country</label>
              <input type="text" class="form-control" id="Country">
            </div>
          </div>
          <div>
            <select class="custom-select custom-select-lg mb-3 mt-3">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </form>
      </div>
    </div>
  </div>
  <div class="Footer">
    <div class="container-fluid mt-4 bg-danger text-light border border-primary">
      <div class="row" style="margin-left: 80px;">
        <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
          <div>
            <h2 class="text-warning">Find partner</h2>
            <h6 class="mt-3">A108 Adnan Street</h6>
            <h6 class="mt-3">New yark, NY 535022 </h6>
            <h6 class="mt-3">United States</h6>
            <h6 class="mt-4">Phone : +1 5589 55448 55</h6>
            <h6 class="mt-2">Email : info@example.com</h6>

          </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
          <div class="ms-5">
            <h3 class="text-warning">Useful Links</h3>
            <H6 class="mt-4">Home</H6>
            <h6 class="mt-4">About Us News</H6>
            <h6 class="mt-4">Services</H6>
            <H6 class="mt-4">Terms of service</H6>
            <h6 class="mt-4">Privacy policy</H6>

          </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6  mt-5 mb-3">
          <div class="ms-5">
            <h3 class="text-warning">Our service</h3>
            <h6 class="mt-3">Web design</h6>
            <h6 class="mt-3">Web development</h6>
            <h6 class="mt-3">Product Management</h6>
            <h6 class="mt-3">Marketing</h6>
            <h6 class="mt-3">Graphic Design</h6>

          </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 mt-5 mb-3">
          <div>
            <h3 class="text-warning">Social Networks</h3>
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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>