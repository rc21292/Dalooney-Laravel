<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="category-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
	</ul>
	<h1>Filter</h1>
	<hr class="Hrdl">
	<div class="filterBar inline-block">
		<div class="form-group orderbox">
			<label class="control-label" for="input-order-id">Category ID</label>
			<input type="text" name="filter_order_id" value="" id="input-order-id" class="form-control">
		</div>
		<div class="form-group cusname">
			<label class="control-label">Category Name</label>
			<input type="text" name="" value="" class="form-control">
		</div>
		<div class="form-group">
			<div class="searchbtn">
				<button type="button" id="button-filter" class="btn btn-primary">Search</button>
			</div>
		</div>
	</div>
	<div class="filterOrder">
		<button class="active btn btn-white">All Categories</button>
		<a href="category_form.php" class="add-product btn btn-warning">Add New Category</a>
		<button class="btn btn-danger btn-delete">Delete</button>
	</div>
	<div class="newOrders">
		<h3 class="mHeading">Categories</h3>
		<hr class="Hrdl">
		<div class="mainboxlatestorder">
			<div class="table-responsive">
				<table class="table orderbox">
					<thead>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Status</td>
							<td class="text-center">Image</td>
							<td class="text-left">Category Name</td>
							<td class="text-center">Sort Order</td>
							<td class="text-right">Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
							<td class="text-left">Lorem Ipsum</td>
							<td class="text-center">2</td>
							<td class="text-right"><a href="category_form.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-warning ">.</span></td>
							<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
							<td class="text-left">Lorem Ipsum</td>
							<td class="text-center">2</td>
							<td class="text-right"><a href="category_form.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
							<td class="text-left">Lorem Ipsum</td>
							<td class="text-center">2</td>
							<td class="text-right"><a href="category_form.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-danger ">.</span></td>
							<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
							<td class="text-left">Lorem Ipsum</td>
							<td class="text-center">2</td>
							<td class="text-right"><a href="category_form.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
							<td class="text-left">Lorem Ipsum</td>
							<td class="text-center">2</td>
							<td class="text-right"><a href="category_form.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row pgd width100">
		<div class="col-sm-6">
			<div class="inline-block">
				<label>Page Display:</label>
				<select class="form-control btn-white" id="paginationURL">
					<option value="1" selected="selected">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
		</div>
		<div class="col-sm-6">
			<ul class="pagination pull-right">
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#" class="next">&gt;</a></li>
				<li><a href="#">&gt;|</a></li>
			</ul>
		</div>
	</div>
</div>