
<h3 class="text-center text-danger fw-bold"> 
        Toate Produsele </h3>
        <table class="table table-bordered mt-5">
            <thead >
                <tr class="text-center">
                    <th> Nr </th>
                    <th> Nume Produs </th>
                    <th> Editare </th>
                    <th> Stergere </th>
                </tr>
            </thead>
            <tbody >
                <?php 
                 $select_cat = "SELECT * FROM `categories` ";
                 $result = mysqli_query($con, $select_cat);
                 $number = 0;
                 while($row = mysqli_fetch_assoc($result)){
                    $category_id = $row['category_id'];
                    $category_title = $row['category_title'];
                    $number++;
                
                ?>
                <tr class="text-center">
                    <td> <?php echo $number; ?> </td>
                    <td> <?php echo $category_title; ?> </td>
                    <td> <a href="index.php?edit_category=<?php echo $category_id ?>" class="text-dark"> 
                        <i class="fa-solid fa-pen-to-square"> </i> </a> </td>
                    <td> <a href="index.php?delete_category=<?php echo $category_id ?>" class="text-dark"> 
                        <i class="fa-solid fa-trash"> </i> </a> </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>

        </table>

     
<h3 class="text-center text-danger fw-bold"> 
        Toti Producatorii </h3>
        <table class="table table-bordered mt-5">
            <thead >
                <tr class="text-center">
                    <th> Nr </th>
                    <th> Nume Producator </th>
                    <th> Editare </th>
                    <th> Stergere </th>
                </tr>
            </thead>
            <tbody >
                <?php 
                 $select_brand = "SELECT * FROM `brands` ";
                 $result = mysqli_query($con, $select_brand);
                 $number = 0;
                 while($row = mysqli_fetch_assoc($result)){
                    $brand_id = $row['brand_id'];
                    $brand_title = $row['brand_title'];
                    $number++;
                
                ?>
                <tr class="text-center">
                    <td> <?php echo $number; ?> </td>
                    <td> <?php echo $brand_title; ?> </td>
                    <td> <a href="index.php?edit_brands=<?php echo $brand_id ?>" 
                    class="text-dark"> 
                        <i class="fa-solid fa-pen-to-square"> </i> </a> </td>
                    <td> <a href="index.php?delete_brands=<?php echo $brand_id ?>" class="text-dark" > 
                        <i class="fa-solid fa-trash"> </i> </a> </td>
                </tr>

                <?php 
                    }
                ?>
            </tbody>

        </table>


    