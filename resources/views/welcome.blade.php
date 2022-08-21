<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<!DOCTYPE html>

<!-- @@@@@@@@@@please remember artist for vector art is Lina Leusenko -->
<html>
    <head>
    {{-- <link rel="icon" href="..\..\public\assets\homepage\logo_equiz_no_text_smallest.png">    --}}
    {{-- <link rel="icon" href="../../public/assets/homepage/logo_equiz_no_text_smallest.png">    --}}
    <title>E-Quiz</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">
              <img src="{{asset('img/homepage/logo_equiz_no_text.png')}}">
              <img class="logo"/> E-Quiz
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bi bi-eye-fill"><b></b></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Admin</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <!-- End Navbar -->
    
        <!-- Hero section -->
        <section id="hero">
        <div class="container">
            <div class="row">
            <div class="col">
                <h1>Welcome to<br>E-Quiz System</h1>
                <p>Created from a single passionate developer to bring the best quiz system to create a better solution for the students studying from home, or anywhere in the world.</p>
                <button type="button" class="btn btn-dark btn-large" href="/login" id="btnlogin">Login</button>
            </div>
            <div class="col img-col">
                <img src={{asset("/img/homepage/hero-img.png")}} class="img-fluid" alt="Software Development" style="width:400px;">
            </div>
            </div>

            <div class="row cards">

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Flexibility</h5>
                        <p class="card-text">Gives both students and teachers complete flexibility in creating and answering quizzes.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Performance</h5>
                        <p class="card-text">Lightweight, and extremely fast for older PC or mobile phones, so every users can have blazing fast access on the system.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Security</h5>
                        <p class="card-text">Good security applied, so plagiarism will not happen often on the system.</p>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        </section>
        <!-- End Hero section -->

        <!-- About us section -->
        <section id="about-us">
        <div class="container">
            <div class="row align-items-center">
            <div class="col">
                <img src="{{asset('img/homepage/about-us.png')}}" class="img-fluid" alt="About Us">
            </div>
            <div class="col text-col">
                <h1>About Us</h1>
                <p>As a developer, we are motivated and striving to create a completely flexible and a good system environment for the teachers and students to work with.</p>
            </div>
            </div>
        </div>
        </section>
        <!-- End About us section -->

        <!-- Contact section -->
        <section id="contact">
        <div class="container">
            <div class="row align-items-center">
            <div class="col">
                <h1>Personal Project</h1>
                <h5>E-Quiz</h5>
                <p>Falaqin</p>
            </div>
            </div>
        </div>
        </section>
        <!-- End Contact section -->
    </body>
</html>

<style>
    body {
    display: block;
    overflow-x: hidden;
  }
  .navbar-brand img {
    max-height: 50px;
  }
  .navbar-brand {
    font-size: 24px;
    text-transform: uppercase;
    font-weight: 900;
    color: #683aa4;
  }
  nav ul li a {
    color: #a9a9a9;
    font-size: 22px;
    margin: auto 10px;
  }
  nav ul li a:hover {
    color: #683aa4;
  }

  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  section h1 {
    text-transform: uppercase;
    font-weight: 900;
    color: #683aa4;
    text-align: left;
    margin-bottom: 20px;
  }
  section p {
    font-size: 16px;
    font-weight: 300;
  }
  button {
    max-width: 50%;
    border-radius: 50px !important;
  }
  #hero .col {
    justify-content: center; 
    flex-direction: column;
    display: flex;
  }
  #hero .img-col {
    justify-content: flex-end; 
    margin-top: 100px;
  }
  #hero img {
    max-width: 130% !important;
    width: 130%;
  }
  #hero .card {
    box-shadow: 11px 7px 16px #f9f9f9;
    border: 0;
    text-align: center;
  }
  #hero .icon {
    width: 50px;
    height: 50px;
    margin-bottom: 20px;
  }

  #contact {
    text-align: center;
    background-color: #683aa4;
    color: white;
  }
  #contact h1 {
    text-align: center;
    color: white;
  }
</style>