<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="customer-form-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="customer_form.php">Order Details</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Customer Details</h1>
		<hr class="Hrdl">
		<div class="orderviewDetails inline-block">
			<div class="form-group" style="margin-left: 0">
				<label>Customer ID</label>
				<span>#259</span>
			</div>
			<div class="form-group">
				<label>Customer Name</label>
				<span>John Doe</span>
			</div>
			<div class="form-group">
				<label>Customer Email</label>
				<span>johndoe@gmail.com</span>
			</div>
			<div class="form-group">
				<label>Mobile Number</label>
				<span>9200123456</span>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="orderviewDetails inline-block addDetails">
			<div class="form-group" style="margin-left: 0">
				<label class="control-label">Billing Address</label>
				<span>N2R TECHNOLOGIES<br/>C6, Sector 7, Noida<br/>Uttar Pradesh<br/>201301</span>
			</div>
			<div class="form-group">
				<label>Shipping Address</label>
				<span>N2R TECHNOLOGIES<br/>C6, Sector 7, Noida<br/>Uttar Pradesh<br/>201301</span>
			</div>
		</div>
		<div class="newOrders">
			<h3 class="mHeading">Order History</h3>
			<hr class="Hrdl">
			<div class="mainboxlatestorder">
				<div class="table-responsive">
					<table class="table orderbox">
						<thead>
							<tr>
								<td class="text-left">Order ID</td>
								<td class="text-left">Date</td>
								<td class="text-left">Payment Method</td>
								<td class="text-left">Status</td>
								<td class="text-left">Shop</td>
								<td class="text-left">Products</td>
								<td class="text-left">Order Total</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
							</tr>
							<tr>
								<td class="text-left">1234</td>
								<td class="text-left">24/01/2021</td>
								<td class="text-left">Cash on delivery</td>
								<td class="text-left">Shipped</td>
								<td class="text-left">John Doe</td>
								<td class="text-left">4</td>
								<td class="text-left">₹789.43</td>
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