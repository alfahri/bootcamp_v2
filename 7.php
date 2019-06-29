<?php error_reporting(0); include('query.php') ?>
<!DOCTYPE html>
<head>
	<title>Tes Bootcamp</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<bpdy>
	<div class="col-lg-6" style="margin:40px 340px;background-color:white;">
		<div class="col-lg-12 text-right">
			<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
		</div>
		<!-- MODAL -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<form method="post">
							<input type="text" placeholder="Name" name="nama" class="form-control form-group">
							<select name="hobby" class="form-control form-group">
								<option value="Hobby" selected="true">Hobby</option>
								<?php foreach($rows4 as $x){ ?>
								<option value="<?php echo $x->id ?>"><?php echo $x->nama ?></option>
								<?php } ?>
							</select>
							<select name="category" class="form-control form-group">
								<option value="Category" selected="true">Category</option>
								<?php foreach($rows5 as $x){ ?>
								<option value="<?php echo $x->id ?>"><?php echo $x->nama ?></option>
								<?php } ?>
							</select>
							<div class="text-right">
								<input type="submit" name="tambah" class="btn btn-warning btn-md" value="ADD">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
		<!-- END MODAL -->
		<div class="col-lg-12" style="padding:25px 0px;">
			<table class="table table-bordered">
				<th>Name</th>
				<th>Hobby</th>
				<th>Category</th>
				<th>Action</th>
				<?php foreach($rows2 as $x){ ?>
				<tr>
					<td><?php echo $x->nama ?></td>
					<td><?php echo $x->hobi ?></td>
					<td><?php echo $x->kategory ?></td>
					<td><button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#editModal<?php echo $x->id ?>">Edit</button>&nbsp;<a href="delete.php?id=<?php echo $x->id ?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<!-- MODAL -->
				<?php } ?>
				<?php

				$query2 = 'SELECT nama.nama as nama, nama.id as id, hobi.nama as hobi, kategory.nama as kategory FROM nama INNER JOIN kategory ON kategory.id = nama.id_category INNER JOIN hobi ON hobi.id = nama.id_hobby WHERE nama.id = '.$x->id.'';
				$result_select3 = mysqli_query($con, $query2) or die(mysqli_error());
				$rows3 = array();
				while($row3 = mysqli_fetch_object($result_select3))
					$rows3[] = $row3;

				?>
				<?php foreach($rows3 as $x){ ?>
				<div class="modal fade" id="editModal<?php echo $x->id ?>" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Modal Header</h4>
							</div>
							<div class="modal-body">
								<form>
									<input type="text" placeholder="Name" name="nama" class="form-control form-group" value="<?php echo $x->nama ?>">
									<select name="hobby" class="form-control form-group">
										<option value="Hobby">Hobby</option>
										<option value="<?php echo $x->hobi ?>" selected="true"><?php echo $x->hobi ?></option>
									</select>
									<select name="category" class="form-control form-group">
										<option value="Category">Category</option>
										<option value="<?php echo $x->kategory ?>" selected="true"><?php echo $x->kategory ?></option>
									</select>
									<div class="text-right">
										<input type="submit" class="btn btn-warning btn-md" value="ADD">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>
				<!-- END MODAL -->
				<?php } ?>
			</table>
		</div>
		<?php 
		if($_POST['tambah']){
			$nama = $_POST['nama'];
			$hobi = $_POST['hobby'];
			$kategory = $_POST['category'];
			$query_t = mysqli_query($con, "INSERT INTO nama (nama, id_hobby, id_category) VALUES('$nama', '$hobi', '$kategory')")or die(mysqli_error());
			?><script>window.location=""</script><?php
		}
		?>
	</div>
</bpdy>
</html>