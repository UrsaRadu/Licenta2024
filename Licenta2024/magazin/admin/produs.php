<?php 
     include '../components/connection.php';

     session_start();

     $admin_id = $_SESSION['admin_id'];

     if (!isset($admin_id)) {
        header('location: login:php');
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boxicon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
    rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="admin_style.css?v=
    <?php echo time(); ?>">


    <title> magazin online - produse </title>
</head>
<body>

    <?php include '../components/admin_header.php';  ?>
    
      <div class="main">
        <div class="banner">
          <h1> all products </h1>
        </div>
        <div class="title2">
          <a href="dashboard.php"> dashboard </a><span> / all products </span>
        </div>
        <section class="show-post">
          <h1 class="heading"> all products </h1>
          <div class="box-container">
            <?php 
                 $select_products = $conn->prepare("SELECT * FROM `products`");
                 $select_products->execute();

                 if ($select_products->rowCount() > 0) {
                    while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {

            ?>
            <?php 
                    }
                } else {

                } 
            ?>
            <div class="empty"> 
                <p> no product added yet 
                <a href="add_products.php"> add product </a></p>
            </div>       
          </div>         
        </section>
      </div> 
    


    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    </script>

     <!-- custom js link -->
     <script type="text/javascript" src="script.js"></script>


     <!-- alert -->
     <?php include '../components/alert.php';  ?>




</body>
</html>