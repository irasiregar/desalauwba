<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">  
	<title></title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	   	
	   </script>

</head>
<body>
	<div class="container">
		<p><a class="btn btn-success" href="<?php echo site_url('Galeri/form'); ?>">Tambah</a></p>

		<div class="table-responsive">
			<table class="table table-striped">

				<thead>
					<tr>    
						<th scope="col">#</th>
						<th   scope="col">Status</th>
						<th scope="col">Jumlah</th>
						<th scope="col"></th>
					</tr>
				</thead>
		<tbody>
			<?php$pendidikan = $this->Pendidikan_m->select_db();$no = 1;foreach ($pendidikan as $row) {
				?> 
				<tr>
					<th scope="row"><?php echo $no++; ?>
						
					</th>
					<td><?php echo $row->status; ?>
						
					</td>
					<td><?php echo $row->jumlah; ?>
						
					</td>
					<td>
						
					</td>
				</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>