<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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


<section class="container-signin pb-5 pt-5 border">
    
        <div class="col-lg-5 col-sm-12 m-auto pt-4 border border-form">
            <h1 class="text-white text-center"><li><i class="fa fa-user  font-weight-bold"> Login User</i></li><h1></h1>
            <form action="{{url('/signing')}}" method="post" class="container">
                @csrf
                <div class="form-group text-white font-weight-bold">
                    <label for="" class="fa fa font-weight-bold">Email / User id</label>
                    <input type="text" name="uid" id="" placeholder="Enter user id" class="form-control fa fa">
                </div>
                <div class="form-group text-white font-weight-bold">
                    <label for="" class="fa fa font-weight-bold">Password</label>
                    <input type="password" name="password" placeholder="Enter password" id="" class="form-control fa fa">
                </div>
                <div class="form-group">
                <button class="btn btn-info font-weight-bold fa fa">Login</button><br>
                </div>
                <div class="form-group forgotpassword">
                    <div class="row">
                        <div class="col-lg-6 col">
                            <a href="forgotpas" class="font-weight-bold forgotpass">Forgot Password ?</a>
                     
                        </div>
                        <div class="col-lg-6 col registernow">    
                       <a href="register" class="pl-5 font-weight-bold pl-5 registernow">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <p>
                        @if(session()->has('message'))
                        {{session()->get('message')}}
                        @endif
                    </p>
                </div>
            </form>
        </div>
    
</section>

    
</body>
</html>