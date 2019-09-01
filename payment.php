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
    <link rel="stylesheet" href="dist/Styles/calculatorStyles.css">
    <script src="https://kit.fontawesome.com/f618f790f8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>TaxIt.ng || Payments</title>
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
   <div class="calculate">
        <h2>Calculate Tax</h2>
        <div class="form">
            <div class="card space">
                <label class="label">Status</label>
                <select class="input"> 
                    <option value="1">Corporate</option> 
                    <option value="2">Individual</option> 
                </select>
            </div>

                <div class="card space">
                        <label class="label">Payment Months</label>
                        <select class="input"> 
                                <option value="sept">September</option> 
                                <option value="oct">October</option> 
                                <option value="nov">November</option> 
                            </select>
                        
                    </div>
                                  
                  
                    <div class="card space">
                            <label class="label">Income Band</label>
                            <select class="input band"> 
                                    <option value="A">10k - 50k : 5%</option> 
                                    <option value="B">50k - 150k : 5.5%</option> 
                                    <option value="C">150k - 500k : 6.0%</option>
                                    <option value="D">500k - 2M : 10.0%</option>  
                                </select>
                            
                        </div>

                        <div class="btn" id="calculate">
                            Calculate
                    

                        </div>

                        <div class="card">
                                <label class="label">Amount Due</label>
                                <input type="text" class="input textinput" name="card_holder" 
                                placeholder="Amount">
                            </div>
                            

                            <div class="btn" id="submit">
                                    Proceed to Payment
        
                                </div>

        </div>

        <script>
            const calcTaxToBepaid = () => {
            let selected = document.querySelector(".band").selectedIndex;
            let amountDue = document.querySelector(".textInput");
            let tax = 0;
            if(selected === 0){
              tax = selected.value * 5 /100;
              amountDue.value = tax;
            }

            if(selected === 1){
              tax = selected.value * 5.5 /100;
              amountDue.value = tax;
            }

            if(selected === 1){
              tax = selected.value * 6 /100;
              amountDue.value = tax;
            }

            if(selected === 1){
              tax = selected.value * 10 /100;
              amountDue.value = tax;
            }
            }
        </script>

        <!-- <script type="text/javascript" src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script> -->
        <script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
        
      <script>
           document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById("submit").addEventListener("click", function(e) {
          var PBFKey = "FLWPUBK-adf65c60b671fb96815d59d3a68bd6c7-X";
          
          getpaidSetup({
            PBFPubKey: PBFKey,
            customer_email: "user@example.com",
            customer_firstname: "Dapo",
            customer_lastname: "Adewuyi",
            custom_description: "Pay VAT",
            custom_logo: "http://localhost/communique-3/skin/frontend/ultimo/communique/custom/images/logo.svg",
            custom_title: "Communique Global System",
            amount: 2000,
            customer_phone: "234809940409",
            country: "NG",
            currency: "NGN",
            txref: "start.helsinki",
            integrity_hash: "6800d2dcbb7a91f5f9556e1b5820096d3d74ed4560343fc89b03a42701da4f30",
            onclose: function() {},
            callback: function(response) {
              var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a 					server page to complete status check.
              console.log("This is the response returned after a charge", response);
              if (
                response.tx.chargeResponseCode == "00" ||
                response.tx.chargeResponseCode == "0"
              ) {
                // redirect to a success page
              } else {
                // redirect to a failure page.
              }
            }
          });
        });
      });
      </script>
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
