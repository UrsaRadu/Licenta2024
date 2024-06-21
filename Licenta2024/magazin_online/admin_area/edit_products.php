
<?php 
        global $con;
             if(isset($_GET['edit_products'])){
                $edit_id = $_GET['edit_products'];
                $get_data = "SELECT * FROM `products` WHERE
                product_id = $edit_id ";
                $result = mysqli_query($con, $get_data);
                $row = mysqli_fetch_assoc($result);
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_keywords = $row['product_keywords'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];

                // fetching category name
                $select_category = "SELECT * FROM `categories`
                WHERE category_id = $category_id ";
                $result_category =mysqli_query($con, $select_category);
                $row_category = mysqli_fetch_assoc($result_category);
                $category_title = $row_category ['category_title'];

                // fetching brands name
                $select_brand = "SELECT * FROM `brands`
                WHERE brand_id = $brand_id ";
                $result_brand =mysqli_query($con, $select_brand);
                $row_brand = mysqli_fetch_assoc($result_brand);
                $brand_title = $row_brand ['brand_title'];

             }
        ?>

        <div class="container mt-5">
            <h1 class="text-center text-danger fw-bold"> Editare Produs </h1>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-outline w-50 m-auto mb-4">
                    <label for="product_title" class="form-label text-warning fw-bold">
                        Titlu Produs
                    </label>
                    <input type="text" id="product_title" 
                    value="<?php echo $product_title ?>" 
                    name="product_title" class="form-control" required="required">
                </div>

                <div class="form-outline w-50 m-auto mb-4">
                    <label for="product_desc" class="form-label text-warning fw-bold">
                        Descriere Produs
                    </label>
                    <input type="text" id="product_desc"
                    value="<?php echo $product_description ?>"
                    name="product_desc" class="form-control" required="required">
                </div>
                <div class="form-outline w-50 m-auto mb-4">
                    <label for="product_keywords" class="form-label text-warning fw-bold">
                        Numire Produs la Cautare
                    </label>
                    <input type="text" id="product_keywords"
                    value="<?php echo $product_keywords ?>"
                    name="product_keywords" class="form-control" required="required">
                </div>
                <div class="form-outline w-50 m-auto mb-4">
                <label for="product_category" class="form-label text-warning fw-bold">
                        Denumire Produs
                    </label>
                    <select name="product_category" class="form-select">
                        <option value="<?php echo $category_title ?>"> <?php echo $category_title ?> </option>
                        <?php

                        $select_category_all = "SELECT * FROM `categories` ";
                        $result_category_all =mysqli_query($con, $select_category_all);
                        while ($row_category_all = mysqli_fetch_assoc($result_category_all)){
                            $category_title = $row_category_all ['category_title'];
                            $category_id = $row_category_all ['category_id'];
                            echo "
                            <option value='$category_id'> $category_title </option>
                            ";
                        };
                        
                        ?>                     
                    </select>

                </div>
                <div class="form-outline w-50 m-auto mb-4">
                <label for="product_brands" class="form-label text-warning fw-bold">
                        Denumire Producator
                    </label>
                    <select name="product_brands" class="form-select">
                    <option value="<?php echo $brand_title ?>"> <?php echo $brand_title ?> </option>
                    <?php

                        $select_brand_all = "SELECT * FROM `brands` ";
                        $result_brand_all =mysqli_query($con, $select_brand_all);
                        while ($row_brand_all = mysqli_fetch_assoc($result_brand_all)){
                            $brand_title = $row_brand_all ['brand_title'];
                            $brand_id = $row_brand_all ['brand_id'];
                            echo "
                            <option value='$brand_id'> $brand_title </option>
                            ";
                        };
                        
                        ?>     
                    </select>

                </div>
                <div class="form-outline w-50 m-auto mb-4">
                    <label for="product_image1" class="form-label text-warning fw-bold">
                        Imagine Produs
                    </label>
                    <div class="d-flex">
                    <input type="file" id="product_image1" name="product_image1"
                    class="form-control w-90 m-auto" required="required">
                    <img src="./product_images/<?php echo $product_image1 ?>" alt=""
                    class="product_img">
                    </div>    
                </div>
                
                <div class="form-outline w-50 m-auto mb-4">
                    <label for="product_price" class="form-label text-warning fw-bold">
                        Pret Produs
                    </label>
                    <input type="text" id="product_price"
                    value="<?php echo $product_price ?>"
                    name="product_price" class="form-control" required="required">
                </div>

                <div class="text-center"> 
                    <input type="submit" name="edit_product" class="btn btn-danger text-white fw-bold mb-3 px-3"
                    value="Actualizare Produs"
                    class="btn btn-info px-3 mb-3">
                    <a href="../admin_area/index.php">
                <h6 class="btn btn-danger text-white fw-bold mb-3 px-3"> Inapoi la Acasa </h6> </a>
                </div>

            </form>
        </div>


            <!-- editing products -->
            <?php 
            if(isset($_POST['edit_product'])){
                $product_title = $_POST['product_title'];
                $product_desc = $_POST['product_desc'];
                $product_keywords = $_POST['product_keywords'];
                $product_category = $_POST['product_category'];
                $product_brands = $_POST['product_brands'];
                $product_price = $_POST['product_price'];
                $product_image1 = $_FILES['product_image1']['name'];
                $temp_image1 = $_FILES['product_image1']['tmp_name'];
       

            // checking empty fields or not
            if($product_title == '' or $product_desc== '' or $product_keywords == ''
            or $product_category == '' or $product_brands == '' or $product_image1 == ''
            or $product_price == '' ){
                echo "<script> alert('Te rugam sa completezi toate campurile !') </script>";
            } else {
                move_uploaded_file($temp_image1, "./product_images/$product_image1");
            
                // query to update products
                $update_product = "UPDATE `products` SET product_title='$product_title',
                product_description='$product_desc', product_keywords='$product_keywords',
                category_id='$product_category', brand_id='$product_brands',
                product_image1='$product_image1', product_price='$product_price',
                date=NOW() WHERE product_id=$edit_id ";

                $result_update=mysqli_query($con, $update_product);
                if($result_update){
                    echo "<script> alert ('Produs actualizat cu succes !') </script>";
                    echo "<script> window.open ('./index.php', '_self') </script>";
                }
            }
            
            
            }          
            ?>

