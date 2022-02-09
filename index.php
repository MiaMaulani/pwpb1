<?php
require 'functions.php';
$user2 = mysqli_fetch_assoc($hasil);
$about2 = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #17a589">
      <div class="container">
        <a class="navbar-brand" href="#">Miaa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron-->
    <div class="jumbotron text-center">
      <img src="azmi.jpeg" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><?= $user2 ["nama"];?></h1>
      <p class="lead">Programer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,288L30,293.3C60,299,120,309,180,282.7C240,256,300,192,360,165.3C420,139,480,149,540,165.3C600,181,660,203,720,192C780,181,840,139,900,133.3C960,128,1020,160,1080,192C1140,224,1200,256,1260,229.3C1320,203,1380,117,1410,74.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- Akhir Jumbotron-->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4">
          <p><?= $about2 ["coloumn1"];?></p>
        </div>
        <div class="col-sm-4">
          <p><?= $about2 ["coloumn2"];?></p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#48C9B0 "
          fill-opacity="1"
          d="M0,288L30,293.3C60,299,120,309,180,282.7C240,256,300,192,360,165.3C420,139,480,149,540,165.3C600,181,660,203,720,192C780,181,840,139,900,133.3C960,128,1020,160,1080,192C1140,224,1200,256,1260,229.3C1320,203,1380,117,1410,74.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->
    <!-- project -->
    <section id="project">
      <div class="container">
        <div class="row text-center">
          <h2>Project</h2>
        </div>

        <div class="row justify-content-center fs-5">
          <div class="col-sm-4">
            <div class="card">
              <img src="nurul.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Hallo gayssssss</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <img src="z.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Akuu miamaulani </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <img src="r.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Terimakasih</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,288L30,293.3C60,299,120,309,180,282.7C240,256,300,192,360,165.3C420,139,480,149,540,165.3C600,181,660,203,720,192C780,181,840,139,900,133.3C960,128,1020,160,1080,192C1140,224,1200,256,1260,229.3C1320,203,1380,117,1410,74.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->
    <!-- contact -->
    <section id="contact">
      <div class="contrainer tp-5">
        <div class="row text-center">
          <h2>contact</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-6">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="password" class="form-control" id="exampleInputPassword1" />
              </div>
              <div class="mb-3">
                <label for="floatingTextarea2">Pesan</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#17a589"
          fill-opacity="1"
          d="M0,288L24,288C48,288,96,288,144,272C192,256,240,224,288,192C336,160,384,128,432,128C480,128,528,160,576,160C624,160,672,128,720,101.3C768,75,816,53,864,42.7C912,32,960,32,1008,48C1056,64,1104,96,1152,133.3C1200,171,1248,213,1296,224C1344,235,1392,213,1416,202.7L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir contact-->
    <footer class="text-center text white" style="background-color: #17a589">
      <p>created by <i class="bi bi-facebook"></i> <a href="">miamaulani</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
