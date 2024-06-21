
<?php 
     if(isset($_GET['delete_brands'])){
        $delete_brands = $_GET['delete_brands'];

        $delete_query = "DELETE FROM `brands` WHERE
        brand_id = $delete_brands ";
        $result = mysqli_query($con, $delete_query);
        if($result){
            echo "<script> alert ('Denumire producator sters cu succes !') </script>";
            echo "<script> window.open ('./index.php?view_categ_brands.php', '_self') </script>";
        }
     }
     
     ?>
     