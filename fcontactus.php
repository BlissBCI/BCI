<?php

$exampleFormControlInput1=$_POST['name'];
$exampleFormControlInput3=$_POST['subject'];
$exampleFormControlInput2=$_POST['email'];
$exampleFormControlTextarea1=$_POST['message'];

$mailheader="From:".$name."<".$email.">\r\n;

$recipient="uodaccw@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error! Cannot send mail!");

echo'message sent';

?>