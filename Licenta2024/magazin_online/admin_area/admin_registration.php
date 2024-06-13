<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Inregistrare </title>

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
        <h2 class="text-center mb-5 text-success"> Admin Inregistrare </h2>
        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-xl-5">
                <img src="../images/ananas1.jpg" alt="Admin Registration"
                class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">

                    <div class="form-outline mb-4">
                        <label for="username" class="form-label"> 
                            Username </label>
                            <input type="text" id="username" name="username"
                            placeholder="Introduceti Username" required="required"
                            class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label"> 
                            Email </label>
                            <input type="email" id="email" name="email"
                            placeholder="Introduceti Email" required="required"
                            class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label"> 
                            Parola </label>
                            <input type="password" id="password" name="password"
                            placeholder="Introduceti Parola" required="required"
                            class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label"> 
                            Confirmare Parola </label>
                            <input type="password" id="confirm_password" name="confirm_password"
                            placeholder="Confirmare Parola" required="required"
                            class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0"
                        name="admin_registration" value="Register">
                        <p class="small fw-bold mt-2 pt-1"> 
                            Aveți deja un cont?
                            <a href="admin_login.php" class="link-danger">
                                 Logare </a> </p>
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>
</html>