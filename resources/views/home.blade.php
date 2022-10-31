@extends('layout')
@section('content')
    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="/images/child-5445463.jpg" alt="" class="bd-placeholder-img" width="100%"
                        height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                {{-- <h1>HEAD</h1> --}}
                                <h3 class="text-white">Over 10.5million children with special needs in Nigeria do not have access to quality education</h3>
                                <p><a class="btn btn-lg btn-primary rounded-pill" href="#">Learn More</a></p>
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="/images/dub4.png" alt="" class="bd-placeholder-img" width="100%"
                        height="20%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777">
                        <div class="container">
                            <div class="carousel-caption">
                                <h3 class="text-white">We are a charity organization focused on creating a condusive learning environment for these children.</h3>
                                <p><a class="btn btn-lg btn-primary rounded-pill" href="#">Get Involved</a></p>
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="/images/done1.jpg" alt="" class="bd-placeholder-img" width="100%" height="70%"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h3 class="text-white">{something}</h3>
                            <p><a class="btn btn-lg btn-primary rounded-pill" href="#">Donate</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">HI</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">HELLO</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">



            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">HAED<span class="text-muted"> HEAD3 </span></h2>
                    <p class="lead">PUT STUFF HEAR 1</p>
                </div>
                <div class="col-md-5">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                    <img src="/images/dub.jpg" alt=""
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">HEAD5<span class="text-muted"> HEAD7 </span></h2>
                    <p class="lead">PUT STUFF HERE 6</p>
                </div>
                <div class="col-md-5 order-md-1">
                <img src="/images/bro4.jpeg" alt=""
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">HEAD 8 <span class="text-muted"> HEAD 44</span></h2>
                    <p class="lead">PUT STUFF HERE 9</p>
                </div>
                <div class="col-md-5">
                <img src="/images/bro5.jpeg" alt=""
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

            <!-- FORM FOR NEWSLETTER -->

            <div class="p-3 d-flex flex-column justify-content-center" id="newsletter">
                <h2 class="text-center">Sign Up For our Weekly Newsletter</h2>
                <form class="g-3">
                    <div class="mb-3">
                        {{-- <label for="name" class="form-label">Password</label> --}}
                        <input type="text" class="form-control w-50" id="fullname" name="fullname" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                      {{-- <label for="exampleInputEmail1" class="form-label">Email address</label> --}}
                      <input type="email" class="form-control w-50" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill">Receive Newsletter</button>
                  </form>
            </div>

            <!-- END OF FORM -->

        </div><!-- /.container -->
    @endsection
