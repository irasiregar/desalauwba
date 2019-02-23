<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">  
	<title>Input Data Pendidikan</title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<p><a class="btn btn-info" href="<?php echo site_url('Pendidikan');?>">Data Pendidikan</a></p>

	<form method="post" action="<?php echo site_url('Pendidikan/insert');?>">
		<div class="form-group">
			<label for="usr">Status:</label><input type="text" class="form-control" name="in_status">
		</div>

		<div class="form-group">
			<label for="usr">Jumlah:</label><input type="text" class="form-control" name="in_jumlah">
		</div>

		<button class="btn btn  -success" type="submit">Simpan</button></form>
	</div>
</body>
</html>