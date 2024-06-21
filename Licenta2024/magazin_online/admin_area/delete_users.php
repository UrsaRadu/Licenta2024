

<?php 
     if(isset($_GET['delete_users'])){
        $delete_id = $_GET['delete_users'];

        $delete_users = "DELETE FROM `user_table` WHERE
        user_id = $delete_id ";
        $result = mysqli_query($con, $delete_users);
        if($result){
            echo "<script> alert ('Utilizator sters cu succes !') </script>";
            echo "<script> window.open ('./index.php?list_users.php', '_self') </script>";
        }
     }
     
     ?>