<?php
   require 'config.php';
   if(isset($_GET['id'])){
     $id = $_GET['id'];
     $sql = "SELECT * FROM buyCarWeb WHERE id = '$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);

     $cname = $row['car_name'];
     $cprice = $row['car_price'];
     $cabout = $row['car_about'];
  
     $cimage = $row['car_img'];
   }
   else{
    echo 'No car found!';
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Know More</title>
</head>
<body style="background: linear-gradient(to right,black,#0b83d8);">
    <!-- navbar code -->
    <nav class="navbar navbar-expand-lg" style="background-color: black; display:sticky;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white">Write Up</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
         <!-- Changing .me-auto to .ms-auto shifts it to the right. -->
           <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="buyCars.php" style="color:#0b83d8;"><b style="font-size:20px;"><</b> Go back to buy cars page</a>
             </li>
           </ul>
         </div>
        </div>
    </nav>

    <!-- cards -->
    <div class="card mx-auto mt-5" style="max-width: 740px; box-shadow: 17px 12px 11px -4px rgba(0,0,0,0.74);">
      <div class="row g-0">
         <div class="col-md-4">
            <img src="<?= $cimage?>" class="img-fluid rounded-start" alt="car image">
         </div>
        <div class="col-md-8">
          <div class="card-body">
             <h5 class="card-title"><?= $cname?></h5>
             <p class="card-text"><?= $cabout?></p>
         </div>
      </div>
  </div>
</div>
</body>
</html>