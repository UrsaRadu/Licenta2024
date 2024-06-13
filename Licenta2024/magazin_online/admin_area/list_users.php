

<h3 class="text-center text-success"> Toti Utilizatorii </h3>
    <table class="table table-bordered mt-5">
        <thead>
            <?php 
            $get_user = "SELECT * FROM `user_table`";
            $result = mysqli_query($con, $get_user);
            $row_count = mysqli_num_rows($result);
            echo "
            <tr class='text-center'>
                <th>Serie Numar</th>
                <th>Utilizator Nume</th>
                <th>Utilizator Email</th>
                <th>Utilizator Imagine</th>
                <th>Utilizator Adresa</th>
                <th>Utilizator Numar Telefon</th>
                <th>Stergere</th>
            </tr>
            </thead>
            <tbody>
            ";
            if($row_count == 0){
                echo "<h2 class='text-danger text-center mt-5'> 
                No Users yet ! </h2>";
            } else {
                $number = 0;
                while($row_data = mysqli_fetch_assoc($result)){
                    $user_id = $row_data['user_id'];
                    $username = $row_data['username'];
                    $user_email = $row_data['user_email'];
                    $user_image = $row_data['user_image'];
                    $user_address = $row_data['user_address'];  
                    $user_mobile = $row_data['user_mobile']; 
                $number++;  
                echo "
            <tr class='text-center'>

                <td> $number </td>
                <td> $username </td>
                <td> $user_email </td>
                <td> <img src='../users_area/user_images/$user_image' 
                alt='$username' class='product_img' /> </td>
                <td> $user_address </td>
                <td> $user_mobile </td>
                <td> <a href='' class='text-dark' > 
                        <i class='fa-solid fa-trash'> </i> </a> </td>
            </tr>
            ";  

                } 
            }
            
            ?>           
                
        </tbody>
    </table>
