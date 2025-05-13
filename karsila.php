<?php
$gercekUname = "G231210059";
$gerceksifre = "3812572isA";
$username = $_POST['uname'];
$password = $_POST['sifre'];
if($gercekUname == $username && $gerceksifre == $password)
{echo "Giriş Başarılı".$gercekUname;}
else{
    echo "Giriş Başarısız";
}
?>
