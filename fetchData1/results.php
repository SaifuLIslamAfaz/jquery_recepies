<?php
	$mysqli = new mysqli('localhost','root','','lajax');
	$resultStr ='';
	$query = 'SELECT * FROM functions WHERE languageId='.$_GET['id'];
	if ($result = $mysqli->query($query))
	{
		if($result->num_rows > 0)
		{
			$resultStr .='<ul>';
			while($row = $result->fetch_assoc())
			{
				$resultStr .='<li><strong>'.$row['functionName'].'</strong>-'.$row['summary'];	
				$resultStr .='<div><pre>'.$row['examle'].'</pre></div>';	
				$resultStr .='</li>';	
			}
			$resultStr .='</ul>';
		}
		else
		{
			$resultStr .='Nothing Is found';
		}
	}
	echo $resultStr;
?>