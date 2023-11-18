<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apollo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="{{asset('../css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navcol">
        <a href="" class="navbar-brand">
            <img src="{{asset('../images/apollo2.jpg')}}" height="70" width="100" alt="">
        </a>
        <h5 class="font-weight-bold">Apollo Store </h5>
        <button class="navbar-toggler navbar-dark" data-target="#nav" data-toggle="collapse" aria-controls="nav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <form action="" class="form-inline m-auto"><i class="fa fa-search"></i>
                <input type="search" placeholder="Search medicine & weallness products" name="" id="" class="form-control mx-2 my-2 search">
                <input type="submit" value="Search" class="btn btn-light mx-2 my-2 clicksearch">
            </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
           <a href="{{url('/consult')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-medkit "></i> consult</a></i>
            </li>
            <li class="nav-item">
                <a href="{{url('/pharmacy')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-heartbeat"></i> Pharmacy</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/labtest')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-flask"></i> Lab Test</a>
            </li>
           
            <li class="nav-item">
                <a href="{{url('/uploadd')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-upload"></i> Upload</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/register')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-user"></i> Sign Up</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/signin')}}" class="nav-link font-weight-bold border-bottom m-1"><i class="fa fa-user"></i> Sign In</a>
            </li>
           
        </ul>
    </div>
</nav>



<nav class="navbar navbar-expand-lg  navcol">
    <button class="navbar-toggler navbar-dark" data-target="#navv" data-toggle="collapse" aria-controls="nav" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navv">
    <ul class="navbar-nav m-auto">
        <li class="nav-item ml-5">
       <a href="{{url('/consult')}}" class="nav-link font-weight-bold "><i class="fa fa-tablet"></i> Medicine</a></i>
        </li>
        <li class="nav-item ml-5">
            <a href="{{url('/pharmacy')}}" class="nav-link font-weight-bold"><i class="fa fa-stethoscope"></i> Wellness</a>
        </li>
        <li class="nav-item ml-5">
            <a href="{{url('/insurance')}}" class="nav-link font-weight-bold"><i class="fa fa-heart"></i> Beauty</a>
        </li>
        <li class="nav-item ml-5">
            <a href="{{url('/upload')}}" class="nav-link font-weight-bold"><i class="fa fa-user-md"></i> Health Corner</a>
        </li>
    </ul>
</div>
</nav>


<div class="spann ml-2 pl-5 pt-3 pb-3">
    <a href="{{url('/covidessentials')}}"><span>COVID Essentials</span></a>
    <a href="{{url('/diabetes')}}"><span class="pl-3">Diabetes</span></a>
    <a href="{{url('/veterinary')}}"><span class="pl-3">Veterinary</span></a>
    <a href="{{url('/eyeWear')}}"><span class="pl-3">EyeWear</span></a>
    <a href="{{url('/ayush')}}"><span class="pl-3">Ayush</span></a>
    <a href="{{url('/ayurvedic')}}"><span class="pl-3">Ayurvedic</span></a>
    <a href="{{url('/homeopathy')}}"><span class="pl-3">Homeopathy</span></a>
    <a href="{{url('/fitness')}}"><span class="pl-3">Fitness</span></a>
    <a href="{{url('/mom&baby')}}"><span class="pl-3">Mom & Baby</span></a>
    <a href="{{url('/devices')}}"><span class="pl-3">Devices</span></a>
    <a href="{{url('/sergical')}}"><span class="pl-3">Sergical</span>
    <a href="{{url('/sexualwellness')}}"><span class="pl-3">Sexual Wellness</span></a>
    <a href="{{url('/treatment')}}"><span class="pl-3">Treatment</span></a>
</div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('../images/bannerdr.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../images/medb.png')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../images/sliderr3.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../images/dr.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../images/inject.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-3 drop ">
            <img src="{{asset('../images/drop.jpg')}}" class="card-image-top" alt="">
            <div class="card-body">
                <h2 class="card-title-center">...</h2>
                <p class="card-text text-center">Lorem ipsu Minima sequi aper</p>
                <h5 class="text-center">$50,15</h5>
                <div class="star text-center">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                </div>
                <div class="btn">
                    <button tyupe="button">Add <i></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-3 drop">
            <img src="{{asset('../images/dexorange1.jpg')}}" class="card-image-top" alt="">
            <div class="card-body">
                <h2 class="card-title-center">....</h2>
                <p class="card-text text-center">Lorem ipsu Minima sequi aper</p>
                <h5 class="text-center">$50,15</h5>
                <div class="star text-center">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                </div>
                <div class="btn">
                    <button tyupe="button">Add <i></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-3 drop">
            <img src="{{asset('../images/cypl.jpg')}}" class="card-image-top" alt="">
            <div class="card-body">
                <h2 class="card-title-center">....</h2>
                <p class="card-text text-center">Lorem ipsu Minima sequi aper</p>
                <h5 class="text-center">$50,15</h5>
                <div class="star text-center">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                </div>
                <div class="btn">
                    <button tyupe="button">Add <i></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-3 drop">
            <img src="{{asset('../images/bp.webp')}}" class="card-image-top" alt="">
            <div class="card-body">
                <h2 class="card-title-center">....</h2>
                <p class="card-text text-center">Lorem ipsu Minima sequi aper</p>
                <h5 class="text-center">$50,15</h5>
                <div class="star text-center">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                </div>
                <div class="btn">
                    <button tyupe="button">Add <i></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>