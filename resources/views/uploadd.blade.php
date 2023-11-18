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
        <h5 class="">Apollo Store </h5>
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

<div class="spann ml-2 pl-5 pt-3 pb-3 ">
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
{{-- Main Portion of upload page --}}


<section class="container-fluid container-bg text-white shadoww">

    <h1 class="text-center font-weight-bold display-4 pt-5">Upload Prescription</h1>
    <div class="row pt-5">
        <div class="col-lg-6 col-sm-12 p-5 pt-4">
                <h3 class="pl-5 text-center font-weight-bold">Visit Here :</h3>
                <p class="pl-5"><span class="font-weight-bold">Head Office :- </span>    Usmanpur Colony, Saket Nagar, Kanpur</p>
                <p class="pl-5"><span class="font-weight-bold">Branch Office :- </span>    Lakhanpur,Near GT Road, Kanpur</p>
                <p class="pl-5"><span class="font-weight-bold">Contact :- </span> <a href="tel:7905670712">   +91-7905670712</a>, <a href="tel:9369094406">+91-9369094406</a></p>
                <p class="pl-5"><span class="font-weight-bold">Email :- </span> <a href="mailto:info@apollostore.com">   info@apollostore.com</a></p>
                
        </div>
        <div class="col-lg-6 col-sm-12 border p-3">
            <form action="{{url('/prescription')}}" enctype="multipart/form-data" method="post" class="form p-5">
                @csrf
                <h2 class="text-center font-weight-bold">Prescription</h2>
                <div class="form-group font-weight-bold">
                    <label for="">Name*</label>
                    <input type="text" name="name" id="" class="form-control font-weight-bold" placeholder="Enter Name Here*" required>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="">Email*</label>
                    <input type="email" name="email" id="" class="form-control font-weight-bold" placeholder="Enter Email Here*" required>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="">Contact*</label>
                    <input type="number" name="contact" id="" class="form-control font-weight-bold" placeholder="Enter Contact Here*" required>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="">Upload Prescription File*</label>
                    <input type="file" name="file" id="" class="form-control font-weight-bold" required>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="">Message*</label>
                    <textarea class="form-control font-weight-bold" name="message" placeholder="Enter Your Message*" required></textarea>
                </div>
                <div class="form-group ">
                    <button class="btn-info font-weight-bold">Upload Click</button>
                    <p>
                        @if(session()->has('msg'))
                        {{session()->get('msg')}}
                        @endif
                    </p>
                </div>
            </form>
            </div>
    </div>
</section>
</body>
</html>