
<?php 

   $a=["total_marks"=>130,"total_fail"=>4,"total_grade"=>"A+"];
   $b=["total_marks"=>130,"total_fail"=>5,"total_grade"=>"A"];

   $result=array_merge($a,$b);
   echo "<pre>";
   print_r( $result); 
   echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <style>
        /* table{
            width:100% !important;
        } */
         
        table th,td{
            width:2px !important;
            /* padding:0px !important; */
            border:1px solid  black;
        }

        .box1,.box2{
            /* height:200px;
            width:200px; */
        }
        .box-0{
            height:400px;
        }
        .box-4{
            width:500px;
            height:500px;
        }
        .box7{
            width:100px;
            height:100px;
        }
        .box5{
            width:800px;
            height:800px;
        }
        
    </style>
    <title>Document</title>
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Printers</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Computers
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gadgets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mobiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Electronics</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div style="height:600px;" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="height:100%;">
    <div class="carousel-item active bg-info">
      <!-- <img src="./images/slider-1.jpg" class="d-block img-responsive w-75 h-100 mx-auto" alt="..."> -->
      <div class="w-100 h-75 bg-center d-flex align-items-center justify-content-center flex-column" style="background-image:url('./images/slider-1.jpg');background-size:cover;background-position:center;">
        <h1 class="text-light text-center">Do you want to buy?</h1>
        <p class="text-center">Come to Blaze Ecommerce</p>
        <div>
          <button class="btn btn-danger">Buy Now</button>
          <button class="btn btn-success">Add to Cart</button>
        </div>
      </div>
      
    </div>
    <div class="carousel-item bg-info">
      <img src="./images/slider-2.jpg" class="d-block w-75   img-responsive  h-100 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<script>
   $('#mytoast').toast({delay:5000});
  $('#mytoast').toast("show");
</script>
</body>
</html>