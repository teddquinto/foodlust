<?php

session_start();
@$admin = $_SESSION['admin'];
$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

$id =$_GET['id'];

$sql = "SELECT * FROM users WHERE user_id ='$id' ";
$result =mysqli_query($connect,$sql);

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
  
}

$header =
'<html>
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
	
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">'.$name.'</span><br />'.$address.'<br />'.$b_name.'<br />'.$email.'<br /><span style="font-family:dejavusanscondensed;">&#9742;</span> '.$num.'</td>
<td width="50%" style="text-align: right;"><img src ="../../users_ui/img/uploads/'.$profile.'" style="width:180px; height:90px;" /></td>
</tr></table>
</htmlpageheader>



<sethtmlpageheader name="myheader" value="on" show-this-page="1" />

mpdf-->
 <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td width="15%">Users activity</td>
<td width="15%">Number of activity done</td>


</tr>
</thead>

 ';

  $sql3 = "SELECT DISTINCT action FROM activity_log  WHERE name ='$name' ";
$result3 = mysqli_query($connect,$sql3);



 while($row2 = mysqli_fetch_array($result3)){
 $actions = $row2['action'];

	  		$sql2 = "SELECT COUNT('id') as dd,action FROM activity_log  WHERE name = '$name' AND action = '$actions' ";
			$result2 = mysqli_query($connect,$sql2);
			 while($row2 = mysqli_fetch_array($result2)){
	  			    
      $ddd = $row2['dd'];
      // $date = $row2['date'];
      // $dd = strtotime($date);
      $action = $row2['action'];
     $ac = preg_replace('/\s+/S', "", $action);
  
 $header .='
 <tbody>
<tr>
<td align="center">'.$ac.'</td>
<td align="center">'.$ddd.'</td>
</tr>
 </tbody>



';
}
}
$header .='</table>';


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



$mpdf->WriteHTML($header);


$mpdf->Output();



}
?>