<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="export-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="export.php">Export</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Export</h1><hr class="Hrdl">
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label class="control-label">Category</label>
					<select class="form-control">
						<option>All Categories</option>
						<option>A</option>
						<option>B</option>
						<option>C</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="control-label">Brands</label>
					<select class="form-control">
						<option>All Brands</option>
						<option>A</option>
						<option>B</option>
						<option>C</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="control-label">&nbsp;</label>
					<input type="submit" class="btn btn-primary" value="Export XLS File">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label class="control-label">Stock Status</label>
					<select class="form-control">
						<option>All Stock Status</option>
						<option>A</option>
						<option>B</option>
						<option>C</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="control-label">Product Review</label>
					<select class="form-control">
						<option>Yes</option>
						<option>No</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>