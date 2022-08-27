@include('layouts.app')
<body class="bg-white container-fluid antialiased">
	<!-- Navbar -->
    <nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar bg-light">
    	<div class="container-fluid">
        	<a class="navbar-brand">
          		<img src="{{asset('img/homepage/logo_equiz_no_text.png')}}">
          		<img class="logo"/> Spaper
        	</a>
    	</div>
    </nav>
	<!-- End Navbar -->

	<!-- Hero section -->
	<section id="hero">
		<div class="container">
			<div class="row">
				<div class="col smol">
					<h1>Welcome to<br>Spaper</h1>
					<p>Created from a single passionate developer to bring the best quiz system to create a better solution for the students studying from home, or anywhere in the world.</p>
					<a class="btn btn-dark btn-large" href="/login" style="max-width: 50%; border-radius: 50px !important;">
						Login
					</a>
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
              		<p>As a developer, I am motivated and striving to create a completely flexible and a good system environment for the teachers and students to work with.</p>
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
					<h1>Spaper</h1>
					<h5>A quiz web application - created by former PSMZA student.</h5>
					<p>*Art by Lina Leusenko</p>
				</div>
          	</div>
      	</div>
	</section>
	<!-- End Contact section -->
</body>

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

@media (max-width: 768px) {
    .smol {
        margin-top: 15%;
    }
}
</style>