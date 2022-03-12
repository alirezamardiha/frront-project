<?php
include "../setting/setting.php";
if( isset( $_POST['submit'] ) )
{ 
header('Content-Type: text/html; charset=utf-8');
$Fname =$_POST['Fname'];
$Lname =$_POST['Lname'];
$phonenumber =$_POST['phonenumber'];
$email =$_POST['email'];
$password =$_POST['password'];
$DB=new mysqli($host, $user, $pass, $DBname);
mysqli_query($DB, "SET NAMES utf8");
$sql = "UPDATE user SET
            Fname = '{$_POST['Fname']}',
            Lname = '{$_POST['Lname']}',
            phonenumber = '{$_POST['phonenumber']}',
            email = '{$_POST['email']}',
            password = '{$_POST['password']}'";
$result = $DB -> query($sql);
$DB-> close();
echo 'با موفقیت درج شد';
}
else
{
    include 'edit.php';
}
?>