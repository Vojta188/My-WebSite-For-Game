<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];

$txtMessage = $_POST['txtMessage'];

$htmlodeslat = "Contact.html";





// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include 'zprava.html';
}

?>
