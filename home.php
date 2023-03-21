<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<?php 
include'styles.php';
?>
</head>

<body>

<header>

   <nav class="navbar  fixed-left">
    <div class="container-fluid">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title"> <button1 type="button"  class="btn1"</button> Logout</h5>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-">
              <ul class="nav nav-pills">
              
              <li class="nav-item">
  <li><a class="nav-link active" aria-current="page" href="#">Home</a> </li>
   <li><a class="nav-link" href="services.php">Services</a> </li>
  <li> <a class="nav-link " href="#" >About</a> </li>
  <li> <a class="nav-link " href="#" >Gallery</a> </li>
  <li> <a class="nav-link " href="#" >Contact</a> </li>
</ul>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

 <main>

    <div class="leftside">

        <h3>Hello</h3>
        <h1>I am Hammad Shaikh</h1>
        <h2>Web Developer</h2>
        <a href="" class="btn1">Hire me</a>
        <a href="Contact.php" class="btn2" >Contact me</a>
        </div>
        </main>
        

</header>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>