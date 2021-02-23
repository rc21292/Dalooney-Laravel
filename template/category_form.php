<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="product-form-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="product.php">Edit Category</a></li>
	</ul>
	<h1>Edit Category</h1>
	<hr class="Hrdl">
	<ul class="nav nav-tabs">
		<li style="margin-left: 0" class="active">
			<a href="#tab-general" data-toggle="tab">General</a>
		</li>
		<li><a href="#tab-data" data-toggle="tab">Data</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-general">
			<div class="product_form">
				<div class="row width100">
					<div class="col-sm-4">
						<div class="form-group">
							<label class="control-label">Category Name</label>
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
							<label class="control-label">Category Tags</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="control-label">Category Description</label>
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
			<div class="row form-group width100">
				<label class="col-sm-2 control-label" for="input-parent">Parent</label>
				<div class="col-sm-10">
					<input type="text" name="path" value="" placeholder="Parent" id="input-parent" class="form-control">
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="" data-original-title="(Autocomplete)">Filters</span></label>
				<div class="col-sm-10">
					<input type="text" name="filter" value="" placeholder="Filters" id="input-filter" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
					<div id="category-filter" class="well well-sm" style="height: 150px; overflow: auto;">
					</div>
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label">Stores</label>
				<div class="col-sm-10">
					<div class="well well-sm" style="height: 150px; overflow: auto;">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="category_store[]" value="0" checked="checked">
								Default
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
					<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail">
					<img src="image/sample-product.png" alt="" title=""></a>
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip" title="" data-original-title="Number of columns to use for the bottom 3 categories. Only works for the top parent categories.">Columns</span></label>
				<div class="col-sm-10">
					<input type="text" name="column" value="1" placeholder="Columns" id="input-column" class="form-control">
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
				<div class="col-sm-10">
					<input type="text" name="sort_order" value="6" placeholder="Sort Order" id="input-sort-order" class="form-control">
				</div>
			</div>
			<div class="row form-group width100">
				<label class="col-sm-2 control-label" for="input-status">Status</label>
				<div class="col-sm-10">
					<select name="status" id="input-status" class="form-control">
						<option value="1" selected="selected">Enabled</option>
						<option value="0">Disabled</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right">
		<button class="btn btn-primary btn-save">Save</button>
	</div>
</div>