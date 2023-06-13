<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cek Username dengan jQuery Ajax dan PHP</title>
	<style>
		body{
			background: #FFFFFF;
			font-size: 16px;
		}
		.container{
			max-width: 500px;
			background: #2BC5D4;
			padding: 20px;
			margin: 150px auto;
		}
		label{
			display: inline-block;
			width: 100px;
		}
	</style>

	<script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$('#username').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var username = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'proses.php',
				data 	: 'username='+username,
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});
	</script>

</head>
<body>
	
	<div class="container">

		<div class="jwForm registrasi">
			<h1 align="center">Registrasi User Baru</h1>
			<p>
				<label for="username">Username</label> 
				<input type="text" id="username">
				<span id="pesan"></span>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<label for="password">Full Name</label>
				<input type="text" id="fullname">
			</p>
			<p>
				<label for="phone">Phone</label>
				<input type="phone" id="phone">
			</p>
			<p>
				<input type="submit" value="Daftarkan">
			</p>
		</div>

		

	</div>

</body>
</html>