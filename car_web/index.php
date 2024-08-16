<?php
  require "lang.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Libre+Baskerville&family=Outfit:wght@600&family=Barlow+Condensed:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script> 
    <title>Navigation Bar</title>
</head>

<body>
    <heading>
    <nav>
        <ul class="nav-list">
            <!-- <li><img src="images/logo.png" alt="logo" id="logoImg"></li> -->
            <!-- <li class="search_box">
                <input type="text" placeholder="Search...">
                <button class="search-button">Search</button>
            </li> -->
            <li><a href="" class="navli"><?= __('Home')?></a></li>
            <li><a href="blogHome.php" class="navli"><?= __('Blogs')?></a></li>
            <!-- <li><a href="buyCars.html" class="navli">Buy Cars</a></li>
            <li><a href="testdrive.html" class="navli">Test Drive</a></li> -->
            <li><a href="aboutus.php" class="navli"><?= __('About')?></a></li>
            <li><a href="login.php" class="navli" id="signIn_btn"><?= __('Sign In')?></a></li>
            <li>
               <div class="dropdown">
                     <a href="index.php?lang=en"><?= __('Language')?></a>
                     <ul class="dropdown-content hide">
                          <li><a href="index.php?lang=en" style="color:white;"><?= __('English')?></a></li>
                          <li><a href="index.php?lang=hi" style="color:white;"><?= __('Hindi')?></a></li>
                     </ul>
               </div>
            </li>
        </ul>
        
    </nav>
</heading>
<main>
    <div class="landing_content">
        <div class="homeText">
            <h2><?= __('LET\'S GET YOU')?></h2>
            <h1><?= __('ON THE ROAD')?></h1>
        </div>
        <div class="btnRegister">
            <a href="form.php"><?= __('Register Now')?> >>></a>
        </div>
    </div>
</main> 
</body>
<!-- <script>
   var dropdowns = document.querySelectorAll(".dropdown");
   for (var i = 0; i < dropdowns.length; i++) {
       dropsdowns[i].addEventListener('click',function(e){
           e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");  
       }); 
   }
</script> -->

<!-- <script>
    function toggleDropdown(event) {
      event.preventDefault();
      var dropdownContent = event.target.nextElementSibling;
      dropdownContent.classList.toggle("hide");
    }
  </script> -->

</html>