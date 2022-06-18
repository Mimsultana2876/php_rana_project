<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php  include 'manu.php'?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2" ></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/rana.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Rana Resort</h3>
        <p>It has such a great Resort in Bangladesh!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/rana1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Khulna</h3>
        <p>Thank you, Rana!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/resort2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>We love resort</h3>
        <p>We love the Resort!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">About us</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/mim14.jpg" class="img-fluid" aboutimg>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>Rana Resort</h2>
            <p class="py-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
                Why do we use it?



            </p>
            <a href="http://ranaresortbd.com/"terget="blank">Check More</a>
        </div>

  </div>


  </div>
  
</section>
<section class="my-5">
  <div class="py-5">
        <h3 class="text-center">Our Services</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                      <img class="card-img-top" src="images/nuba24.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Family frindly</h4>
                            <p class="card-text">we are give the best services for our client</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                   </div>
            
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                      <img class="card-img-top" src="images/nuba24.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Family frindly</h4>
                            <p class="card-text">we are give the best services for our client</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                   </div>
            
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                      <img class="card-img-top" src="images/nuba24.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Family frindly</h4>
                            <p class="card-text">we are give the best services for our client</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                   </div>
            
                </div>
            </div>
        </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
        <h3 class="text-center">Gallery</h3>
  </div> 
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/nuba20.jpg" class="img-fluid pb-2" >

            </div>

      </div>
  </div>    
</section>

<section class="my-5">
  <div class="py-5">
        <h3 class="text-center">Contact</h3>
  </div> 
  <div class="w-50 m-auto">
      <form action="user_info.php" method="post">
          <div class="form-group">
              <label>User Name</label>
              <input type="text" name="u_name" autocomplete="off"  class="form-control">

          </div>
          <div class="form-group">
              <label>User Email</label>
              <input type="text" name="u_email" autocomplete="off"  class="form-control">

          </div>
          <div class="form-group">
              <label>User Mobile</label>
              <input type="text" name="u_mobile" autocomplete="off" vlaue="<?php $u_mobile ?>" class="form-control">

          </div>
          <div class="form-group">
              <label>User city</label>
              <input type="text" name="u_city" autocomplete="off" vlaue="u_city" class="form-control">

          </div>
          <div class="form-group">
              <label>User comments</label>
              <textarea class="form-control" name="u_comments" vlaue="u_comments"></textarea>

          </div>
          <button type="submit" class="btn btn-success" name="submit">click now</button>
      </form>
  </div>
</section>


  <p class="footer">@ranaresort.com</p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>