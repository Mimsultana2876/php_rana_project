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
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Resort</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="contact.php">contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
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
</body>
</html>