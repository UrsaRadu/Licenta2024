
<?php 
include('../includes/connect.php'); 
include('../functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autentificare </title>

     <!-- bootstrap css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style> 
        body{
            overflow: hidden;
        }
    </style>


</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5 text-danger fw-bold"> Autentificare </h2>
        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-xl-5">
                <img src="../images/logo5.png" alt="Login"
                class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">

                    <div class="form-outline mb-4">
                        <label for="admin_name" class="form-label text-danger fw-bold"> 
                        Nume Utilizator </label>
                            <input type="text" id="admin_name" name="admin_name"
                            placeholder="Nume Utilizator" required="required"
                            class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label text-danger fw-bold"> 
                        Parola </label>
                            <input type="admin_password" id="admin_password" name="admin_password"
                            placeholder="Introdu Parola" required="required"
                            class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="bg-info py-2 px-3 bg-danger text-white fw-bold border-0"
                        name="admin_login" value="Autentificare">         
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>
</html>

<?php 
       
       if(isset($_POST['admin_login'])){
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $select_query = "SELECT * FROM `admin_tabel`
        WHERE admin_name = '$admin_name' ";
        $result = mysqli_query($con, $select_query);

        $_SESSION['admin_name'] = $admin_name;
        echo "<script> alert('Autentificare cu succes !')</script>";
        echo "<script> window.open('../admin_area/index.php', '_self')</script>";
    
    } else {
        echo "<script> alert('Invalid !')</script>";
    } 
?>    
