<?php 

$fname = $_POST['fname'];
$nname = $_POST['nname'];
$email = $_POST['email'];
$cnum = $_POST['cnum'];
$address = $_POST['address'];
$altnum = $_POST['altnum'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$days_rented = $_POST['days_rented'];
$total_price_Ship = $_POST['total_price_Ship'];
$total_price_noShip = $_POST['total_price_noShip'];
$formcontent="Name:$fname \n Nickname $nname \n Email:$email \n Cell: $cnum \n Alt Cell: $altnum
 \n Start Date: $startDate \n End Date: $endDate \n Days rented: $days_rented \n Address: $address \n Price with shipment: $total_price_Ship \n Price without shipment: $total_price_noShip";
$recipient = "admin@ewenjewp.co.za";
$subject =  'RENTAL NOTIFICATION';
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Ola! thank you rental enquiry, we will contact you before we deliver your stand, MOJO! ";

?>

