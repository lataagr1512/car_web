<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Blogs Website</title>
</head>
<body style="background: linear-gradient(to right,black,#0b83d8);">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: black; display:sticky;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white">Write Up</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto" style="margin-right:2rem;">
              <a class="nav-link active" style="color:#0b83d8" href="addBlogForm.php"><b style="font-size:25px;">+ </b>ADD BLOG</a>
            </div>
          </div>
        </div>
      </nav>
      <h1 style="font-family: 'Dancing Script', cursive;  color:#b00b13; margin-left:4.5rem; margin-top:2rem;">Read & Explore about Cars 🚘</h1>
      <?php
        require 'config.php';
        $sql = "SELECT * FROM newblogs";
        $result = mysqli_query($conn, $sql);
     ?>
     <div class="container flex flex-wrap">
      <div class="row">
           <?php
              while ($row = mysqli_fetch_array($result)){
           ?>
          <div class="col-lg-3 mt-4 mb-3">
          <div class="card">
            <img src="<?= $row['car_img'];?>" class="card-img-top" alt="Car Image" style="height:13rem;">
            <div class="card-body">
              <h5 class="card-title" style="color:navy;"><?= $row['model_name'];?></h5>
              <h4><?= $row['model_price']?> Lakhs/-</h4>
              <!-- <p class="card-text"><?= $row['about_car'];?></p> -->
              <a href="cardesc.php?id=<?= $row['id']; ?>" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary"><b>Author🖋️ - </b><?= $row['author_name']?></small>
            </div>
          </div>
              </div>
          <?php } ?>
        </div>
     </div>
</body>
</html>