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
     <form action="regform.php" method="post">
 <div class="form-container">

         <h3 class="h3login">Register</h3>
         <div id="formresponse">
           <?php if($_GET['fr']){
             echo $_GET['fr'];
           }   ?>
         </div>
         <div>
           <label for="nme"><b>First Name</b></label>
           <div>
             <input type="text" name="nme" placeholder="Enter First Name" required>
           </div>
         </div>

         <div>
           <label for="lname"><b>SurName</b></label>
           <div>
             <input type="text" name="lname" placeholder="Enter Last Name">
           </div>
         </div>

         <div>
             <label for="user_email"><b>Email</b></label>
             <div>
                 <input type="text" placeholder="Enter Email" name="user_email" required>
             </div>
         </div>

         <div>
             <label for="phn"><b>Phone Number</b></label>
             <div>
                 <input type="number" placeholder="Enter Phone Number" name="phn" required>
             </div>
         </div>

         <div>
             <label for="uname"><b>Username</b></label>
             <div>
                 <input type="text" placeholder="Enter Desired Username" name="uname" required>
             </div>
         </div>

         <div>
             <label for="addr"><b>Address</b></label>
             <div>
                 <input type="text" placeholder="Enter Your Address" name="addr">
             </div>
         </div>

         <div>
             <label for="sta"><b>State</b></label>
             <div>
                 <select name="sta">
                    <option value="Lagos">Lagos</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Imo">Imo</option>
                    <option value="Kaduna">Kaduna</option>
                </select>
             </div>
         </div>

         <div>
             <label for="lga"><br/><b>Local Government Area</b></label>
             <div>
                 <input type="text" placeholder="Enter L.G.A." name="lga">
             </div>
         </div>

         <button type="submit">Register</button>
         <button type="button" class="cancelbtn" style="width: -webkit-fill-available;">Cancel</button>


         <div>


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
