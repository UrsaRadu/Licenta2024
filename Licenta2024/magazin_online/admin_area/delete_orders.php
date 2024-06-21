


<?php 
     if(isset($_GET['delete_orders'])){
        $delete_id = $_GET['delete_orders'];

        $delete_orders = "DELETE FROM `user_orders` WHERE
        order_id = $delete_id ";
        $result = mysqli_query($con, $delete_orders);
        if($result){
            echo "<script> alert ('Comanda a fost stearsa cu succes !') </script>";
            echo "<script> window.open ('./index.php?list_orders.php', '_self') </script>";
        }
     }
     
     ?>