<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('Bootstrap v3.1.1/js/carousel.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
 
 <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('Bootstrap v3.1.1/css/welcome.css') }}">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link rel="stylesheet" href="">
    
    
   <title>Gestion Des Etudiants du CTI</title>
   <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link rel="stylesheet" href="">


<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

      <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


        <!-- css d'une partie du carousel -->

         <style>
        .carousel-item{
            color:FFF;
            font-weight: bold;
            max-height: 450px;
            text-align: left;
            opacity: ;

        }
        h5{
            font-size: 52px;
            color: #fd7e14;

        }
        p{
            font-size: 30px;
            color: black;
        }

        .visually-hidden{

            color: grey;
        }
    </style>
    </head>



           
   
 <!-- Custom styles for this template -->
   
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

        @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="navbar-brand" class="navbar-brand"  data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="navbar-brand"  data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"></a>
                        &emsp;&emsp;&emsp;&emsp;

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-brand" class="navbar-brand"  data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"></a>
                        @endif
                    @endauth
                
            @endif

      <a class="navbar-brand" href="{{ route('register') }}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ asset('/students') }}">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=""></a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>





  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  
    <!-- slider area start here -->

 
<body>

    <!-- slider area start here -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('Bootstrap v3.1.1/images/e.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cours Intensifs D'anglais.</h5>
            <p>Choisissez votre cours d’Anglais en fonction de vos objectifs.</p>
            <button type="" class="btn btn-danger">Learn More</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('Bootstrap v3.1.1/images/d.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cours Intensifs D'allemand.</h5>
            <p>Parlez couramment Allemand en 6 mois de cours et réussissez votre ZDaf avec brio.</p>
            <button type="" class="btn btn-danger">Learn More</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('Bootstrap v3.1.1/images/b.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cours Intensifs D'italien.</h5>
            <p>Parlez couramment l'italien en 6 mois, apprenez la culture italienne.</p>
            <button type="" class="btn btn-danger">Learn More</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>



    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>




 <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">GERMAN</h4>
          </div>
          <div class="card-body">
            
             <p>. Nos cours d’Allemand vous préparent aux différentes certifications telles que le ZDaf, le TestDaf.</p>
            <button type="button" class="w-100 btn btn-lg btn-success">View page</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">ENGLISH</h4>
          </div>
          <div class="card-body">
            <p>Nos cours d'Anglais répondent à vos besoins. Nous vous proposons quatre solutions différentes correspondant à vos multiples objectifs.   

        </p>
            
            <button type="button" class="w-100 btn btn-lg btn-success">View page</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">ITALIAN</h4>
          </div>
          <div class="card-body">
            <p>Parlez couramment l'italien en 6 mois, apprenez la culture italienne. </p>
            
            <button type="button" class="w-100 btn btn-lg btn-success">View page</button>
          </div>
        </div>
      </div>
    </div>
 <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="custom-cards">
    <h3 class="pb-2 border-bottom">our language tests</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">English test</h2>
              <p style="font-size: 18px; color: white;">IELTS  </p>  </br>
              <p style="font-size: 18px; color: white;">TOEFL  </p>   </br>
               <p style="font-size: 18px; color: white;">TOEIC </p> </br>
            
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
               
              </li>
              <li class="d-flex align-items-center me-3">
                
              </li>
              <li class="d-flex align-items-center">
                
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">German test  </h2>
            <p style="font-size: 18px; color: white;">Test DaF  </p>  </br>
              <p style="font-size: 18px; color: white;">Le Zertifikat Deutsch für den Beruf (ZDfB) </p>   </br>
               <p style="font-size: 18px; color: white;">DSH (Deutsche Sprachprüfung für den Hochschulzugang) </p> </br>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
               
              </li>
              <li class="d-flex align-items-center">
               
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
               
              </li>
              <li class="d-flex align-items-center me-3">
               
              </li>
              <li class="d-flex align-items-center">
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
        </style>

    </body>

     <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Liens Utiles</h1>
      <div class="col-lg-6 mx-auto">
        <p style="font-size: 18px; color: white;">Grâce à nos partenaires (organismes et universités) installés en Allemagne, nous vous accompagnons également dans votre procédure d’obtension du visa, à travers plusieurs de nos services : </br></br>

          
             <p style="font-size: 14px; color: white;">Préinscription dans les universités en Allemagne  </p>  </br>
              <p style="font-size: 14px; color: white;">Cours d’allemand médical et placement des infirmiers  </p>   </br>
               <p style="font-size: 14px; color: white;">N'hésitez pas à nous contacter pour vous accompagne  </p> </br>
              
            

        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"> <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a></button>
          <button type="button" class="btn btn-outline-light btn-lg px-4"> <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a></button>
        </div>
      </div>
    </div>
  </div>
</html>
