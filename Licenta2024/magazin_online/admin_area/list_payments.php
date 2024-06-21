


<h3 class="text-center text-danger fw-bold"> Total Plati </h3>
    <table class="table table-bordered mt-5">
        <thead>
            <?php 
            $get_payments = "SELECT * FROM `user_payments`";
            $result = mysqli_query($con, $get_payments);
            $row_count = mysqli_num_rows($result);
            echo "
            <tr class='text-center'>
                <th> Nr </th>
                <th>Nr Factura</th>
                <th>Suma Totala</th>
                <th>Mod de Plata</th>
                <th>Data Comenzii</th>
                <th>Stergere</th>
            </tr>
            </thead>
            <tbody>
            ";
            if($row_count == 0){
                echo "<h2 class='text-danger text-center mt-5'> 
                Nicio Plata Primita Inca ! </h2>";
            } else {
                $number = 0;
                while($row_data = mysqli_fetch_assoc($result)){
                    $order_id = $row_data['order_id'];
                    $payment_id = $row_data['payment_id'];
                    $amount = $row_data['amount'];
                    $invoice_number = $row_data['invoice_number'];
                    $payment_mode = $row_data['payment_mode'];  
                    $date = $row_data['date']; 
                $number++;  
                echo "
            <tr class='text-center'>

                <td> $number </td>
                <td> $invoice_number </td>
                <td> $amount </td>
                <td> $payment_mode </td>
                <td> $date </td>
                <td> <a href='index.php?delete_payments= $payment_id ' class='text-dark' > 
                        <i class='fa-solid fa-trash'> </i> </a> </td>
            </tr>
            ";  

                } 
            }
            
            ?>           
                
        </tbody>
    </table>
