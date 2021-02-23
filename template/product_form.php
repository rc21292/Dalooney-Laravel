<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="product-form-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="product.php">Edit Product</a></li>
	</ul>
	<h1>Edit Product</h1>
	<hr class="Hrdl">
	<ul class="nav nav-tabs">
		<li style="margin-left: 0" class="active">
			<a href="#tab-general" data-toggle="tab">General</a>
		</li>
		<li><a href="#tab-data" data-toggle="tab">Data</a></li>
		<li><a href="#tab-option" data-toggle="tab">Option</a></li>
		<li><a href="#tab-image" data-toggle="tab">Image</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-general">
			<div class="product_form">
				<div class="row width100">
					<div class="col-sm-4">
						<div class="form-group">
							<label class="control-label">Product Name</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="control-label">Meta Tag Title</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="control-label">Product Tags</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="control-label">Product Description</label>
							<textarea class="form-control" rows="10" cols="5"></textarea>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="control-label">Meta Tag Description</label>
							<textarea class="form-control" rows="6" cols="5"></textarea>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="control-label">Meta Tag Keyword</label>
							<textarea class="form-control" rows="6" cols="5"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="tab-data">
			<div class="form-group row width100 required">
				<label class="col-sm-2 control-label" for="input-model">Model</label>
				<div class="col-sm-10">
					<input type="text" name="model" value="Product 15" placeholder="Model" id="input-model" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="" data-original-title="Stock Keeping Unit">SKU</span></label>
				<div class="col-sm-10">
					<input type="text" name="sku" value="" placeholder="SKU" id="input-sku" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="" data-original-title="Universal Product Code">UPC</span></label>
				<div class="col-sm-10">
					<input type="text" name="upc" value="" placeholder="UPC" id="input-upc" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="" data-original-title="European Article Number">EAN</span></label>
				<div class="col-sm-10">
					<input type="text" name="ean" value="" placeholder="EAN" id="input-ean" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="" data-original-title="Japanese Article Number">JAN</span></label>
				<div class="col-sm-10">
					<input type="text" name="jan" value="" placeholder="JAN" id="input-jan" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="" data-original-title="International Standard Book Number">ISBN</span></label>
				<div class="col-sm-10">
					<input type="text" name="isbn" value="" placeholder="ISBN" id="input-isbn" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="" data-original-title="Manufacturer Part Number">MPN</span></label>
				<div class="col-sm-10">
					<input type="text" name="mpn" value="" placeholder="MPN" id="input-mpn" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-location">Location</label>
				<div class="col-sm-10">
					<input type="text" name="location" value="" placeholder="Location" id="input-location" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-price">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" value="100.0000" placeholder="Price" id="input-price" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-tax-class">Tax Class</label>
				<div class="col-sm-10">
					<select name="tax_class_id" id="input-tax-class" class="form-control">
						<option value="0"> --- None --- </option>
						<option value="9" selected="selected">Taxable Goods</option>
						<option value="10">Downloadable Products</option>
					</select>
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-quantity">Quantity</label>
				<div class="col-sm-10">
					<input type="text" name="quantity" value="446" placeholder="Quantity" id="input-quantity" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="" data-original-title="Force a minimum ordered amount">Minimum Quantity</span></label>
				<div class="col-sm-10">
					<input type="text" name="minimum" value="2" placeholder="Minimum Quantity" id="input-minimum" class="form-control">
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-subtract">Subtract Stock</label>
				<div class="col-sm-10">
					<select name="subtract" id="input-subtract" class="form-control">
						<option value="1" selected="selected">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="" data-original-title="Status shown when a product is out of stock">Out Of Stock Status</span></label>
				<div class="col-sm-10">
					<select name="stock_status_id" id="input-stock-status" class="form-control">
						<option value="6">2-3 Days</option>
						<option value="7">In Stock</option>
						<option value="5" selected="selected">Out Of Stock</option>
						<option value="8">Pre-Order</option>
					</select>
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label">Requires Shipping</label>
				<div class="col-sm-10">
					<label class="radio-inline"> <input type="radio" name="shipping" value="1" checked="checked">
						Yes
					</label>
					<label class="radio-inline"> <input type="radio" name="shipping" value="0">
						No
					</label>
				</div>
			</div>
			<div class="form-group row width100">
				<label class="col-sm-2 control-label" for="input-date-available">Date Available</label>
				<div class="col-sm-3">
					<div class="input-group date">
						<input type="text" name="date_available" value="2009-02-04" placeholder="Date Available" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
						</span></div>
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-length">Dimensions (L x W x H)</label>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-4">
								<input type="text" name="length" value="1.00000000" placeholder="Length" id="input-length" class="form-control">
							</div>
							<div class="col-sm-4">
								<input type="text" name="width" value="2.00000000" placeholder="Width" id="input-width" class="form-control">
							</div>
							<div class="col-sm-4">
								<input type="text" name="height" value="3.00000000" placeholder="Height" id="input-height" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-length-class">Length Class</label>
					<div class="col-sm-10">
						<select name="length_class_id" id="input-length-class" class="form-control">
							<option value="1" selected="selected">Centimeter</option>
							<option value="2">Millimeter</option>
							<option value="3">Inch</option>
						</select>
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-weight">Weight</label>
					<div class="col-sm-10">
						<input type="text" name="weight" value="12.50000000" placeholder="Weight" id="input-weight" class="form-control">
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-weight-class">Weight Class</label>
					<div class="col-sm-10">
						<select name="weight_class_id" id="input-weight-class" class="form-control">
							<option value="1" selected="selected">Kilogram</option>
							<option value="2">Gram</option>
							<option value="5">Pound </option>
							<option value="6">Ounce</option>
						</select>
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-status">Status</label>
					<div class="col-sm-10">
						<select name="status" id="input-status" class="form-control">
							<option value="1" selected="selected">Enabled</option>
							<option value="0">Disabled</option>
						</select>
					</div>
				</div>
				<div class="form-group row width100">
					<label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
					<div class="col-sm-10">
						<input type="text" name="sort_order" value="0" placeholder="Sort Order" id="input-sort-order" class="form-control">
					</div>
				</div>
			</div>
		<div class="tab-pane active" id="tab-option">
		    <div class="row width100">
		        <div class="col-sm-2">
		            <ul class="nav nav-pills nav-stacked" id="option">
		                <li class="active"><a href="#tab-option" data-toggle="tab" aria-expanded="true"><i class="fa fa-minus-circle"></i> Checkbox</a></li>
		                <li>
		                    <input type="text" name="option" value="" placeholder="Option" id="input-option" class="form-control" autocomplete="off">
		                    <ul class="dropdown-menu"></ul>
		                </li>
		            </ul>
		        </div>
		        <div class="col-sm-10">
		            <div class="tab-content">
		                <div class="tab-pane active" id="tab-option">
		                    <input type="hidden" name="" value="223">
		                    <input type="hidden" name="" value="Checkbox">
		                    <input type="hidden" name="" value="2">
		                    <input type="hidden" name="" value="checkbox">
		                    <div class="form-group">
		                        <label class="col-sm-2 control-label" for="input-required0">Required</label>
		                        <div class="col-sm-10">
		                            <select name="product_option[0][required]" id="input-required0" class="form-control">
										<option value="1" selected="selected">Yes</option>
										<option value="0">No</option>
									</select>
		                        </div>
		                    </div>
		                    <div class="table-responsive">
		                        <table class="table table-striped table-bordered table-hover">
		                            <thead>
		                                <tr>
		                                    <td class="text-left">Option Value</td>
		                                    <td class="text-right">Quantity</td>
		                                    <td class="text-left">Subtract Stock</td>
		                                    <td class="text-right">Price</td>
		                                    <td class="text-right">Points</td>
		                                    <td class="text-right">Weight</td>
		                                    <td></td>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr id="option-value-row3">
		                                    <td class="text-left">
		                                    	<select name="" class="form-control">
													<option value="23">Checkbox 1</option>
													<option value="24">Checkbox 2</option>
													<option value="44">Checkbox 3</option>
													<option value="45" selected="selected">Checkbox 4</option>
												</select>
		                                        <input type="hidden" name=""></td>
		                                    <td class="text-right"><input type="text" name="" class="form-control"></td>
		                                    <td class="text-left">
		                                    	<select name="" class="form-control">
													<option value="1" selected="selected">Yes</option>
													<option value="0">No</option>
												</select>
											</td>
		                                    <td class="text-right">
		                                    	<select name="" class="form-control">
													<option value="+" selected="selected">+</option>
													<option value="-">-</option>
												</select>
		                                        <input type="text" class="form-control"></td>
		                                    <td class="text-right">
		                                    	<select name="" class="form-control">
													<option value="+" selected="selected">+</option>
													<option value="-">-</option>
												</select>
		                                        <input type="text" name="" value="0" placeholder="Points" class="form-control">
		                                    </td>
		                                    <td class="text-right">
		                                    	<select name="" class="form-control">
													<option value="+" selected="selected">+</option>
													<option value="-">-</option>
												</select>
		                                        <input type="text" placeholder="Weight" class="form-control">
		                                    </td>
		                                    <td class="text-right">
		                                    	<button type="button" class="btn btn-danger" data-original-title="Remove">
		                                    		<i class="fa fa-minus-circle"></i>
		                                    	</button>
		                                    </td>
		                                </tr>
		                            </tbody>
		                            <tfoot>
		                                <tr>
		                                    <td colspan="6"></td>
		                                    <td class="text-left">
		                                    	<button type="button" class="btn btn-primary" data-original-title="Add Option Value">
		                                    	<i class="fa fa-plus-circle"></i>
		                                    	</button>
		                                	</td>
		                                </tr>
		                            </tfoot>
		                        </table>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="tab-pane active" id="tab-image">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Image</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="image/sample-product.png" alt="" title="" ></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="table-responsive">
				<table id="images" class="table orderBox">
					<thead>
						<tr>
							<td class="text-left">Additional Images</td>
							<td class="text-right">Sort Order</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">
								<a href="" id="thumb-image0" class="img-thumbnail"><img src="image/sample-product.png" alt="" title=""></a>
								<input type="hidden" name="" value="image/sample-product.png">
							</td>
								<td class="text-right"><input type="text" name="" value="0" placeholder="Sort Order" class="form-control">
							</td>
							<td class="text-left">
								<button type="button" title="" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-minus-circle"></i></button>
							</td>
						</tr>
						<tr>
							<td class="text-left">
								<a href="" id="thumb-image0" class="img-thumbnail"><img src="image/sample-product.png" alt="" title=""></a>
								<input type="hidden" name="" value="image/sample-product.png">
							</td>
								<td class="text-right"><input type="text" name="" value="0" placeholder="Sort Order" class="form-control">
							</td>
							<td class="text-left">
								<button type="button" title="" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-minus-circle"></i></button>
							</td>
						</tr>
						<tr>
							<td class="text-left">
								<a href="" id="thumb-image0" class="img-thumbnail"><img src="image/sample-product.png" alt="" title=""></a>
								<input type="hidden" name="" value="image/sample-product.png">
							</td>
								<td class="text-right"><input type="text" name="" value="0" placeholder="Sort Order" class="form-control">
							</td>
							<td class="text-left">
								<button type="button" title="" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-minus-circle"></i></button>
							</td>
						</tr>		
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2"></td>
							<td class="text-left"><button type="button" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Image"><i class="fa fa-plus-circle"></i></button></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<div class="pull-right">
		<button class="btn btn-primary btn-save">Save</button>
	</div>
</div>