<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>


                    </ul>

                </nav>
            </div>
        </nav>

        <!-- second child -->  
        <div class="bg-light">
            <h3 class="text-center p-2"> Manage Details </h3>
        </div>    
        


        <!-- third child -->
        <div class="row">
         <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5">
                <a href="#">
                    <img src="../images/logo1.png" alt="" class="admin_image">
                </a>
                <p class="text-light text-center">Admin Name</p>
            </div>    
            
            <div class="button text-center">
                <button class="my-3"> 
                    <a href="" class="nav-link text-light bg-info my-1">
                        Insert Products
                    </a> 
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        View Products
                    </a>
                </button>
                <button>
                    <a href="index.php?insert_category" class="nav-link text-light bg-info my-1">
                        Insert Categories
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        View Categories
                    </a>
                </button>
                <button>
                    <a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">
                        Insert Brands
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        View Brands
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        All Orders
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        All Payments
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        List Users
                    </a>
                </button>
                <button>
                    <a href="" class="nav-link text-light bg-info my-1">
                        Logout
                    </a>
                </button>
            </div>

        </div>
    
     </div> 

     <!-- fourth child -->
     <div class="container my-5">
        <?php 
          if(isset($_GET['insert_category'])) {
                include('insert_categories.php');
          }
          if(isset($_GET['insert_brand'])) {
            include('insert_brands.php');
      }
        ?>
     </div>
     
     



 </div>
   



<!-- bootstrap js link -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>