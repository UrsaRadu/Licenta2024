<?php 
include('../includes/connect.php'); 
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inregistrare Utilizator </title>

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


</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center"> Inregistrare Utilizator Nou</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" 
                enctype="multipart/form-data">

                <!-- username field -->
                  <div class="form-outline mb-4">
                     <label for="user_username" class="form-label"
                     > Username </label>
                     <input type="text" id="user_username" class=
                     "form-control" placeholder="Introduceti Username"
                     autocomplete="off" required="required" name=
                     "user_username" />
                  </div>

                  <!-- email field -->
                  <div class="form-outline mb-4">
                     <label for="user_eamil" class="form-label"
                     > Email </label>
                     <input type="email" id="user_eamil" class=
                     "form-control" placeholder="Introduceti Email"
                     autocomplete="off" required="required" name=
                     "user_email" />
                  </div>

                  <!-- image field -->
                  <div class="form-outline mb-4">
                     <label for="user_image" class="form-label"
                     > Utilizator Poza </label>
                     <input type="file" id="user_image" class=
                     "form-control"  required="required" name=
                     "user_image" />
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

                  <!-- confirm password field -->
                  <div class="form-outline mb-4">
                     <label for="conf_user_password" class="form-label"
                     > Confirmare Parola </label>
                     <input type="password" id="conf_user_password" class=
                     "form-control" placeholder="Confirmare Parola"
                     autocomplete="off" required="required" name=
                     "conf_user_password" />
                  </div>

                  <!-- address field -->
                  <div class="form-outline mb-4">
                     <label for="user_address" class="form-label"
                     > Adresa </label>
                     <input type="text" id="user_address" class=
                     "form-control" placeholder="Introduceti Adresa"
                     autocomplete="off" required="required" name=
                     "user_address" />
                  </div>

                  <!-- contact field -->
                  <div class="form-outline mb-4">
                     <label for="user_contact" class="form-label"
                     > Numar Telefon </label>
                     <input type="text" id="user_contact" class=
                     "form-control" placeholder="Introduceti Numar Telefon"
                     autocomplete="off" required="required" name=
                     "user_contact" />
                  </div>

                  <div class="mt-4 pt-2">
                    <input type="submit" value="Register"
                    class="bg-info py-2 px-4 border-0" name="user_register">
                    <p class="small fw-bold mt-2 pt-1 mb-0">
                    Aveți deja un cont? <a href="user_login.php" class="text-danger"> 
                    Logare </a></p>
                  </div>
            

                </form>
            </div>
        </div>
    </div>

    
</body>
</html>

      <!-- php code -->
      <?php 
        if(isset($_POST['user_register'])) {
         $user_username = $_POST['user_username'];
         $user_password = $_POST['user_password'];
         $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
         $conf_user_password = $_POST['conf_user_password'];
         $user_email = $_POST['user_email'];
         $user_address = $_POST['user_address'];
         $user_contact = $_POST['user_contact'];
         $user_image = $_FILES['user_image']['name'];
         $user_image_tmp = $_FILES['user_image']['tmp_name'];
         $user_ip = getIPAddress();


         // insert query
         $select_query = "SELECT * FROM `user_table` WHERE username = '$user_username'
         OR user_email = '$user_email' ";
         $result = mysqli_query($con, $select_query);
         $rows_count = mysqli_num_rows($result);
         if($rows_count > 0){
            echo "<script> alert ('Username-ul și e-mailul există deja!') </script> ";
         } else if ($user_password != $conf_user_password) {
            echo "<script> alert ('Parolele nu se potrivesc !') </script> ";  
                  
         } else {

             // insert query      
         $insert_query = "INSERT INTO `user_table` (username, user_email,
         user_password, user_image, user_ip, user_address, user_mobile)
         VALUES ('$user_username', '$user_email', '$hash_password', 
         '$user_image', '$user_ip', '$user_address', '$user_contact') ";
         $sql_execute = mysqli_query($con, $insert_query);
         move_uploaded_file($user_image_tmp, "./user_images/$user_image");

         }
         
         // selecting cart items
         $select_cart_items = "SELECT * FROM `cart_details` WHERE
         ip_address = '$user_ip' ";
         $result_cart = mysqli_query($con, $select_cart_items);
         $rows_count = mysqli_num_rows($result_cart);
         if($rows_count > 0){
            $_SESSION['username'] = $user_username;
            echo "<script> alert ('Ai articole in cos!') </script> ";
            echo "<script> window.open ('checkout.php', '_self') </script> ";
         } else {
            echo "<script> window.open ('../index.php', '_self') </script> ";
         }  
      }
      
      
      ?>