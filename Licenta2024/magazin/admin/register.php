<?php 
     include '../components/connection.php';

     if(isset($_POST['register'])) {

        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

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


    <title> magazin admin panel - register page </title>
</head>
<body>

      <div class="main">
        <section>
            <div class="form-container" id="admin_login">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3> register now </h3>
                    <div class="input-field">
                        <label> user name <sup> * </sup> </label>
                        <input type="text" name="name" maxlength="20" 
                        required placeholder=" Enter your username " 
                        oninput="this.value.replace(/\/g,'')">
                    </div>

                    <div class="input-field">
                        <label> user email <sup> * </sup> </label>
                        <input type="email" name="email" maxlength="20" 
                        required placeholder=" Enter your email " 
                        oninput="this.value.replace(/\/g,'')">
                    </div>

                    <div class="input-field">
                        <label> user password <sup> * </sup> </label>
                        <input type="password" name="password" maxlength="20" 
                        required placeholder=" Enter your password " 
                        oninput="this.value.replace(/\/g,'')">
                    </div>

                    <div class="input-field">
                        <label> confirm password <sup> * </sup> </label>
                        <input type="password" name="cpassword" maxlength="20" 
                        required placeholder=" Confirm password " 
                        oninput="this.value.replace(/\/g,'')">
                    </div>
                    <button type="submit" name="register" class="btn"> register now </button>
                    <p> already have an account ? <a href="login.php"> login now </a> </p>

                </form>
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