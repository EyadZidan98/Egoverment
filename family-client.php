<?php 
require 'config-db.php';

session_start();
extract($_POST);


$query= "INSERT INTO `family_paper` (`id`, `national_id`, `family_num`, `service`) VALUES 
(NULL, '".$nationalID."', '".$family_num."', '".$service."')";

 mysqli_query($db,$query);
 header('Location: thank-you.php');

?>
