
<?php 
include('../includes/connect.php');
if(isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    //accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    

    //accesing image tmp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    

    //checking empty condition
    if($product_title == '' or $description == '' or
    $product_keywords == '' or $product_category == ''
    or $product_brands == '' or $product_price == '' or
    $product_image1 == '' ) {
        echo "<script> alert ('Insereaza toate campurile !') </script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
       
        
        // insert query
        $insert_products = "INSERT INTO `products` (product_title, 
        product_description, product_keywords, category_id, brand_id, 
        product_image1, product_price, date, status) VALUES ('$product_title', '$description', 
        '$product_keywords', '$product_category', '$product_brands',
        '$product_image1', '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);
        if($result_query){
            echo "<script> alert ('Produs inserat cu succes !') </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insereaza Produse </title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center text-danger fw-bold"> Insereaza Produse </h1>
        
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Title --> 
            <div class="form-outline  mb-4 w-50 m-auto">
                <label for="product_title" class="form-label text-warning fw-bold">
                    Nume Produs 
                </label>
                <input type="text" name="product_title" id="product_title"
                class="form-control" placeholder="Introdu Nume Produs"
                autocomplete="off" required="required">
            </div>

            <!-- Description --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label text-warning fw-bold">
                    Descriere Produs 
                </label>
                <input type="text" name="description" id="description"
                class="form-control" placeholder="Introdu Descriere Produs"
                autocomplete="off" required="required">
            </div>

            <!-- Keywords --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label text-warning fw-bold">
                     Nume Produs la Cautare  
                </label>
                <input type="text" name="product_keywords" id="product_keywords"
                class="form-control" placeholder="Introdu Nume Produs la Cautare"
                autocomplete="off" required="required">
            </div>

            <!-- Categories --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id=""
                class="form-select text-warning fw-bold">
                    <option value=""> Selecteaza Denumire Produs </option> 
                <?php 
                          $select_query ="SELECT * FROM `categories`";
                          $result_query = mysqli_query($con, $select_query);
                          while($row = mysqli_fetch_assoc($result_query)) {
                            $category_title = $row ['category_title'];
                            $category_id = $row ['category_id'];
                            echo "<option value='$category_id'>
                            $category_title </option>";
                        }
                ?>
             </select>
            </div>

            <!-- Brands --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id=""
                class="form-select text-warning fw-bold">
                    <option value=""> Selecteaza Denumire Producator </option> 
                    <?php 
                          $select_query ="SELECT * FROM `brands`";
                          $result_query = mysqli_query($con, $select_query);
                          while($row = mysqli_fetch_assoc($result_query)) {
                            $brand_title = $row ['brand_title'];
                            $brand_id = $row ['brand_id'];
                            echo "<option value='$brand_id'>
                            $brand_title </option>";
                        }
                    ?>
            </select>
            </div> 

            <!-- Image 1 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label text-warning fw-bold">
                    Imagine Produs
                </label>
                <input type="file" name="product_image1" id="product_image1"
                class="form-control" required="required">
            </div>

           

            

            <!-- Price --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label text-warning fw-bold">
                    Pret Produs
                </label>
                <input type="text" name="product_price" id="product_price"
                class="form-control" placeholder="Introdu Pret Produs"
                autocomplete="off" required="required">
            </div>

            <!-- Price --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-danger text-white fw-bold 
                mb-3 px-3" value="Insereaza Produsul">
                <a href="../admin_area/index.php">
                <h6 class="btn btn-danger text-white fw-bold mb-3 px-3"> Inapoi la Acasa </h6>
            </div>
            

        </form>
    </div>
   



</body>
</html>