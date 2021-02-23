<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="products-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="product.php">Products</a></li>
	</ul>
	<h1>Filter</h1>
	<hr class="Hrdl">
	<div class="filterBar inline-block">
		<div class="form-group orderbox">
			<label class="control-label" for="input-order-id">Product ID</label>
			<input type="text" name="filter_order_id" value="" id="input-order-id" class="form-control">
		</div>
		<div class="form-group cusname">
			<label class="control-label">Product Code</label>
			<input type="text" name="" value="" class="form-control">
		</div>
		<div class="form-group proname">
			<label class="control-label">Product Name</label>
			<input type="text" name="" value="" class="form-control">
		</div>
		<div class="form-group modelname">
			<label class="control-label">Price</label>
			<input type="text" name="filter_model" value="" class="form-control">
		</div>
		<div class="form-group">
			<div class="searchbtn">
				<button type="button" id="button-filter" class="btn btn-primary">Search</button>
			</div>
		</div>
	</div>
	<div class="filterOrder">
		<div class="inline-block">
			<button class="active btn btn-white">All Products</button>
			<button class="btn btn-white">Enable</button>
			<button class="btn btn-white">Disable</button>
			<a href="product_form.php" class="add-product btn btn-warning">Add New Product</a>
			<button class="btn btn-danger btn-delete">Delete</button>
		</div>
	</div>
	<div class="newOrders">
		<h3 class="mHeading">New Orders</h3>
		<hr class="Hrdl">
		<div class="mainboxlatestorder">
			<div class="table-responsive">
				<table class="table orderbox">
					<thead>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center">Status</td>
							<td class="text-left">Order ID</td>
							<td class="text-left">Customer</td>
							<td class="text-left">Products</td>
							<td class="text-left">Shop</td>
							<td class="text-center">Delivery Date</td>
							<td class="text-center">Amount</td>
							<td class="text-right">Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-warning ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-danger ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-warning ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-danger ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-success ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-danger ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
						</tr>
						<tr>
							<td class="text-center"><input type="checkbox" name=""></td>
							<td class="text-center"><span class="label label-warning ">.</span></td>
							<td class="text-left">233</td>
							<td class="text-left">Sanjeev Kumar</td>
							<td class="text-left productLot">
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<a href="#"><img src="image/sample-product.png" title=""></a>
							<span class="plusMore">+ 1 More</span>
							</td>
							<td class="text-left">Trendline Products</td>
							<td class="text-center">04/02/2021</td>
							<td class="text-center">₹190.32</td>
							<td class="text-right"><a href="order_details.php"><span class="eyes">&nbsp;</span></a></td>
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