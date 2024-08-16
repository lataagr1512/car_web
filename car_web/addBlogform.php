<?php
require 'config.php';
$msg = "";
if (isset($_POST['submit'])) {
  $a_name = $_POST['aName'];
  $c_name = $_POST['cName'];
  $c_price = $_POST['cPrice'];
  $c_about = $_POST['aboutCar_text'];

  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES['cImage']["name"]);
  move_uploaded_file($_FILES['cImage']["tmp_name"], $target_file);

  $sql = "INSERT INTO newblogs(author_name,model_name,model_price,car_img,about_car) VALUES('$a_name','$c_name','$c_price','$target_file','$c_about')";

  if (mysqli_query($conn, $sql)) {
    $msg = "Blog added to the database successfully!";
  } else {
    $msg = "Failed to add the blog!";
  }
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
    <title>Add New Blog</title>
</head>
<body style="background: linear-gradient(to right, black,#0b83d8)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 rounded" style="background-color: #074e7a;">
                <h2 class="text-center p-2 mt-2" style="color:rgb(247, 249, 250); font-family: 'Lucida Sans';">Add New Blog</h2>
                <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
                <div class="form-floating mb-2">
                <input type="text" name="aName" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Write your name here</label>
                </div>
                <div class="form-floating mt-2">
                  <input type="text" name="cName" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Car Model Name</label>
                </div>
                <div class="form-floating mt-2">
                  <input type="text" name="cPrice" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Price in lakhs</label>
                </div>
                <div class="input-group mt-2">
                  <input type="file" name="cImage" class="form-control" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Choose Car Image</label>
                </div>
                <div class="input-group mt-2">
                  <span class="input-group-text">Write here</span>
                  <textarea class="form-control" name="aboutCar_text"aria-label="With textarea" rows="5"></textarea>
                </div>
                <div class="row justify-content-center mt-3 mb-3 mx-1">
                  <input type="submit" name="submit" class="btn btn-danger" value="Add Blog">
                </div>
                <div class="form-group">
                        <h4 class="text-center"><?= $msg; ?></h4>
                </div>
            </form>
          </div>
      </div>
      <div class="row justify-content-center ">
        <div class="col-md-6 mt-3 p-4 bg-light rounded mx-auto">
          <a href="blogHome.php" class="btn btn-warning btn-lg d-block">Go to blogs page</a>
        </div>
     </div>
  </div>
</body>
</html>