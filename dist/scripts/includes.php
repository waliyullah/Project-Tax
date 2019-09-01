<?php

/*
* Contains the functions that will be displayed in the site
* Especially those used repeatedly
*/
//ini_set('display_errors', 1); error_reporting(-1);
class ProjectTaxIncludes
{
  //public __construct(){}

    public function topnav(){
        $display = '<ul class="top-nav-link">
                 <li><i class="fas fa-sign-in-alt"></i><a href="login.php">Sign In</a></li>
                 <li><i class="fas fa-user-plus"></i><a href="register.php">Register</a></li>
             </ul>';
             return $display;
    }

    public function mainnav(){
        $display = '<ul class="main-nav-link">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="payment.php">Fund Projects</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>';
        return $display;
    }
    public function footer1() {
      $display = '<div id="footer1">
          <h3>Contact Us</h3>
          <p>
              <span>Block 6, 36 Adeboye Street, Lagos, Nigeria.</span><br>
              <span>Support: +234814-7657436, +234701-4360123</span><br>
              <span>mail to info@taxi.comt</span><br>
              <span>Lorem Ipsum</span>
          </p>
      </div>';
      return $display;
    }
    public function footer2() {
      $display = '<div id="footer-2">
          <ul>
              <li><a>About us</a></li>
              <li><a>Features</a></li>
              <li><a>TaxIt.ng Mobile</a></li>
          </ul>
      </div>';
      return $display;
    }

    public function footer3() {
      $display = '<div id="footer-3">
                     <ul>
                         <li><a>Pricing</a></li>
                         <li><a>Lorem and Lorem</a></li>
                         <li><a>Ipsum Lorem</a></li>
                     </ul>
                 </div>';
      return $display;
    }

    public function footer4() {
      $display = '<div id="footer-4">
          <ul>
              <li><a>Support and FAQs</a></li>
              <li><a>Terms and Conditions</a></li>
              <li><a>Privacy Policy</a></li>
              <li><a>Lorem Ipsum</a></li>
          </ul>
      </div>';
      return $display;
    }

    public function copyright(){
      $display = '<div id="copyright">
          <p>Copyright © 2019 Team Helsinki. All Rights Reserved | TaxIt.ng is a platform designed & developed by Team Helsinki.</p>
      </div>';
      return $display;
    }

    /* $fn = first name, $ln = Last name, $un = Username, $ph = Phone,
    $ad = Address, $st = State, $lg = L.G.A, $em = Email, $tn = TIN value
    */
    public function registerUser($fn,$ln,$un,$ph,$st,$ad,$lg,$em){
      //registration form must use post not get
      //generate the TINnumber using the TINGen function before inserting
      //Database name = jibitech_helsinki, Username = jibitech_helsink, Password = qu5c69h2w8
      $res = "";
      $tn = $this->TINGen(); //$res .= "<br/> TinGen is ".$tn."<br/>";
      
      $dcon = new mysqli("localhost:3306","jibitech_helsink","qu5c69h2w8","jibitech_helsinki");
      if($dcon->connect_error){
        $res .= "ERROR: Could not connect. " . $dcon->connect_error()."<br/>";
        }
        else{ //$res .= "successfully connected to db<br/>em is ".$em."<br/>";
        
          $sql = "INSERT INTO user (First_Name, Last_Name, Email, Phone_No, Address, State, Local_Govt, TIN, Username) VALUES ('$fn', '$ln', '$em', '$ph', '$ad', '$st', '$lg', '$tn', '$un')";
          
          if (!mysqli_query($dcon, $sql))
            {
              $res .= "Error creating user: ".mysqli_error($dcon);
            }
            else{
          $res .=  "Your account has been created!";
            }
          }
      
      mysqli_close($dcon);
      
      return $res;

    }

    public function TINGen(){
        //generates random string containing numbers, and alphabet letters in small and capital form.
      $characters = '0123456789'; 
      //'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 10; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }

}

?>
