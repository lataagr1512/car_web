<?php
   require 'config.php';
   if(isset($_GET['id'])){
     $id = $_GET['id'];
     $sql = "SELECT * FROM buyCarWeb WHERE id = '$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);

     $cname = $row['car_name'];
     $cprice = $row['car_price'];
     $del_charge = 1000;
     $total_price = $cprice*100000 + $del_charge;

     $cimage = $row['car_img'];
   }
   else{
    echo 'No product found!';
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
    <title>Complete Your Order</title>
</head>
<body style="background-image: linear-gradient(to bottom,rgb(0, 0, 0),#00a9ff); background-repeat: no-repeat; height:55rem;">
<nav class="navbar navbar-expand-lg" style="background-color:black;">
       <div class="container-fluid">
         <a class="navbar-brand" href="#" style="color: rgb(47, 156, 240);">Payment Gateway</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarText">
         <!-- Changing .me-auto to .ms-auto shifts it to the right. -->
           <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="buyCars.php" style="color: rgb(47, 156, 240);">Home</a>
             </li>
           </ul>
         </div>
       </div>
     </nav> 

     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5">
                <h2 class="text-center p-2"style="color:red; font-family: 'Poppins', sans-serif; font-weight: 400; letter-spacing: 0.2rem;">Fill the details to complete your order</h2>
                <h3 style="color:white; font-family: 'Poppins', sans-serif;">Car Details : </h3>
                <table class="table table-bordered" width="500px">
                    <tr>
                       <th>Car Name : </th>
                       <td><?= $cname?></td>
                       <td rowspan="4" class="text-center"><img src="<?= $cimage; ?>"  width="400"></td>
                    </tr>
                    <tr>
                       <th>Car Price : </th>
                       <td>Rs. <?= number_format($cprice)?> Lakhs</td>
                    </tr>
                    <tr>
                       <th>Delivery Charge : </th>
                       <td><?= number_format($del_charge)?></td>
                    </tr>
                    <tr>
                       <th>Total Price : </th>
                       <td><?= number_format($total_price)?></td>
                    </tr>
                </table>
                <h4 style="color:white;font-family: 'Poppins', sans-serif;">Enter your details : </h4>
                <form action="pay.php" method="post" accept-charset="utf-8">
                    <input type="hidden" name="cars_name" value="<?= $cname; ?>">
                    <input type="hidden" name="cars_price" value="<?= $cprice*10000; ?>">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control mt-2" placeholder = "Enter your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control mt-2" placeholder = "Enter your email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control mt-2" placeholder = "Enter your phone" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-lg mt-3" value="Click to pay : Rs. <?= number_format($total_price);?>/-" required>
                    </div>
                </form>
            </div>
        </div>
     </div>
</body>
</html>