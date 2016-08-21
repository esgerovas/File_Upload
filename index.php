<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
	<style type="text/css">
		h2{
			text-align: center;
			color:#337AB7;
		}
		h3{
			text-align: center;
			margin-top:50px;
		}
		.btn{
			margin-top:15px;
		}
		img{
			width:100px;
			margin:0 auto;
		}
		td,th{
			font-size:16px;
		}
		.form-control-file{
			color:#337AB7;
		}
	</style>
</head>
<body>
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2>Registration</h2>
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<fieldset class="form-group">
							<label>Your Name:</label>
							<input type="text" class="form-control" name="name" placeholder="Enter name">
						</fieldset>
						<fieldset class="form-group">
							<label>Place:</label>
							<input type="text" class="form-control" name="place" placeholder="place">
						</fieldset>
						<fieldset class="form-group pull-left">
							<label>Picture:</label>
							<input type="file" class="form-control-file" name="picture" >
						</fieldset>
						<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
					</form>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<h3>Registration List</h3>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Place</th>
								<th>Picture</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						if(filesize('list.txt') != 0){
						$list = [];
						$list = explode("@@@", file_get_contents('list.txt'));
						foreach ($list as $key => $value) {
							$list[$key] = explode('|', $value);
						}
						
						 foreach ($list as $key => $value) {?>
						 	<tr>
								<td><?=$list[$key][0] ?></td>
								<td><?=$list[$key][1] ?></td>
								<td><img class="img-responsive" src='<?=$list[$key][2] ?>'></td>
							</tr>
						<?php  }}?>
						</tbody>
					</table>
				</div>
			</div><!-- row -->
		</div><!-- container -->		
	</section>
</body>
<script type="text/javascript" src="assets/jquery-3.1.0.min.js"></script>
<script  type="text/javascript">

</script>
</html>