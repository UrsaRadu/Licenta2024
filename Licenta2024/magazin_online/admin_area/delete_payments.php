



<?php 
     if(isset($_GET['delete_payments'])){
        $delete_id = $_GET['delete_payments'];

        $delete_payments = "DELETE FROM `user_payments` WHERE
        payment_id = $delete_id ";
        $result = mysqli_query($con, $delete_payments);
        if($result){
            echo "<script> alert ('Plata a fost stearsa cu succes !') </script>";
            echo "<script> window.open ('./index.php?list_payments.php', '_self') </script>";
        }
     }
     
     ?>