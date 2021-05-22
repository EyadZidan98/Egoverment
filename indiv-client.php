<?php 
require 'config-db.php';

session_start();
extract($_POST);


$query= "INSERT INTO `indiv_paper` (`id`, `national_id`, `passport_num`, `service`) VALUES 
(NULL, '".$nationalID."', '".$passport_num."', '".$service."')";

 mysqli_query($db,$query);
 header('Location: thank-you.php');

?>
