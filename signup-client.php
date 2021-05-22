<?php 
require 'config-db.php';

session_start();
extract($_POST);

$mdpass= md5($pass);


$query= "INSERT INTO `sign_up` (`id`, `national_id`, `f_name`, `m_name`, `l_name`,`email`,`phone`,`password`) VALUES 
(NULL, '".$nationalID."', '".$f_name."', '".$m_name."','".$l_name."','".$email."','".$phone."','".$mdpass."')";

 mysqli_query($db,$query);
 header('Location: index-php.php');

?>
