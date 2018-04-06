
<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';



 echo "
  <div class ='fil'>

         <button style ='color:black;'  class='table1' id='change_pass'>Change Password</button>
         
         <button style ='color:black;'  class='table3' id='terms'>Guide for the Terms And Policies</button>
          <button style ='color:black;'  class='table4' id='fl'>Foodlust</button>
       

        </div>";

echo '<script type="text/javascript" src="js/dashboard.js"></script>';



echo '


<h1>TERM AND POLICIES FOR FOODLUST:</h1><br>

                    This agreement was written in English (US).To the extent any translated version of this agreement conflicts with the English version, the English version controls. 

 Date of Last Revision: August 17, 2017
<br><br>
  <h2>I.Acceptance</h2> 
   You acknowledge and agree that these Terms of Use of the Foodlust terms and conditions will govern your access or use of the foodlust system accessible via internet or the web. In addition to the Terms of Use and Privacy Policy (the “Terms”) accessible at the registration of account which you have previously consented to and are now bound to when you registered as a member of FOODLUST community, you also consent to be bound by the following Terms:
<br><br>



<h2>II.DESCRIPTION OF SERVICE AND GENERAL TERMS OF USE FOR USERS</h2><br>

<h4>BUYERS:</h4><br>
1.	The Service is an online venue catering to interested sellers and buyers, inquiring about an item or service, in full coordination with the advertisement seller and buyers only.<br>
2.You acknowledge and agree that the information you add for the inquiry will be used by the system to pinpoint your location and use for its authenticity.<br>
3. You acknowledge and agree that when a seller clickes the preferred button ,he/she is ready for offers or your product is already in auction.<br>
4. You as the owner is still in control on who you want to transact with. <br>
5. You acknowledge and agree that your personal information will be used as the validation of the system for your business and your posts in the system. 
<br>
6. You have the capacity to ask for event organizing by just sending an email to us using our email foodlust2017@gmail.com.
<br>
7.You understand and agree that the sale is strictly between yourself and the seller.  Foodlust is not a party to your sale nor  it is responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the seller. 
<h4>SELLERS:</h4><br>
1.You acknowledge and agree that when you click the "interested" button you are bidding on the buyer\'s post and it  does not result in the sale of the item nor an agreement on the part of the seller to deliver the item<br>
2.You acknowledge and agree that your personal information will be used  for validity and tracking of your actions in the system.
3. You acknowledge and agree that the system will not be liable for any failed transaction you conducted within the system.<br>
4. 	You understand and agree that the sale is strictly between yourself and the buyer.  Foodlust is not a party to your sale nor it is responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the buyer. 
<br>
5.Should you, as a seller, agrees on the terms in registration, you agree to grant Foodlust complete access to activity log for the purpose of tracking malicous doing.<br>



<h2> III. DISCLAIMER</h2>
<br><br>
1. Foodlust takes no responsibility for any action done directly or indirectly based on terms, information, content and service within the system. Foodlust does not guarantee and will not be held responsible for any damage or loss affiliated to the product endorsed that is found within our system.
<br>
2. Foodlust shall not be counted as liable for any incidental or accidental damage and will not guarantee accountability for any loss or expense that resulted from misuse of information whether based on violation of contract of the seller to its products liability and credibility.
<br>
3. Foodlust may/can include links that may direct to external systems. Foodlust has no responsibility, whatsoever related to the system used to direct to external links and with that, will be counted as the consumer\'s own responsibility and risk.
<br>
4. With regards to the warrant given to the content information, products included and specified in the system, Foodlust disown all couriers and implied warranties related to the content, service and information included in the system including without limitation of any given warranty of the products. All provided information are "the same" and "available" without any accustomed warranty of any kind.
<br>












';





?>
<!-- <script type="text/javascript" src="form_jquery.js"></script> -->
