<?php
  require_once 'dist/scripts/includes.php';
  $page = new ProjectTaxIncludes();
  //check if POST has values sent to it
  if($_SERVER['REQUEST_METHOD'] === 'POST')
     {
       
         $fn = $_POST['nme']; $ln = $_POST['lname']; $un = $_POST['uname'];
         $ph = $_POST['phn']; $st = $_POST['sta']; $ad = $_POST['addr'];
         $lg = $_POST['lga']; $em = $_POST['user_email'];
        //echo "first name is ".$fn;
        $formstat = $page->registerUser($fn,$ln,$un,$ph,$st,$ad,$lg,$em);
       //

     }
     else { $formstat = "Please fill the form before submitting<br/><br/>"; }
    
    //echo "formstat is ".$formstat;
     header("Location: register.php?fr=".$formstat);
     
?>
