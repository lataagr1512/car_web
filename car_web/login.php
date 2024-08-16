<?php
include('config.php');


if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM `registration` WHERE `password` = '$password' AND `id`='$email'");
  // $row = mysqli_fetch_assoc($result);
  $rows = mysqli_num_rows($result);
  if ($rows==1) {
    // if ($password == $row['password']) {
      // $_SESSION["email"] = $row["id"];
      // $_SESSION["password"] = $row["password"];
    //   $_SESSION["logged_in"] = true;
      header("Location:buyCars.php");
    //  } //else {
    //   echo 'Wrong Password';
    // }
  } else {
    echo "User Not Registered";
  }
}
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Login Form | CodingLab </title>--->
  <!-- <link rel="stylesheet" href="loginStyle.css"> -->
  <link rel="stylesheet" href="login.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 
  <div class="container">
    <form action="buyCars.php" method="post">
      <div class="title">Login</div>
      <div class="input-box underline">
        <input type="text" name="email" placeholder="Enter Your Email" required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <div class="underline"></div>
      </div>
      <div class="input-box-button">
        <!-- <input type="submit" name="continue" value="Continue"> -->
        <button type="submit" name="login" value="submit">
          Log In
        </button>
      </div>
    </form>
    <!-- <div class="facebook">
          <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div> -->
  </div>
</body>

</html>