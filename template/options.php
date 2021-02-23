<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="options-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="options.php">Options</a></li>
	</ul>
	<h1>Options</h1>
	<hr class="Hrdl">
	<div class="filterBar inline-block">
		<div class="form-group orderbox">
			<label class="control-label" for="input-order-id">Option Name</label>
			<input type="text" name="optioname" value="" class="form-control" placeholder="Option Name">
		</div>
		<div class="form-group filterattrbtn">
			<div class="searchbtn">
				<button type="button" id="button-filter" class="btn btn-primary">Filter</button>
			</div>
		</div>
		<div class="form-group empty">&nbsp;</div>
		<div class="form-group newbtn">
			<a href="options_form.php" class="btn btn-warning">New</a>
		</div>
		<div class="form-group delbtn">
			<button type="button" data-toggle="tooltip" title="" class="btn btn-danger">DELETE</button>
		</div>
	</div>
	<div class="newOrders">
		<div class="mainboxlatestorder">
			<div class="table-responsive">
				<table class="table orderbox">
					<thead>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Option Name</td>
							<td class="text-center">Sort Order</td>
							<td class="text-right">Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Size</td>
							<td class="text-center">1</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Weight</td>
							<td class="text-center">2</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Area</td>
							<td class="text-center">3</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Color</td>
							<td class="text-center">4</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Height</td>
							<td class="text-center">5</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Width</td>
							<td class="text-center">6</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Length</td>
							<td class="text-center">7</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Breadth</td>
							<td class="text-center">8</td>
							<td class="text-right">
								<a href="options_form.php"><span class="eyes">&nbsp;</span></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>