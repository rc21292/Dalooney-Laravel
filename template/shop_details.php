<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="shop-details-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="order.php">Orders</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Shop Details</h1>
		<hr class="Hrdl">
		<ul class="nav nav-tabs">
			<li style="margin-left: 0" class="active"><a href="#tabShop" data-toggle="tab">Shop Owner</a></li>
			<li><a href="#tabData" data-toggle="tab">Data</a></li>
			<li><a href="#tabProducts" data-toggle="tab">Products</a></li>
			<li><a href="#tabKyc" data-toggle="tab">KYC Documents</a></li>
			<li><a href="#tabSubs" data-toggle="tab">Subscription</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tabShop">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">First Name</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Last Name</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Contact</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Pincode</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">City</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">State</label>
							<select class="form-control">
								<option>Please Select State</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Approval</label>
							<select class="form-control">
								<option>Please Select</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Status</label>
							<select class="form-control">
								<option>Please Select Status</option>
								<option>Running</option>
								<option>Expired</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Profile Image</label>
							<div class="file-area">
								<input type="file" name="images" id="images" multiple="multiple">
								<div class="file-dummy">
									<div class="success">Great, your file is uploaded.</div>
									<div class="default">Upload Logo</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabData">
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							<label class="control-label">Shop Name</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="control-label">Shop Description</label>
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Pincode</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">City</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">State</label>
							<select class="form-control">
								<option>Please Select</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<div class="form-group">
									<label class="control-label">Banner</label>
									<div class="file-area">
										<input type="file" name="images" id="images" multiple="multiple">
										<div class="file-dummy">
											<div class="success">Great, your file is uploaded.</div>
											<div class="default">Upload Banner</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-6">
								<div class="form-group">
									<label class="control-label">Logo</label>
									<div class="file-area">
										<input type="file" name="images" id="images" multiple="multiple">
										<div class="file-dummy">
											<div class="success">Great, your file is uploaded.</div>
											<div class="default">Upload Logo</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabProducts">
				<div class="newOrders">
					<h3 class="mHeading">Edit Product</h3>
					<hr class="Hrdl">
					<div class="mainboxlatestorder">
						<div class="table-responsive">
							<table class="table orderbox">
								<thead>
									<tr>
										<td class="text-center">Status</td>
										<td class="text-center">Image</td>
										<td class="text-left">Product Name</td>
										<td class="text-left">Product Code</td>
										<td class="text-left">Price</td>
										<td class="text-right">Action</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center"><span class="label label-success ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-warning ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-danger ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-success ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-danger ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-warning ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-success ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-warning ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-warning ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
									</tr>
									<tr>
										<td class="text-center"><span class="label label-danger ">.</span></td>
										<td class="text-center"><a href="#"><img style="max-width: 50px" src="image/sample-product.png" title=""></a></td>
										<td class="text-left">Lorem Ipsum dolor set amet</td>
										<td class="text-left">1234</td>
										<td class="text-left">₹450</td>
										<td class="text-right"><a href="product_form..php"><span class="eyes">&nbsp;</span></a></td>
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
			<div class="tab-pane" id="tabKyc">
				<div class="table-responsive">
					<table class="table orderbox">
						<thead>
							<tr>
								<td class="text-left">Documents</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">Registration Proof</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><i class="fa fa-thumbs-up"></i></span>
									<span><i class="fa fa-thumbs-down"></i></span>
								</td>
								<td class="text-left"><button class="btn btn-warning">Waiting for Approval</button></td>
							</tr>
							<tr>
								<td class="text-left">Shop Establishment Act Certificate</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><a href="javascript:void(0)"><i class="fa fa-thumbs-up"></i></a></span>
									<span><a disabled href="javascript:void(0)"><i class="fa fa-thumbs-down"></i></a></span>
								</td>
								<td class="text-left"><button class="btn btn-success">Verified</button></td>
							</tr>
							<tr>
								<td class="text-left">Regional State Registration Certificate</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><a href="javascript:void(0)"><i class="fa fa-thumbs-up"></i></a></span>
									<span><a disabled href="javascript:void(0)"><i class="fa fa-thumbs-down"></i></a></span>
								</td>
								<td class="text-left"><button class="btn btn-success">Verified</button></td>
							</tr>
							<tr>
								<td class="text-left">Municipal Corporation Department Certificate/License</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><a href="javascript:void(0)"><i class="fa fa-thumbs-up"></i></a></span>
									<span><a disabled href="javascript:void(0)"><i class="fa fa-thumbs-down"></i></a></span>
								</td>
								<td class="text-left"><button class="btn btn-warning">Waiting for Approval</button></td>
							</tr>
							<tr>
								<td class="text-left">GST Certificate</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><a href="javascript:void(0)"><i class="fa fa-thumbs-up"></i></a></span>
									<span><a disabled href="javascript:void(0)"><i class="fa fa-thumbs-down"></i></a></span>
								</td>
								<td class="text-left"><button class="btn btn-success">Verified</button></td>
							</tr>
							<tr>
								<td class="text-left">PAN Card</td>
								<td class="text-left">
									<img src="image/sample-product.png" style="margin-left:8px;max-width: 50px">
									<span style="padding-top:7px;display: block"><a href="javascript:void(0)">Download</a></span>
								</td>
								<td class="text-left">
									<span><a href="javascript:void(0)"><i class="fa fa-thumbs-up"></i></a></span>
									<span><a disabled href="javascript:void(0)"><i class="fa fa-thumbs-down"></i></a></span>
								</td>
								<td class="text-left"><button class="btn btn-success">Verified</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="tabSubs">
				<h4>Current Plan: <span>Bronze</span></h4>
				<h5>₹199/mo</h5>
				<div class="inline-block">
					<div class="productValid">
						<span>100 Products</span>
					</div>
					<div class="vailidityDate">
						<p>Vaild till: 20 May, 2021</p>
					</div>
				</div>
				<div><a href="transaction.php" class="btn btn-primary">View Transaction</a></div>
			</div>
		</div>
		<div class="pull-right">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</div>