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
    <title> Logare Utilizator </title>

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

    </style>



</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center"> Logare Utilizator </h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" >

                <!-- username field -->
                  <div class="form-outline mb-4">
                     <label for="user_username" class="form-label"
                     > Username </label>
                     <input type="text" id="user_username" class=
                     "form-control" placeholder="Introduceti Username"
                     autocomplete="off" required="required" name=
                     "user_username" />
                  </div>

                  <!-- password field -->
                  <div class="form-outline mb-4">
                     <label for="user_password" class="form-label"
                     > Parola </label>
                     <input type="password" id="user_password" class=
                     "form-control" placeholder="Introduceti Parola"
                     autocomplete="off" required="required" name=
                     "user_password" />
                  </div>

                  <div class="mt-4 pt-2">
                    <input type="submit" value="Login"
                    class="bg-info py-2 px-4 border-0" name="user_login">
                    <p class="small fw-bold mt-2 pt-1 mb-0">
                    Nu aveți un cont? <a href="user_registration.php" class="text-danger"> 
                    Inregistrare </a></p>
                  </div>
            

                </form>
            </div>
        </div>
    </div>


    
</body>
</html>

       <?php 
       
       if(isset($_POST['user_login'])){
        $user_username = $_POST['user_username'];
        $user_password = $_POST['user_password'];

        $select_query = "SELECT * FROM `user_table`
        WHERE username = '$user_username' ";
        $result = mysqli_query($con, $select_query);
        $row_count = mysqli_num_rows($result); 
        $row_data = mysqli_fetch_assoc($result);
        $user_ip = getIPAddress();


        // cart item 
        $select_query_cart = "SELECT * FROM `cart_details` WHERE
        ip_address = '$user_ip' ";
        $select_cart = mysqli_query($con, $select_query_cart);
        $row_count_cart = mysqli_num_rows($select_cart);
        if($row_count > 0){
            $_SESSION['username'] = $user_username;
            if(password_verify($user_password, 
            $row_data['user_password'])){
        if($row_count == 1 AND $row_count_cart == 0){
            $_SESSION['username'] = $user_username;
            echo "<script> alert('Logare cu succes !')</script>";
            echo "<script> window.open('profile.php', '_self')</script>";
        } else {
            $_SESSION['username'] = $user_username;
            echo "<script> alert('Logare cu succes !')</script>";
            echo "<script> window.open('payment.php', '_self')</script>";
        }
        } else {
            echo "<script> alert('Acreditări nevalide')</script>";
        }

        } else {
            echo "<script> alert('Acreditări nevalide')</script>";

        }
       }
       
       
       ?>