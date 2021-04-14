<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
	body{font-family: "Trbuchet MS",Verdana,Arial; width: 600px;}
	div{background-color: #f5f5dc;}
</style>
<script src=""></script>
<body>
<?php 
	$mysqli = new mysqli('localhost','root','','lajax');
	if(mysqli_connect_errno())
	{
		die('Unable to connect');
	}
	else
	{
		$query = 'SELECT * FROM language';

		if($result = $mysqli->query($query))
		{
			if($result->num_rows > 0 ){
		?>

		<p> Select a Language
			<select id="selectLanguage">
				<option>Select Language</option>
  <?php
  	 	while($row = $result->fetch_assoc()){ ?>
  	 	

  	 	<option value="<?php echo $row['id'];?>"><?php echo $row['languageName'];?></option>
  	 <?php } ?>

  	 </select>
  	 	</p>
  	 	<p id="result"> </p>

  	 	<?php  
		}
		else
		{
			echo "No records found!";
		}
		$result->close();
		}
		else
		{
			echo 'Error in query: $query'.$mysqli->error;
		}
	}
	$mysqli->close();
  ?> 

</body>


<script type="text/javascript" src="../jquery.js"></script>
<script>
	$(document).ready(function()
	{
		$('#selectLanguage').change(function()
		{
			if ($(this).val()=='') return;
			$.get(
					'results.php',
					{id:$(this).val() },
					function(data)
					{

						$('#result').html(data);
					}
				);
		});
	});
</script>
</html>