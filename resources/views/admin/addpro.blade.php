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
                  <a class="dropdown-item fa fa-tasks font-weight-bold" href="">Manage Product</a>
                </div>
              </li>
              <li class="nav-item ml-5 dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold fa fa-product-hunt" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
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
  

<div class="row">
<div class="container pb-5 pt-4">
    <div class="col-sm-12 col-lg-6 m-auto border pt-2">
        <form action="{{url('/addprod')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center font-weight-bold pb-3"><i class="fa fa font-weight-bold">Add Product</i></h1>
            <div class="form-group ">
                <label><h6 class="fa fa font-weight-bold">Product Name</h6></label>
                <input type="text" name="productn" placeholder="Enter Product Name" class="form-control">
            </div>
            <div class="form-group">
              <label><h6 class="fa fa font-weight-bold">Price</h6></label>
              <input type="text" name="price" placeholder="Enter Product Price" class="form-control">
          </div>
          <div class="form-group">
            <label><h6 class="fa fa font-weight-bold">Quantitiy</h6></label>
            <input type="text" name="quantity" placeholder="Enter Product Quantitiy" class="form-control">
        </div>
        <div class="form-group ">
          <label><h6 class="fa fa font-weight-bold">image</h6></label>
          <input type="file" name="image"  class="form-control">
      </div>
      <div class="form-group ">
        <label><h6 class="fa fa font-weight-bold">Product Description</h6></label>
<textarea name="productdes" class="form-control" placeholder="Product Description"></textarea>    
     </div>

    <div class="form-group ">
      <input type="submit" name="submit" placeholder="Now Submit" class="form-control">
  </div>
  @if(session()->has('msg'))
  {{session()->get('msg')}}
@endif
        </form>
    </div>
</div>
</div>



</body>
</html>