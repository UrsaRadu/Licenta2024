<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Magazin </title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="./images/logo.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"> Products </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Register </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>1</sup> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Total Price:100/- </a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="#"> Welcome Guest </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Login </a> 
        </li>

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center"> Hidden Store </h3>
    </div>

    <!-- fourth child -->
    <div class="row">
      <div class="col-md-10">

      <!-- products -->
      <div class="row">
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info"> Add to card </a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info"> Add to card </a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to card</a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to card</a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img5.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to card</a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/img6.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to card</a>
    <a href="#" class="btn btn-secondary"> View more </a>
  </div>
</div>
          </div>

        </div>
      </div>
      
      
      

      <!-- sidenav -->
      <div class="col-md-2 bg-secondary p-0">

      <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Brands</h4></a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand nr 1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand nr 2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand nr 3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand nr 4</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand nr 5</a>
          </li>
        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4></a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Categ nr 1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
            Categ nr 2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
            Categ nr 3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
            Categ nr 4</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
            Categ nr 5</a>
          </li>
        </ul>


      </div>



  </div>
 </div>
      
  
    


<!-- bootstrap js link -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>