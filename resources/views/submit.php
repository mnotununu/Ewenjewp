<?php 
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'upload';

$fname = $_POST['fname'];
$nname = $_POST['nname'];
$male = $_POST['male'];
//$female = $_POST['female'];
$cnum = $_POST['cnum'];
$altnum = $_POST['altnum'];
$email = $_POST['email'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
//$message = $_POST['message'];


$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn === false){
	die ("ERROR unable to connect" . mysqli_connect_error()); 
}



//dumping data to SQL database from the form

$sql = "INSERT INTO `ewenjewptable` (`fname`, `nname`, `male`, `cnum`, `altnum`,`email`,`startDate`,`endDate`)
		VALUES ('$fname', '$nname', '$male' ,'$cnum', '$altnum','$email','$startDate','$endDate',)";
		
		
		
if (mysqli_query($conn, $sql)){
	 echo nl2br("<h3><br>You have succesfully added values</br></h3>");
}

else{
	echo 'Unable to insert VALUES';
}

 mysqli_close($conn);



?>
