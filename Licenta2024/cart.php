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
    .cart_img{
      width: 100px;
      height: 100px;
      object-fit: contain;
      overflow-x: hidden;
    }
    </style>
    


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
        <a class="nav-link"  href="index.php">Acasa <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="display_all.php"> Produse </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./users_area/user_registration.php"
        > Inregistrare </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart" 
        aria-hidden="true"></i> <sup>
          <?php cart_item(); ?> </sup> </a>
      </li>
      
      
    </ul>
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
<div class="container">
    <div class="row">
      <form action="" method="post">
        <table class="table table-bordered text-center">
          
            <!-- display dynamic data -->
            <?php
            $get_ip_add = getIPAddress();
            $total_price = 0;
    
            $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add' ";
            $result = mysqli_query($con, $cart_query);
            $result_count = mysqli_num_rows($result);
            if($result_count > 0){
          echo "
              <thead>
            <tr>
              <th> Denumire Produs </th>
              <th> Imagine Produs </th>
              <th> Cantitate </th>
              <th> Pret Total </th>
              <th> Sterge </th>
              <th colspan='2'> Operatiuni </th>
            </tr>
            </thead>
            <tbody>
          ";

            
            while($row = mysqli_fetch_array($result)){
              $product_id = $row['product_id'];
              $select_products = "SELECT * FROM `products` WHERE product_id = '$product_id' ";
              $result_products = mysqli_query($con, $select_products);
              while($row_product_price = mysqli_fetch_array($result_products)){
                $product_price = array($row_product_price['product_price']);
                $price_table = $row_product_price['product_price'];
                $product_title = $row_product_price['product_title']; 
                $product_image1 = $row_product_price['product_image1']; 
                $product_values = array_sum($product_price);
                $total_price += $product_values;
             
            ?>
            <tr>
              <td> <?php echo "$product_title"; ?> </td>
              <td> <img src="./admin_area/product_images/<?php echo "$product_image1"; ?>" 
              alt="" class="cart_img"> </td>
              <td> <input type="text" name="qty" class="form-control 
              w-50"> </td>

            <?php 
              $get_ip_add = getIPAddress(); 
              if(isset($_POST['update_cart'])){
                $quantities = $_POST['qty'];
                $update_cart = "UPDATE `cart_details` SET quantity =
                $quantities WHERE ip_address = '$get_ip_add' ";
                $result_products_quantity = mysqli_query($con, $update_cart);
                $total_price = $total_price * $quantities;
              } 
            ?>

              <td> <?php echo "$price_table"; ?> /- </td>
              <td> <input type="checkbox" name="removeitem[]"
              value= "<?php echo $product_id ?> 
              "> </td>
              <td> 
              <!--  <button class="bg-info px-2 py-1 border-0 mx-1"> Update </button> -->
              <input type="submit" value="Update Cart" class="bg-info px-2 
              py-1 border-0 mx-1" name="update_cart">

              <!--  <button class="bg-info px-2 py-1 border-0 mx-1"> Remove </button> -->
              <input type="submit" value="Remove Cart" class="bg-info px-2 
              py-1 border-0 mx-1" name="remove_cart">

              </td>
            </tr>

            <?php 
              }   
            } 
          } else{
        
          echo "<h2 class='text-center text-danger'> Cosul este gol <h2> ";
        }
            ?>

          </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-3">
          <?php 
          $get_ip_add = getIPAddress();
            
          $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add' ";
          $result = mysqli_query($con, $cart_query);
          $result_count = mysqli_num_rows($result);
          if($result_count > 0){
        echo "
            <h4 class='px-3'> Subtotal:<strong class='text-info'>
            $total_price /- </strong> </h4>
            <input type='submit' value='Continue Shopping' class='bg-info px-3 
            py-2 border-0 mx-3' name='continue_shopping'>
            <button class='bg-secondary p-3 py-2 border-0 '>
            <a href='./users_area/checkout.php' class='text-light text-decoration-none'>
            Iesire </a></button> 
        ";
          } else {
            echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 
            py-2 border-0 mx-3' name='continue_shopping'>";
          }
        if(isset($_POST['continue_shopping'])){
          echo "<script> window.open('index.php', '_self') </script>";
        }  


          ?>
          

        </div>
    </div>
</div>
</form>
       
      <!-- function to remove item -->
      <?php  
          function remove_cart_item(){
            global $con;
            if(isset($_POST['remove_cart'])){
              foreach($_POST['removeitem'] as $remove_id){
                echo $remove_id;
                $delete_query = "DELETE FROM `cart_details` WHERE
                product_id = $remove_id ";
                $run_delete = mysqli_query($con, $delete_query);
                if($run_delete){
                  echo "<script> window.open('cart.php', '_self') </script>";
                }
              }
            }
          }
      echo $remove_item = remove_cart_item();    
      
      ?>


<!-- last child -->

<!-- include footer -->
<?php include("./includes/footer.php") ?>

</div>

</body>
</html>