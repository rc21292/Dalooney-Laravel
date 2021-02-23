<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="customer-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="order.php">Orders</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Filter</h1>
		<hr class="Hrdl">
		<div class="filterBar inline-block">
			<div class="form-group orderbox">
				<label class="control-label" for="input-order-id">Shop ID</label>
				<input type="text" name="" value="" id="input-order-id" class="form-control" />
			</div>
			<div class="form-group cusname">
				<label class="control-label">Shop Owner</label>
				<input type="text" name="" value="" class="form-control">
			</div>
			<div class="form-group proname">
				<label class="control-label">Shop Name</label>
				<input type="text" name="" value="" class="form-control">
			</div>
			<div class="form-group modelname">
				<label class="control-label">Mobile No.</label>
				<input type="text" name="" value="" class="form-control">
			</div>
			<div class="form-group shopname">
				<label class="control-label">Plan Status</label>
				<select class="form-control">
					<option>Running</option>
					<option>Expired</option>
				</select>
			</div>
			<div class="form-group">
				<div class="searchbtn">
					<button type="button" id="button-filter" class="btn btn-primary">Search</button>
				</div>
			</div>
		</div>
		<div class="filterOrder">
			<div class="inline-block">
				<button class="active btn btn-white">All Shops</button>
				<button class="btn btn-white">Approved Shops</button>
				<button class="btn btn-white">Unapproved Shops</button>
				<button class="btn btn-danger btn-delete">Delete</button>
			</div>
		</div>
		<div class="newOrders">
			<h3 class="mHeading">Shops</h3>
			<hr class="Hrdl">
			<div class="mainboxlatestorder">
				<div class="table-responsive">
					<table class="table orderbox">
						<thead>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Status</td>
							<td class="text-left">Shop Owner</td>
							<td class="text-left">Shop Name</td>
							<td class="text-left">Mobile Number</td>
							<td class="text-left">Plan</td>
							<td class="text-left">Valid upto</td>
							<td class="text-left">Price</td>
							<td class="text-left">Plan Status</td>
							<td class="text-right">Action</td>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopRunning">Running</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-warning ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopExpired">Expired</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopRunning">Running</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopRunning">Running</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopExpired">Expired</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopExpired">Expired</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopRunning">Running</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox" name=""></td>
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-left">John Doe</td>
								<td class="text-left">Trendline Store</td>
								<td class="text-left">9200123456</td>
								<td class="text-left">Trail</td>
								<td class="text-left">02/02/2021</td>
								<td class="text-left">₹499</td>
								<td class="text-left shopExpired">Expired</td>
								<td class="text-right"><a href="shop_details.php"><span class="eyes">&nbsp;</span></a></td>
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
</div>	