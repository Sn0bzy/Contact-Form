<?php
/*
github.com/sn0bzy
*/

$name 	= $_POST["name"];
$mobile 	= $_POST["mobile"];
$email 		= $_POST["email"];
$message		= $_POST["message"];
$target		= "mail@example.com"; // Target Mail
$subj		= "Contact Form"; // Mail Subject
$date		= date('Y-m-d');
$ip	= $_SERVER['REMOTE_ADDR'];

if(($name=="") or ($subj =="") or ($email=="") or ($message=="")){
		
echo "<center>Please fill all blank blocks.<br><a href=index.php>Go back</a></center>";
		
}
else
{

$contactdata.="CONTACT FORM<br/><br/>";
$contactdata.="E-Mail:  ".$email."<br/>";
$contactdata.="Mobile:  ".$mobile."<br/>";
$contactdata.="Date:  ".$date."<br/>";
$contactdata.="IP:  ".$ip."<br/>";
$contactdata.="Message:  ".$message;

$sendmessage = mail($target, $subj, $contactdata, "Content-type: text/html; charset=utf-8\r\n");
		
if($sendmessage)
{

echo "<center>Mail sent successfull.<br><a href=index.php>Homepage</a></center>";
					
}
else
{
					
echo "<center>Somethings wrong.</center>";

}
}
?>