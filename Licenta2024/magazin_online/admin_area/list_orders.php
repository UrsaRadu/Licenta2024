
<h3 class="text-center text-danger fw-bold"> Total Comenzi </h3>
    <table class="table table-bordered mt-5">
        <thead>
            <?php 
            $get_orders = "SELECT * FROM `user_orders`";
            $result = mysqli_query($con, $get_orders);
            $row_count = mysqli_num_rows($result);
            echo "
            <tr class='text-center'>
                <th>Nr</th>
                <th>Suma Totala de Plata</th>
                <th>Nr Factura</th>
                <th>Total Produse</th>
                <th>Data Comenzii</th>
                <th>Conditie</th>
                <th>Stergere</th>
            </tr>
            </thead>
            <tbody>
            ";
            if($row_count == 0){
                echo "<h2 class='text-danger text-center mt-5'> 
                Nu sunt comenzi </h2>";
            } else {
                $number = 0;
                while($row_data = mysqli_fetch_assoc($result)){
                    $order_id = $row_data['order_id'];
                    $user_id = $row_data['user_id'];
                    $amount_due = $row_data['amount_due'];
                    $invoice_number = $row_data['invoice_number'];
                    $total_products = $row_data['total_products'];
                    $order_date = $row_data['order_date'];
                    $order_status = $row_data['order_status'];
                $number++;  
                echo "
            <tr class='text-center'>

                <td> $number </td>
                <td> $amount_due </td>
                <td> $invoice_number </td>
                <td> $total_products </td>
                <td> $order_date </td>
                <td> $order_status </td>
                <td> <a href='index.php?delete_orders= $order_id ' class='text-dark' > 
                        <i class='fa-solid fa-trash'> </i> </a> </td>
            </tr>
            ";  

                } 
            }
            
            ?>           
                
        </tbody>
    </table>