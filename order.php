<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-SHOP</title>
        <link rel="stylesheet" href="bs/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
	<ul class="nav justify-content-end">

</ul>
	  <div class=" header p-3 mb-2 bg-dark text-white">

			<nav class="nav justify-content-end navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-store">Happy Shopping</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contract.php">Contract us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="registration.php">Registration</a>
        </li>
		<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit"><i class="fas fa-search"></i></button>
      </form>
		<li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt">Log Out</i></a>
        </li>
        <button type="submit" class="btn btn-light"><i class="fab fa-cc-visa"></i></button>
	   <button type="submit" class="btn btn-light"><i class="fab fa-cc-paypal"></i></button>
       <button type="submit" class="btn btn-light"><i class="fab fa-cc-mastercard"></i></button>
      </ul>
       
      </ul>
      

    </div>
  </div>
</nav>
<form class="row g-3">
    
  
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

    
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Place Order</button>
  </div>
</form>