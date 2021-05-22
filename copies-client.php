<?php 
require 'config-db.php';

session_start();
extract($_POST);


$query= "INSERT INTO `certified_copies` (`id`, `national_id`, `service`) VALUES 
(NULL, '".$nationalID."', '".$service."')";

 mysqli_query($db,$query);
 header('Location: thank-you.php');

?>
