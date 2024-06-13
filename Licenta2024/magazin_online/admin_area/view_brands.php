
 
<h3 class="text-center text-success"> 
        Toti Producatorii </h3>
        <table class="table table-bordered mt-5">
            <thead >
                <tr class="text-center">
                    <th> Serie Numar</th>
                    <th> Producatori Denumire</th>
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


