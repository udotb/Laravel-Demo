<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Udotb</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/welcome">Udotb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">About</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="/crud">Add a Note</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="mx-4">
        <a class="btn btn-success" href="/new-login">Login</a>
        <a class="btn btn-success" href="/new-register">Register</a>
    </div>


</nav>
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div>

                        Email <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div>

                        Password <input type="password" class="form-control" placeholder="Password">
                    </div><br>



                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>

                    <div>
                        Name<input type="text" class="form-control" placeholder="Enter Name">
                        Email<input type="email" class="form-control" placeholder="Enter Email">
                        Contact Number<input type="number" class="form-control" placeholder="Enter Contact Number">
                        City<input type="text" class="form-control" placeholder="Enter City">
                        Country<input type="text" class="form-control" placeholder="Enter Country">

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">

    <div class="row featurette d-flex justify-content-center align-items-center">

        <div class="col-md-7">

            <h2 class="featurette-heading">Android Devices. <span class="text-muted">Mobile Phones.</span></h2>
            <p class="lead">Android has been the best-selling OS worldwide on smartphones since 2011 and on tablets since 2013. As of May 2017, it has over two billion monthly active users, the largest installed base of any operating system, and as of August 2020, the Google
                Play Store features over 3 million apps.[15] The current stable version is Android 11, released on September 8, 2020..</p>

        </div>
        <div class="col-md-5 order-md-2">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" src="https://source.unsplash.com/500x700/?ios"></img>
        </div>

    </div>

    <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7 order-md-1 my-8">
            <h2 class="featurette-heading">IoS Devices. <span class="text-muted">Mobile Phones.</span></h2>
            <p class="lead">The iPhone is a line of touchscreen-based smartphones designed and marketed by Apple Inc.
                that use Apple's iOS mobile operating system. The first-generation iPhone was announced by Apple co-founder Steve Jobs on January 9, 2007. Since then Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than 2.2 billion iPhones had been sold.</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" src="https://source.unsplash.com/500x700/?sql,pc"></img>
        </div>
    </div>

    <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7 my-8">
            <h2 class="featurette-heading">IoS Devices. <span class="text-muted">Macbooks.</span></h2>
            <p class="lead">The MacBook family was initially housed in designs similar to the iBook and PowerBook lines
                which preceded them, now making use of a unibody aluminum construction first introduced with the MacBook Air. This new construction also has a black plastic keyboard that was first used on the MacBook Air, which itself was inspired by the sunken keyboard of the original polycarbonate MacBooks. The now standardized keyboard brings congruity to the MacBook line, with black keys on a metallic aluminum body..</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" src="https://source.unsplash.com/500x700/?php,database"></img>
        </div>
    </div>


</div>

<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2020 Company, Udotb Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer><!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
