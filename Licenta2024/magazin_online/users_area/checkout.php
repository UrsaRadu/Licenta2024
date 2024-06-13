<!-- connect file -->
<?php 
include('../includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Magazin - Produse autentice locale </title>

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
    body{
        overflow-x: hidden;
    }
    .logo{
    width: 10%;
    height: 10%;
    object-fit: contain;
}
    </style>

<body></body>


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="../images/logo.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link"  href="../index.php">Acasa <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../display_all.php"> Produse </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_registration.php"
        > Inregistrare </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact </a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search_product.php"
    method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Cauta" 
      aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light"
      name="search_data_product">
    </form>
  </div>
</nav>


    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">


    <?php 
    if(!isset($_SESSION['username'])){
      echo"
        <li class='nav-item'>
          <a class='nav-link' href='#'> Bine ati venit</a> 
        </li> ";
      } else {
        echo "
        <li class='nav-item'>
        <a class='nav-link' href='#'> Bine ai venit 
        ".$_SESSION['username']."</a> 
      </li> "; 
      }

    if(!isset($_SESSION['username'])){
      echo"
      <li class='nav-item'>
          <a class='nav-link' href='user_login.php'> Logare </a> 
        </li> ";
      } else {
        echo "
        <li class='nav-item'>
        <a class='nav-link' href='logout.php'> Logare </a> 
      </li> "; 
      }
    ?>

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center"> Magazin Produse </h3>
    </div>


    <!-- fourth child -->
  <div class="row px-1">
    <div class="col-md-12">

      <!-- products -->
      <div class="row">
        <?php 
         if(!isset($_SESSION['username'])){
            include('user_login.php');
         } else {
            include('payment.php');
         } 
        ?>

 


    <!-- row end -->
    </div>

  <!-- col end -->  
  </div>
      
  </div>


<!-- last child -->

<!-- include footer -->
<?php include("../includes/footer.php") ?>

</div>

</body>
</html>