<?php 
     include 'connection.php';
     if (isset($_POST['submit-btn'])) {
        $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $select_user = mysqli_query($conn,"SELECT * FROM 'users' WHERE email = '$email' ") or die ('query failed');

        if (mysqli_num_rows($select_user)>0 ) {
            $message = 'user already exist';
        } else {
            if ($password != $cpassword) {
                $message = 'wrong password';
            } else {
                mysqli_query($conn, "INSERT INTO 'users' ('name', 'email', 'password') VALUES ('$name', '$email', '$password')")
                or die ('query failed');
                $message[] = 'registered successfully';
                header('location:login.php');
            }
        } 
    }  
    

    //delete products from database
    if(isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];

        mysqli_query($conn, "DELETE FROM `wishlist` WHERE pid = '$delete_id' ") or die ('query failed');
        
        header('location:admin_product.php');
    }
 

    ?>
    
<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- box icon link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> admin pannel </title>
</head>
<body>
   
    <section class="form-container">

    <?php
         if (isset($message)) {
            foreach ($message as $message) {
                echo '
                    <div class="message">
                       <span> '.$message.' </span>
                          <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                    </div>
                ';
            }
         }
   ?>

   <div class="line2"> </div>
   <section class="message-container">
    <h1 class="title"> unread message </h1>
    <div class="box-container">
       <?php 
            $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            if (mysqli_num_rows($select_message)>0) {
                while($fetch_message = mysqli_fetch_assoc($select_message)) {                 
       ?>
       <div class="box">
        <p> user id: <span>  <?php echo $fetch_message['id'];  ?> </span></p>
        <p> name: <span>  <?php echo $fetch_message['name'];  ?> </span></p>
        <p> email: <span>  <?php echo $fetch_message['email'];  ?> </span></p>
        <p> <?php echo $fetch_message['message'];  ?> </p>
        <a href="admin_message.php?delete=<?php echo $fetch_message['id'];  ?> ;" onclick="return confirm('delete this message');" ></a>
       
       </div> 
       <?php 
                } 
            }else {
                echo '
                <div class="empty">
                   <p> no products added yet </p>
                </div>';
            }
       ?> 

    </div>
   </section>
   
   <script type="text/javascript" src="script.js"></script>
     
</body>
</html>


