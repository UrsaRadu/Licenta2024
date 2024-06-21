

<h3 class="text-danger fw-bold mb-4"> Stergere Cont </h3>
    <form action="" method="post" class="mt-5">

        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto"
            name="delete" value="Sterge Contul"> 
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto"
            name="dont_delete" value="Nu sterge Contul"> 
        </div>

    </form>

    <?php 
    $username_session =  $_SESSION['username'];
    if(isset($_POST['delete'])){
        $delete_query = "DELETE FROM `user_table` WHERE
        username = '$username_session' ";
        $result = mysqli_query($con, $delete_query);
        if($result){
            session_destroy();
            echo "<script> alert ('Cont Sters cu Succes !') </script>";
            echo "<script> window.open ('../index.php', '_self') </script>";
        }
    }

    if(isset($_POST['dont_delete'])){
        echo "<script> window.open ('profile.php', '_self') </script>";
    }
    
    
    ?>
    
