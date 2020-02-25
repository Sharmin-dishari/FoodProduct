<?php
require "connect.php";

$fname=$_POST['fname'];
if(filter_var($fname>='A'&&$fname<='Z'||$fname>='a'&&$fname<='z')==TRUE){
$lname=$_POST['lname'];
if(filter_var($lname>='A'&&$lname<='Z'||$lname>='a'&&$lname<='z')==TRUE){
$email=$_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)==TRUE){
$cnum=$_POST['cnum'];
$transnum=$_POST['transnum'];
$paddress=$_POST['paddress'];
$daddress=$_POST['daddress'];
$ddddddd=$_POST['date'];
$city=$_POST['city'];
$status='Pending';
$total=$_POST['ototal'];
$dmethod=$_POST['sdsd'];
$pmethod=$_POST['pmethod'];
if($pmethod=='BDO'){
$accountnum='2617 2008 1809 2224';
}
else if($pmethod=='Metro Bank'){
$accountnum='1722 0629 1418 2308';
}
else if($pmethod=='Smart Padala'){
$accountnum='1211 5623 1973 2189';
}
else if($pmethod=='Cash On Delivery'){
$accountnum='Cash On Delivery';
}
mysqli_query($conn,"INSERT INTO reservation (firstname, lastname, city, address, email, contact, confirmation, status, payable, delivery, date, payment, delivery_type) VALUES ('$fname','$lname','$city','$paddress','$email','$cnum','$transnum','$status','$total','$daddress','$ddddddd','$pmethod','$dmethod')");



header("location: print.php?id=$transnum");
}
else{
	echo"please insert valid email";
}
}
else{
	echo"please insert valid name";
}
}else{
	echo"please insert valid name";
}



echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From Genesis Print stuff";
$mail_Body = "First Name: $fname\n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Country: $country \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ";
mail($mail_To, $mail_Subject, $mail_Body);

?>