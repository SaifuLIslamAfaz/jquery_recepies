<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
	body{font-family: "Trbuchet MS",Verdana,Arial; width: 555px;}
	input,textarea{vertical-align: top;}
	label{float: left; width: 150px;}
	#error{font-weight: bold; color:#ff0000;}
</style>
<script src=""></script>
<body>
<form>
	
	<fieldset>
		<legend><strong>Check user</strong></legend>
			<form action="" method="post" id="loginForm">
				<p>
					<label>Username</label>
					<input type="text" name="loginName" id="loginName">
					<a href="#" id="check"><strong>Check</strong></a>
					<span id="status" style="float: right;"></span>
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="password">
				</p>
				<p>
					<span id="error"></span>
				</p>
				<p>
					<input type="submit" value="save" name="dos" id="dosave">
				</p>
			</form>
		
	</fieldset>
</form>
</body>

<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		var checked = false;
		$('#check').click(function()
		{
			$('#error').empty();
			var inputValue = $('#loginName').val();
			if (jQuery.trim(inputValue)=='') { return false;}
			$.post(
				'check.php',
				{username: inputValue},
				function(data)
				{
					if (data) {
						checked = true;
						$('#status').html("Username is available");
					}
					else
					{
						checked = false;
						$('#status').html("Username is not available");
						return false;
					}
				}
				);
		});

		$('#loginForm').submit(function()
		{
			if (checked == false)
			{
				$('#error').html('Kindly check the username');
				return false;
			}
			else
			{
				return true;
			}
		});

		$('#loginName').focus(function()
			{
				checked == false;
			});
	});
</script>

</html>