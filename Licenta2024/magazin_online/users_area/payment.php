<?php 
include('../includes/connect.php'); 
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Plata </title>

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
    img{
        width: 80%;
        margin: auto;
        display: block;
    }
    </style>
    
</head>
<body>

    <!-- access user id -->
    <?php 
    $user_ip = getIPAddress();
    $get_user = "SELECT * FROM  `user_table` 
    WHERE user_ip = '$user_ip' ";
    $result = mysqli_query($con, $get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];
 
    ?>

    <div class="container">
        <h2 class="text-center text-info"> Plata Optiuni </h2>
        <div class="row d-flex justify-content-center
        align-items-center my-5">

            <div class="col-md-6">
            <a href="https://www.paypal.com" target="_blank" >
                <img src="../images/bani.webp" alt="">
            </a>
            </div>
            <div class="col-md-6">
            <a href="order.php?user_id=<?php echo $user_id ?>"> 
            <h2 class="text-center"> Plateste Alternativ</h2> </a>
            </div>

        </div>
    </div>


    

</body>
</html>