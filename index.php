<?php require_once 'dist/scripts/includes.php';
$page = new ProjectTaxIncludes();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dist/Styles/layout.css">
    <script src="https://kit.fontawesome.com/f618f790f8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>TaxIt.ng || Home</title>
</head>
<body>
   <div class="header-section">
       <div class="top-nav">
           <ul class="top-nav-link">
               <li><i class="fas fa-sign-in-alt"></i><a href="#">Sign In</a></li>
               <li><i class="fas fa-user-plus"></i><a href="#">Register</a></li>
           </ul>
       </div>
       <div class="logo-section">
            <img src="https://res.cloudinary.com/dcczd9zz5/image/upload/v1567174130/ff_nbwkbr.png" width="300px">
        </div>
        <div class="main-nav">
            <ul class="main-nav-link">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li>Fund Projects</li>
                <li>Team</li>
            </ul>
        </div>
   </div>
   <div class="intro-section">
        <div>
            <h1>Best Way to pay Tax</h1>
        </div>
   </div>

   <div class="footer-section">
       <div style="margin: 30px;">
          <?php echo $page->footer1(); ?>
          <?php echo $page->footer2(); ?>
          <?php echo $page->footer3(); ?>
          <?php echo $page->footer4(); ?>
       </div>
       <hr style="margin:0px 50px;">
       <?php echo copyright(); ?>
   </div>

</body>
</html>
