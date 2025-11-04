<?php

$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$user_confirm_password=$_POST['user_confirm_password'];
$country_name=$_POST['country_name'];
$gender=$_POST['gender'];

if($user_name=='')
{
echo "Please enter your name <a href='reg_form.html'> GO BACK </a> ";
exit();
}

if($user_email=='')
{
echo "Please enter your email <a href='reg_form.html'> GO BACK </a> ";
exit();
}

if($user_password=='')
{
echo "Please enter your password <a href='reg_form.html'> GO BACK </a> ";
exit();
}

if($user_confirm_password=='')
{
echo "Please confirm your password <a href='reg_form.html'> GO BACK </a> ";
exit();
}

if($country_name=='null')
{
echo "Please choose your country <a href='reg_form.html'> GO BACK </a> ";
exit();
}

if($gender=='null')
{
echo "Please choose your gender <a href='reg_form.html'> GO BACK </a> ";
exit();
}

echo "Your name is $user_name <br />";
echo "Your email is $user_email <br />";
echo "Your password is $user_password <br />";
echo "Your confirm password is $user_confirm_password <br />";
echo "Your country is $country_name <br />";
echo "Your gender is $gender <br />";

?>