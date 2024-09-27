<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
      <!-- bootstrap css link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- css file -->
       <link rel="stylesheet" href="../style.css">
       <!-- font Awesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .admin_image {
    width: 100px;
    object-fit: contain;
}
.footer {
    width: absolute;
    bottom: 0;
}

</style>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
        <!-- first child -->
       <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
           <img src="../img/food 10.avif" alt="" class="logo">
           <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome guest</a>

                </li>
            </ul>
       </nav>
     </div>
</nav>
    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Mange Details</h3>
        </div>

        <!-- third child -->
         <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-1">
                    <a href="#"><img src="../img/apple1.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Product</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List user</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>


                </div>
            </div>
         </div>

         <!-- fourth child -->
          <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');


            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');


            }


            if(isset($_GET['insert_product']))
       ?>

        </div>
     <!-- last child -->
<div class="bg-info p-3 text-center footer">
        <p> All  rights reserved @ designed by lipamuduli-2024 </p>
    </div>
    </div>



    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
</body>
</html>