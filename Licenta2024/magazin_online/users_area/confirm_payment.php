
<!-- connect file -->
<?php 
include('../includes/connect.php');
session_start();

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $select_data = "SELECT * FROM `user_orders` WHERE 
    order_id = $order_id";
    $result = mysqli_query($con, $select_data);
    $row_fetch = mysqli_fetch_assoc($result);
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
}

if(isset($_POST['confirm_payment'])){
    $invoice_number= $_POST['invoice_number'];
    $amount= $_POST['amount'];
    $payment_mode= $_POST['payment_mode'];
    $insert_query = "INSERT INTO `user_payments` (order_id, invoice_number,
    amount, payment_mode) VALUES ($order_id, $invoice_number, $amount, '$payment_mode' )";
    $result = mysqli_query($con, $insert_query);
    if($result){
        echo "<h3 class='text-center text-light'> Ati efectuat cu succes plata! </h3> ";
        echo "<script> window.open('profile.php?my_orders', '_self') </script>";
    }
    $update_orders = "UPDATE `user_orders` SET order_status='Complete' WHERE
    order_id= $order_id ";
    $result_orders = mysqli_query($con, $update_orders);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina Plata </title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body class="bg-secondary">
    <div class="container my-5">
        <h1 class="text-center text-light"> Confirmare Plata </h1>
        <form action="" method="post">

            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto"
                name="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light"> Suma datorata </label>
                <input type="text" class="form-control w-50 m-auto"
                name="amount" value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>Selecteaza Modalitate Plata</option>
                    <option>Visa</option>
                    <option>Mastercard</option>
                    <option>Paypal</option>
                    <option>Plata la livrare</option>
                    <option>Plateste Alternativ</option>
                </select>                
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-info py-2 px-3 border-0"
                value="Confirmare" name="confirm_payment">
            </div>

        </form>
    </div>

    
</body>
</html>

