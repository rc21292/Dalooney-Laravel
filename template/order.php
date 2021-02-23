<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="orders-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="order.php">Orders</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Filter</h1>
		<hr class="Hrdl">
		<div class="filterBar inline-block">
			<div class="form-group orderbox">
				<label class="control-label" for="input-order-id">Order ID</label>
				<input type="text" name="filter_order_id" value="" id="input-order-id" class="form-control" />
			</div>
			<div class="form-group cusname">
				<label class="control-label">Customer Name</label>
				<input type="text" name="filter_customer" value="" class="form-control">
			</div>
			<div class="form-group proname">
				<label class="control-label">Product Name</label>
				<input type="text" name="filter_name" value="" class="form-control">
			</div>
			<div class="form-group modelname">
				<label class="control-label">Shop</label>
				<input type="text" name=""  value="" class="form-control">
			</div>
			<div class="form-group">
				<div class="searchbtn">
					<button type="button" id="button-filter" class="btn btn-primary">Search</button>
				</div>
			</div>
		</div>
		<div class="filterOrder">
			<div class="inline-block">
				<button id="all-orders" class="active btn-white">All Orders</button>
				<button id="new-orders" class="btn-white">New Orders</button>
				<button id="pending-orders" class="btn-white">Pending Orders</button>
				<button id="completed-orders" class="btn-white">Completed Orders</button>
				<button class="btn btn-primary print-btn" id="printOrderSheet"><i class="fa fa-print"></i></button>
			</div>
		</div>
		<div>&nbsp;</div>
		<div class="newOrders">
			<h3 class="mHeading">New Orders</h3>
			<hr class="Hrdl">
			<div class="mainboxlatestorder">
				<div class="table-responsive">
					<table class="table orderbox">
						<thead>
							<tr>
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
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-warning ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-warning ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-success ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-danger ">.</span></td>
								<td class="text-center">233</td>
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
								<td class="text-center"><span class="label label-warning ">.</span></td>
								<td class="text-center">233</td>
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
	</div>
</div>