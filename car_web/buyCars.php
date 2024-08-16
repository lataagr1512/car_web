<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buyCars.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Libre+Baskerville&family=Outfit:wght@600&family=Barlow+Condensed:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<heading>
    <nav>
        <ul class="nav-list">
            <!-- <li><img src="images/logo.png" alt="logo" id="logoImg"></li> -->
            <li><a href="blogHome.php" class="navli">Blogs</a></li>
            <li><a href="testdrive.html" class="navli">Test Drive</a></li>
            <li><a href="aboutus.html" class="navli">About</a></li>
            <li><a href="profile.php" title="Profile"><img src="images/profile-pic.jpeg" alt="Profile Pic" class="profile-btn-img"></a></li>
        </ul>
    </nav>
</heading>
    
    <div>
        <h1 class="heading">Featured Cars</h1>
    </div>
    <?php
     require 'config.php';
     $sql = "SELECT * FROM buyCarWeb";
     $result = mysqli_query($conn, $sql);
     ?>
     <div class="container">
       <div class="row">
           <?php
           while ($row = mysqli_fetch_array($result)) {
             ?>
             <div class="col-lg-4 mt-3 mb-3">
                 <div class="card-deck">
                    <div class="card border-info p-2">
                      <img src="<?= $row['car_img'];?>" class="card-img-top" height="250">
                      <h5 class="card-title mt-2"><?= $row['car_name']; ?></h5>
                      <h3>Price: Rs. <?= number_format($row['car_price']); ?> Lakh/-</h3>
                      <!-- <p class="card-text"><?= $row['car_about']; ?></p> -->
                      <a href="readMoreCar.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-lg mb-2">Read More</a>
                      <a href="carOrder.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block btn-lg">Buy Now</a>
                    </div>
                 </div>
             </div>
           <?php } ?>
       </div>
     </div>
    <!-- <div class="carsContainer">
        <div class="card" style="width: 18rem;">
            <img src="images/featured1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h4>10 Lakhs/-</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary btn-lg">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/featured2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h4>10 Lakhs/-</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary btn-lg">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/featured3.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h4>10 Lakhs/-</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary btn-lg">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/featured4.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h4>10 Lakhs/-</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary btn-lg">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/featured5.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h4>10 Lakhs/-</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary btn-lg ">Go somewhere</a>
            </div>
        </div>
    </div> -->
    
</body>

</html>




