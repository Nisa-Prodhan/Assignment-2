<?php
echo"Registration Successful";
$user=$_POST['un'];
$full=$_POST['fn'];
$email=$_POST['ue'];
$phone=$_POST['up'];
$pass=$_POST['pw'];
$cpass=$_POST['cpw'];
$gen=$_POST['gen'];
$edu=$_POST['edu'];

echo "username :".$user;
echo "<br>fullname :".$full;
echo "<br>email :".$email;
echo "<br>phone :".$phone;
echo "<br>pass :".$pass;
echo "<br>confirmpass :".$cpass;
echo "<br>gen:".$gen;
echo "<br>Education:";
foreach($edu as $e)
{
	echo $e."<br>";
}

?>