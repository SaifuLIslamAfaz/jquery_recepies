<?php 
if ($_GET['what']=='good') {
	$names = array('Md','Saiful','Islam','Afaz');
	echo getHTML($names);
}elseif ($_GET['what']=='bad') {
	$names = array('mdfd','sdfsd','sdds','sdfe');
	echo getHTML($names);
}

function getHTML($names){
	$strResult = '<ul>';

	for($i=0; $i<count($names); $i++){
		$strResult .= '<li>'.$names[$i].'</li>';
	}

	$strResult .= '</ul>';

	return $strResult;
}

?>