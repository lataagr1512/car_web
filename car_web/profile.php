<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Libre+Baskerville&family=Outfit:wght@600&family=Barlow+Condensed:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
    <title>profile</title>
</head>
<body>
    <heading>
        <nav>
            <ul class="nav-list">
                <!-- <li><img src="images/logo.png" alt="logo" id="logoImg"></li> -->
                <li><a href="blog.html" class="navli">Logout</a></li>
            </ul>
        </nav>
    </heading>
    <div>
        <h1 class="heading">My Cars</h1>
    </div>

    <div class="table_div">
        <table class="customTable" align="center" border="2px solid #7ea8f8" style="margin-left:23rem; margin-top:2rem; background: #e5cbeb; border-collapse: collapse;">
            <thead  style="background-color: #022037; color: white; font-family: 'Open Sans', sans-serif; padding:2rem 4rem;">
            <tr>
                <th> SNo.</th>
                <th> Name </th>
                <th id="email_head"> Email </th>
                <th>Car</th>
                <th id="orgname_head"> Organization Name</th>
                <th>Date</th>
            </tr>
            </thead>
    
            <!-- <?php
            while ($rows = mysqli_fetch_assoc($result)) {
                // print_r($rows);
                ?>
                <tr>
                    <td>
                        <?php echo $rows['sno']; ?>
                    </td>
                    <td>
                        <?php echo $rows['name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['email']; ?>
                    </td>
                    <td>
                        <?php echo $rows['jobTitle']; ?>
                    </td>
                    <td>
                        <?php echo $rows['organ_name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['date']; ?>
                    </td>
                </tr>
                <?php
            }
            ?> -->
    
        </table>
        </div>
</body>
</html>