
<!-- connect file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tablou Principal</title>


    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        
    .logo{
       width: 100px;
       height: 100px;
       object-fit: contain;
    }
    .card-img-top{
       width: 100px;
       height: 200px;
       object-fit: contain;
    } 
    .admin_image{
        width: 100px;
        object-fit: contain;
    }
    body{
        overflow-x: hidden; 
    }
    .product_img{
        width: 100px;
        object-fit: contain;
    }
    </style>





</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <img src="../images/logo5.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="" class="nav-link text-white fw-bold">Bine ai Venit </a>
                        </li>


                    </ul>

                </nav>
            </div>
        </nav>

        <!-- second child -->  
        <div class="bg-light">
            <h3 class="text-center bg-white text-danger fw-bold p-2"> 
                Detalii Tablou - Magazin Online cu Produse Locale </h3>
        </div>    
        


        <!-- third child -->
        <div class="row ">
         <div class="col-md-12 bg-warning p-1 d-flex align-items-center">
            <div class="px-5">
                <a href="#">
                    <img src="" alt="" class="admin_image">
                </a>
                <p class="text-light text-center"> </p>
            </div>    

            
            <div class="button text-center">
                <button class="my-3"> 
                    <a href="insert_product.php" class="nav-link text-danger fw-bold my-1">
                    Insereaza Produse
                    </a> 
                </button>
                <button>
                    <a href="index.php?view_products" class="nav-link text-danger fw-bold my-1">
                        Toate Produsele
                    </a>
                </button>
                <button>
                    <a href="index.php?insert_categ_brands" class="nav-link text-danger fw-bold my-1">
                    Insereaza Producatori
                    </a>
                </button>
                <button>
                    <a href="index.php?view_categ_brands" class="nav-link text-danger fw-bold my-1">
                        Vizualizeaza Producatori
                    </a>
                </button>
                <button>
                    <a href="index.php?list_orders" class="nav-link text-danger fw-bold my-1">
                        Lista Comenzi
                    </a>
                </button>
                <button>
                    <a href="index.php?list_payments" class="nav-link text-danger fw-bold my-1">
                        Lista Plati
                    </a>
                </button>
                <button>
                    <a href="index.php?list_users" class="nav-link text-danger fw-bold my-1">
                        Lista Utilizatori
                    </a>
                </button>
                <button>
                    <a href="view_messages_admin.php" class="nav-link text-danger fw-bold my-1">
                        Vizualizeaza Mesaje
                    </a>
                </button>
                <button>
                    <a href="./admin_logout.php" class="nav-link text-danger fw-bold my-1">
                        Deconectare
                    </a>
                </button>
            </div>

        </div>
    
     </div> 

     <!-- fourth child -->
     <div class="container my-3">
        <?php 
          if(isset($_GET['insert_categ_brands'])) {
            include('insert_categ_brands.php');
            }
            if(isset($_GET['view_products'])) {
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])) {
                include('edit_products.php');
            }
            if(isset($_GET['delete_product'])) {
                include('delete_product.php');
            }
            if(isset($_GET['view_categ_brands'])) {
                include('view_categ_brands.php');
            }
            if(isset($_GET['edit_category'])) {
                include('edit_category.php');
            }
            if(isset($_GET['edit_brands'])) {
                include('edit_brands.php');
            }
            if(isset($_GET['delete_category'])) {
                include('delete_category.php');
            }
            if(isset($_GET['delete_brands'])) {
                include('delete_brands.php');
            }
            if(isset($_GET['list_orders'])) {
                include('list_orders.php');
            }
            if(isset($_GET['list_payments'])) {
                include('list_payments.php');
            }
            if(isset($_GET['list_users'])) {
                include('list_users.php');
            }
            if(isset($_GET['delete_users'])) {
                include('delete_users.php');
            }
            if(isset($_GET['delete_orders'])) {
                include('delete_orders.php');
            }
            if(isset($_GET['delete_payments'])) {
                include('delete_payments.php');
            }
        ?>
     </div>
     
     

<!-- last child -->

<!-- include footer -->
<?php include("../includes/footer.php") ?>

 </div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
 

</body>
</html>


