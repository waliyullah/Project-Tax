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
           <?php echo $page->topnav(); ?>
       </div>
       <div class="logo-section">
            <img src="https://res.cloudinary.com/dcczd9zz5/image/upload/v1567174130/ff_nbwkbr.png" width="300px">
        </div>
        <div class="main-nav">
            <?php echo $page->mainnav(); ?>

        </div>
   </div>
   <div>
     <form action="">
 <div class="form-container">

         <h3 class="h3login">Login</h3>
         <div>
             <label for="username"><b>Username</b></label>
             <div>
                 <input type="text" placeholder="Enter Email" name="user_email" required>
             </div>

         </div>

         <div>
             <label for="psw"><b>T.I.N</b></label>
             <div>
                 <input type="password" placeholder="Enter TIN number" name="tinnumber" required>
             </div>

         </div>

         <button type="submit">Login</button>

         <div>
             <label>
                 <input type="checkbox" checked="checked" name="remember"> Remember me
             </label>
         </div>

         <div>
             <button type="button" class="cancelbtn">Cancel</button>
             <span class="psw">Forgot password?<a href="#"></a></span>
         </div>

 </div>


</form>
   </div>
   <div class="footer-section">
       <div style="margin: 30px;">
          <?php echo $page->footer1();
           echo $page->footer2();
           echo $page->footer3();
            echo $page->footer4(); ?>
       </div>
       <hr style="margin:0px 50px;">
       <?php echo $page->copyright(); ?>
   </div>

</body>
</html>
