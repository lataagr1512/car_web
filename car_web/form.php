<?php

include ('config.php');


if (isset($_POST["submit"])) {  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $address = $_POST["address"];
    $drivinglicense = $_POST["drivinglicense"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    echo "Hello World";
        if ($password == $confirmpassword) {
            echo "Hey There! I am inside the check condition";
            $_SESSION["flash_message"] = "Registration successfully";
            $query = "INSERT INTO `registration`(`name`,`id`,`phoneno`,`address`,`drivinglic`,`password`)
             VALUES ('$name','$email','$phoneno','$address','$drivinglicense','$password') ";
            mysqli_query($conn, $query);
            echo "I am after the insert query";
            header("Location: login.php");

        } else {
            echo
                "Password Does Not Match";
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Registration Form</title>
</head>

<body>
    <h1>Registration Form</h1>

    <!-- Create Form -->
    <form id="form" method="POST">

        <!-- Details -->
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>

            <!-- Input Type Text -->
            <input type="text" id="nam" name="name" placeholder="Enter your name" />
        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>

            <!-- Input Type Email-->
            <input type="email" id="emai" name="email" placeholder="Enter your email" />
        </div>

       

            <!-- Input Type Text -->
            
        <div class="form-control">
            <label for="phone_no">Phone Number</label>
            <input type="tel" class="form-control" name="phoneno" placeholder="Phone Number" required minlength="10">
        </div>
        <div class="form-control">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>
        <div class="form-control">
            <label for="drivinglicense">Driving License</label>
            <input type="text" class="form-control" name="drivinglicense" placeholder="Driving License" required>
        </div>

        <div class="form-control">
            <label for="password" id="label-password">
                Password
            </label>

            <!-- Input Type Text -->
            <input type="password" id="passw" name="password" placeholder="Enter your password" />
        </div>

        <div class="form-control">
            <label for="confirmpassword" id="label-password">
                Confirm Password
            </label>

            <!-- Input Type Text -->
            <input type="password" id="confirmpass" name="confirmpassword" placeholder="Enter your password" />
        </div>


        <!-- Multi-line Text Input Control -->
        <button type="submit" name="submit" value="submit">
            Submit
        </button>
        <!-- <a href="#" class="submit">Submit</a> -->
    </form>
</body>

</html>

