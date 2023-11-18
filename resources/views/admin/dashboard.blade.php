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
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-product-hunt" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Product
                </a>
                <div class="dropdown-menu bg-dark">
                  <a class="dropdown-item fa fa-plus font-weight-bold pb-2 pt-2" href="addpro">Add Product</a>
                  <a class="dropdown-item fa fa-tasks font-weight-bold" href="managepro">Manage Product</a>
                </div>
              </li>
              <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-product-hunt fa fa-bell" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Order
                </a>
                <div class="dropdown-menu bg-dark">
                  <a class="dropdown-item fa fa-eye font-weight-bold pb-2 pt-2" href="#">View Order</a>
                  <a class="dropdown-item fa fa-edit font-weight-bold" href="#">Order Updation</a>
                </div>
              </li>
              <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-file" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Bill Generate
                </a>
              </li>

              <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-user" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  View users
                </a>
                <div class="dropdown-menu bg-dark">
                  <a class="dropdown-item fa fa-edit font-weight-bold pb-2 pt-2" href="#">Manage users</a>
                </div>
              </li>

             <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-gear" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Settting
                  </a>
                  <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item fa fa-edit font-weight-bold pb-2 pt-2" href="">Change Password</a>
                    <a class="dropdown-item fa fa-edit font-weight-bold pb-2 pt-2" href="">Change Profile</a>
                  </div>            
                </li>
        <li class="nav-item ml-5">
            <a class="nav-line font-weight-bold fa fa-sign-out pt-2" href="#" role="button" aria-expanded="false">
                LogOut
              </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
  <div class="row">
        @foreach($data as $d)
          <div class="col-lg-3 col-sm-6">            
                <div class="card-deck p-5">
                  <div class="card p-2">
                    <img class="card-img-top" src="{{asset('storage/app/'.$d['image'])}}" alt="Card image cap"> 
                    <div class="card-body">
                      <h5 class="card-title">{{$d['proname']}}</h5>
                      <p class="card-text">{{$d['price']}}</p>
                      <a href="" class="btn btn-outline-info">Add Cart</a>
                    </div>
                  </div>
                </div>
          </div>
        @endforeach
  </div>
</div>
</body>
</html>