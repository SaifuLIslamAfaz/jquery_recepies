<?php

$responseString = 'Dear <b>'.$_POST['fullName'].'</b>,Your Contact Information Has Been Saved.!';
$responseString.="You endtered the following Information";
$responseString.='</br>';
$responseString.='<strong>E-mail:</strong>  '.$_POST['email'];
$responseString.='</br>';
$responseString.='<strong>Sex : </strong>'.$_POST['sex'];
$responseString.='</br>';
$responseString.='<strong>Country : </strong>'.$_POST['country'];
header('Content-type:text/html');
echo $responseString;