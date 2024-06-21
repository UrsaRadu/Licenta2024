
<?php 
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
  $category_title = $_POST['cat_title'];

  // select data from database
  $select_query = "SELECT * FROM `categories` WHERE 
  category_title = '$category_title' ";
  $result_select = mysqli_query($con, $select_query);
  $number = mysqli_num_rows($result_select);
  if($number > 0){
    echo "<script> alert 
    ('Aceasta denumire este deja prezenta !')</script>";
  } else {

  $insert_query = "INSERT INTO `categories` (category_title)
  VALUES ('$category_title')";
  $result = mysqli_query($con, $insert_query);
  if($result){
    echo "<script> alert 
    ('Denumirea de produs a fost inserata cu succes !')</script>";
  }
 }
}
?>

<h2 class="text-center text-danger fw-bold"> Insereaza Denumire Produs / Producator </h2>
<form action="" method="post" class="mb-2"> 

    <div class="input-group w-90 mb-2">
      <span class="input-group-text bg-danger" id="basic-addon1">
        <i class="fa-solid fa-receipt"></i>
      </span>
      <input type="text" class="form-control" name="cat_title" 
      placeholder="Denumire Produs" aria-label="Categories" 
      aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-danger text-white fw-bold border-0 p-2 my-2" name="insert_cat" 
      value="Insereaza Denumire Produs"> 
       
    </div>

</form>

<?php
if(isset($_POST['insert_brand'])){
  $brand_title = $_POST['brand_title'];

  // select data from database
  $select_query = "SELECT * FROM `brands` WHERE 
  brand_title = '$brand_title' ";
  $result_select = mysqli_query($con, $select_query);
  $number = mysqli_num_rows($result_select);
  if($number > 0){
    echo "<script> alert 
    ('Denumirea de producator este deja prezenta !')</script>";
  } else {

  $insert_query = "INSERT INTO `brands` (brand_title)
  VALUES ('$brand_title')";
  $result = mysqli_query($con, $insert_query);
  if($result){
    echo "<script> alert 
    ('Denumirea de producator a fost inserata cu succes !')</script>";
  }
 }
}
?>


<form action="" method="post" class="mb-2"> 

    <div class="input-group w-90 mb-2">
      <span class="input-group-text bg-danger" id="basic-addon1">
        <i class="fa-solid fa-receipt"></i>
      </span>
      <input type="text" class="form-control" name="brand_title" 
      placeholder="Denumire Producator" aria-label="Brands" 
      aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-danger text-white fw-bold border-0 p-2 my-2" name="insert_brand" 
      value="Insereaza Denumire Producator"> 
      
    </div>

</form>
