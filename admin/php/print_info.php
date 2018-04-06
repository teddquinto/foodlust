<?php

session_start();
@$admin = $_SESSION['admin'];


require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

$id = $_GET['id'];







$sql = "SELECT * FROM users WHERE user_id ='$id' ";
$result =mysqli_query($connect,$sql);

 $html = '<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>
</head>
<body>
';

while ($row = mysqli_fetch_assoc($result)) {
	
		   $id = $row['user_id']; 
        $lname = $row['lname'];
        $fname = $row['fname'];
        $name = $lname ." ". $fname;
        $profile = $row['user_profile'];
        $address = $row['address'];
        $b_name = $row['business_name'];
        $num = $row['cp_num'];
        $email = $row['email'];
        $type = $row['type_of_user'];
        $b_info = $row['b_info'];
  

  $html .= '
  		
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">'.$name.'</span><br />'.$address.'<br />'.$b_name.'<br />'.$email.'<br /><span style="font-family:dejavusanscondensed;">&#9742;</span> '.$num.'</td>
<td width="50%" style="text-align: right;"><img src ="../../users_ui/img/uploads/'.$profile.'" style="width:180px; height:90px;" /></td>
</tr></table>
</htmlpageheader>



<sethtmlpageheader name="myheader" value="on" show-this-page="1" />

mpdf-->
';

      }


  $html .= '
  <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td width="15%">product posted</td>
<td width="15%">Visited Site</td>
<td width="15%">Reported User</td>
<td width="15%">User Transaction</td>

</tr>
</thead>';




$sql2 = "SELECT COUNT(prod_id) as prod FROM product_post WHERE user_seller_id = '$id'";
$result2 =mysqli_query($connect,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {
$prod =$row2['prod'];
// $user_r = $row2['user_reason'];


$sql = "SELECT COUNT(id) as viewed FROM activity_log WHERE name ='$name' AND action = 'Logged In' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
//     $id = $row['user_id']; 
        $viewed = $row['viewed'];
//         $fname = $row['fname']; 
//         $email = $row['email']; 
//         $contact = $row['cp_num']; 
//         $address = $row['address']; 

$sql3 = "SELECT COUNT(id) as report FROM reports_user WHERE user_id = '$id' ";
$result3 =mysqli_query($connect,$sql3);

while ($row3 = mysqli_fetch_assoc($result3)) {
  $report = $row3['report'];


  $sql4 = "SELECT COUNT(c_id) as conv FROM conversation WHERE from_id = '$id' OR to_id = '$id' ";
$result4 =mysqli_query($connect,$sql4);

while ($row4 = mysqli_fetch_assoc($result4)) {
  $conv = $row4['conv'];


             $html .= '<tbody>
<!-- ITEMS HERE -->
<tr>
<td align="center">'.$prod.'</td>
<td align="center">'.$viewed.'</td>
<td align="center">'.$report.'</td>
<td align="center">'.$conv.'</td>

</tr>';

   }
   }
}
}

$html .= "</table>";  
 

// define('_MPDF_PATH','../');	
require "../../pdf/mpdf.php";



$mpdf=new mPDF('c','A4','','',20,15,48,25,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("FOODLUST USER");
$mpdf->SetAuthor("NAME");
$mpdf->SetWatermarkText("user");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');



$mpdf->WriteHTML($html);


$mpdf->Output();

}
?>