<!-- connect file -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Magazin </title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    

    <!-- css file -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="./images/logo.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"  href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"> Products </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Register </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>1</sup> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Total Price:100/- </a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action=""
    method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" 
      aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light"
      name="search_data_product">
    </form>
  </div>
</nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="#"> Welcome Guest </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Login </a> 
        </li>

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center"> Hidden Store </h3>
    </div>


    <!-- fourth child -->
  <div class="row px-1">
    <div class="col-md-10">

      <!-- products -->
      <div class="row">

      <!-- fetching get products -->
      <?php 
      // calling function
           search_product();
           get_unique_categories();
           get_unique_brands();
      ?>
 
    <!-- row end -->
    </div>

  <!-- col end -->  
  </div>
      
      
      

      <!-- sidenav -->
      <div class="col-md-2 bg-secondary p-0">

      <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Brands</h4></a>
          </li>

          <?php 
               // calling function
           getbrands();      
          ?>

        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4></a>
          </li>

          <?php 
               // calling function
          getcategories();
          ?>       

        </ul>


      </div>



  </div>
 </div>
      
  
    


</body>
</html>