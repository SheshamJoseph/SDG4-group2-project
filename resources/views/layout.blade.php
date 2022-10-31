<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>KidsWithNeeds</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel-rtl/">
    
    

    

<link href="/docs/5.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="/css/app.css">
<meta name="theme-color" content="#712cf9">


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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .carousel-item{
        background-image: "/images/children-reading.webp";
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="../carousel/carousel.rtl.css" rel="stylesheet">
</head>
<body>

            
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-white" aria-label="Third navbar example">
            <div class="container-fluid">
            <a class="navbar-brand text-dark" href=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <img src="{{asset('/public/images/logo1.jpeg')}}" width="100px" height="100px"> -->
            <div>
                    <a href="/"><img src="/images/logo2.jpg" alt="" width="70px" height="70px"></a>
            </div>
            
            <div class="collapse navbar-collapse text-dark d-flex justify-content-between" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0 text-dark ">
        
                <li class="nav-item text-dark">
                    <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item text-dark">
                    <a class="nav-link text-dark" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item text-dark">
                    <a class="nav-link text-dark" href="{{route('contact')}}">Contact us</a>
                </li>
                <li class="nav-item text-dark dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown" aria-expanded="false">Get Involved</a>
                    <ul class="dropdown-menu text-dark">
                    <li><a class="dropdown-item text-dark" href="{{route('volunteer')}}">Volunteer</a></li>
                    <li><a class="dropdown-item text-dark" href="{{route('partner')}}">Partner with us</a></li>
                    <li><a class="dropdown-item text-dark" href="{{route('newsletter')}}">Sign up for our newsletter</a></li>
                    <!-- <li><a class="dropdown-item text-dark" href="#"></a></li> -->
                    </ul>
                </li>
                </ul>
                <a href="/donate"><button type="button" class="btn btn-outline-primary rounded-pill"> Donate</button></a>
            </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <!-- FOOTER -->
    <footer class="container d-flex bg-blue w-100">
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/"><img src="/images/logo2.jpg" alt="" width="70px" height="70px"></a>
            <p class="text-muted">&copy; 2022</p>
          </div>
      
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="/about-us" class="nav-link p-0 text-muted">About Us</a></li>
              <li class="nav-item mb-2"><a href="/contact-us" class="nav-link p-0 text-muted">Contact</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Partner</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Volunteer</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5 class="text-center">Our Socials</h5>
            <ul class="nav justify-content-around list-unstyled d-flex flex-row">
              <li class="ms-3"><a class="text-muted" href="www.facebook.com"><img src="/images/facebook.svg" alt="Facebook" height="24" width="24"></a></li>
              <li class="ms-3"><a class="text-muted" href="www.twitter.com"><img src="/images/twitter.svg" alt="Twitter" height="24" width="24"></a></li>
              <li class="ms-3"><a class="text-muted" href="wwww.instagram.com"><img src="/images/instagram.svg" alt="Instagram" height="24" width="24"></a></li>
            </ul>
          </div>
        </footer>
      </div>
    </footer>
    </main>

   

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>