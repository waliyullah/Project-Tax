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
    <title>TaxIt.ng || Forgot Password</title>
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
   <form action="">
        <div class="form-container forgot-form">

                <h3 class="h3Forgot Password">Forgot Password</h3>
                <div>
                        <p>
                                Please enter your email address below and we will send you information to change your password.
                             </p>
                    <label for="email"><b>Email</b></label>
                    <div>
                        <input type="text" placeholder="Enter email" name="email" required>
                    </div>
                    
                </div>
                
                <button type="reset">Reset</button>
                <div class="form-container forgot-return" style="display:none;">
                    <h3>
                       Reset Password Sent
                    </h3>
                    <p>
                       An email has been sent to your address with a reset password you can use to access your account.
                    </p>
                </div>
         
        
        </div>
      
       
    </form>

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
