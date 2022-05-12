<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  mysql_connect('localhost','root','ajnugodly');
  mysql_select_db('food_apex');
  $select=mysql_query("update sign_up set password='$pass' where email='$email'");
}
?>