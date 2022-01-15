<?php include 'include/dbconnection.php'; 
controlMySessions(); 
?>
<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>pets</title>
   
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.css">
   <link rel="stylesheet" href="icofont/icofont.min.css">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
  <?php
  if(isset($_POST['searchproduct'])){
    $searchresult = search($conn);
  }
?>
<header>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form method="post" action="" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="searchinput" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="searchproduct" type="submit">Search</button>
    </form>
    <div class="cart">
        <div class="">
          <i class="icofont-shopping-cart"></i>
          <span class="count"><?php echo count($_SESSION['cart']); ?></span>
       
          <div class="cartitem">
            <ul>
              <?php $rc = count($_SESSION['cart']); 
                for ($x = 0; $x <= $rc; $x++) {
                  $result = getProductsingle($conn, $_SESSION['cart'][$x]);  
                           while($row = $result->fetch_assoc()) { ?> 
                           <li><img src="<?php echo $row["i_image"];?>" alt="" width="35px" height="auto"><a href=""><i data-key='<?php echo $x; ?>' class="icofont-ui-delete delete removeIcon"></i></a><h3><?php echo $row["i_title"];?></h3></li>   
                 <?php    }
                }
              ?>
            </ul>
          </div>
      
        </div>
    </div>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Log In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Log In</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sign In</a>
        </div>
      </li>
  </div>
</nav>
</div>
</header>