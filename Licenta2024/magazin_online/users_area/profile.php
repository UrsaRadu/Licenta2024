<!-- connect file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bine ai venit <?php echo $_SESSION['username'] ?> </title>

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
    .profile_img{
    width: 80%;
    margin: auto;
    display: block;
    object-fit: contain;
    }
    .edit_image{
      width: 100px;
      height: 100px;
      object-fit: contain;

    }



    </style>


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
  <img src="../images/logo.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" 
        href="../index.php"> Acasa </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../display_all.php"> Produse </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"
        > Contul Meu </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../cart.php"> <i class="fa-solid 
        fa-cart-shopping" aria-hidden="true"></i> <sup>
          <?php cart_item(); ?> </sup> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Pret Total: <?php total_cart_price(); ?>/- </a>
      </li>
      
    </ul>
    <form class="d-flex" action="../search_product.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Cauta" 
      aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light"
      name="search_data_product">
    </form>
  </div>
  </div>
</nav>

    <!-- calling cart function -->
    <?php
    cart();    
    ?>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">


    <?php 
    if(!isset($_SESSION['username'])){
      echo"
        <li class='nav-item'>
          <a class='nav-link' href='#'> Bine ati venit </a> 
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
          <a class='nav-link' href='./users_area/user_login.php'> Logare </a> 
        </li> ";
      } else {
        echo "
        <li class='nav-item'>
        <a class='nav-link' href='./users_area/logout.php'> Delogare </a> 
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
     <div class="row">
        <div class="col-md-2 ">
            <ul class="navbar-nav bg-secondary text-center"
            style="height: 100vh" >

                <li class="nav-item bg-info">
                   <a class="nav-link text-light" href="#">
                     Profilul Meu </a>
                </li>

                <?php 
                $username = $_SESSION['username'];
                $user_image = "SELECT * FROM `user_table` WHERE
                username = '$username' ";
                $result_image = mysqli_query($con, $user_image);
                $row_image = mysqli_fetch_array($result_image);
                $user_image = $row_image['user_image'];
                echo "
                <li class='nav-item' >
                   <img src='./user_images/$user_image' class='profile_img
                   my-4' alt='' >
                </li>
                ";
                
                ?>
                
                <li class="nav-item">
                   <a class="nav-link text-light" href="profile.php">
                     Plata in curs </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-light" href="profile.php?edit_account">
                     Editare Cont </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-light" href="profile.php?my_orders">
                     Comenzile Mele </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-light" href="profile.php?delete_account">
                     Sterge Contul </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-light" href="logout.php">
                     Delogare </a>
                </li>

            </ul>
        </div>


        <div class="col-md-10 text-center">
          <?php 
            get_user_order_details();

            if(isset($_GET['edit_account'])){
              include('edit_account.php');
            }
            if(isset($_GET['my_orders'])){
              include('users_orders.php');
            }
            if(isset($_GET['delete_account'])){
              include('delete_account.php');
            }
          ?>

        </div>

     </div>


    

<!-- last child -->

<!-- include footer -->
<?php include("../includes/footer.php") ?>

</div>

</body>

</body>
</html>