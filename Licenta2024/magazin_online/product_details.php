<!-- connect file -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produse Locale </title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    

    <!-- css file -->
    <link rel="stylesheet" href="#">
    <style> 
    .logo{
    width: 7%;
    height: 7%;
}
    body{
        overflow-x: hidden;
          
    }

    </style>


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <img src="./images/logo5.png" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white"  href="index.php">Acasa <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="display_all.php"> Produse </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./users_area/user_registration.php"
        > Inregistrare </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./users_area/profile.php"
        > Contul Meu </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>
          <?php cart_item(); ?> </sup> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"> Pret: <?php echo"Lei ".total_cart_price().""; ?> /- </a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search_product.php"
    method="get">
      <input class="form-control mr-sm-2 text-warning" type="search" placeholder="Cauta" 
      aria-label="Search" name="search_data">
      <input type="submit" value="Cauta" class="btn btn-outline-light"
      name="search_data_product">
    </form>
  </div>
</nav>


    <!-- calling cart function -->
    <?php
    cart();    
    ?>  

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white text-warning">
      <ul class="navbar-nav me-auto">


    <?php 
    if(!isset($_SESSION['username'])){
      echo"
        <li class='nav-item'>
          <a class='nav-link text-warning' href='#'> Bine ai Venit </a> 
        </li> ";
      } else {
        echo "
        <li class='nav-item'>
        <a class='nav-link text-warning' href='#'> Bine ai Venit 
        ".$_SESSION['username']."</a> 
      </li> "; 
      }

    if(!isset($_SESSION['username'])){
      echo"
      <li class='nav-item'>
          <a class='nav-link text-warning' href='./users_area/user_login.php'> Autentificare </a> 
        </li> ";
      } else {
        echo "
        <li class='nav-item'>
        <a class='nav-link text-warning' href='./users_area/logout.php'> Deconectare </a> 
      </li> "; 
      }
    ?>

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-warning text-white">
      <h3 class="text-center"> Magazin Online cu Produse Locale </h3>
    </div>


    <!-- fourth child -->
  <div class="row px-1">
    <div class="col-md-10">

      <!-- products -->
      <div class="row">
        

      <!-- fetching get products -->
      <?php 
      // calling function
           view_details();
           get_unique_categories();
           get_unique_brands();
      ?>
 
    <!-- row end -->
    </div>

  <!-- col end -->  
  </div>
      
      
      

      <!-- sidenav -->
      <div class="col-md-2 bg-white p-0">

      <ul class="navbar-nav me-auto text-success">
    <li class="nav-item bg-white">
      <a href="index.php" class="nav-link text-warning text-center">
        <h5> Reimprospatare </h5></a>
    </li>
  </ul>

      <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-warning">
            <a href="#" class="nav-link text-light">
              <h4>Producatori</h4></a>
          </li>

          <?php 
               // calling function
           getbrands();      
          ?>

        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-warning">
            <a href="#" class="nav-link text-light">
              <h4>Produse</h4></a>
          </li>

          <?php 
               // calling function
          getcategories();
          ?>       

        </ul>


      </div>



  </div>

<!-- last child -->

<!-- include footer -->
<?php include("./includes/footer.php") ?>

</div>

</body>
</html>