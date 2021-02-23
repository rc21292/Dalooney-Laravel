<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="orders-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="order.php">Orders</a></li>
	</ul>
	<div class="container-fluid">
		<h1>Action</h1> <hr class="Hrdl">
	    <div class="importFiles">
	    	<a class="button btn btn-primary next-btn">Import</a>
	    </div>
	    <div>&nbsp;</div>
	    <div class="importBlock">
			<h3 class="mHeading">Import Excel file</h3> <hr class="Hrdl">
			<div class="mainboxlatestorder">
		    	<form action="{{ import }}" method="post" enctype="multipart/form-data" id="tmd-import">
		    		<div class="form-group">
		    			<div class="row">
			    			<label class="col-sm-5 control-label">Import xls File Please upload same format. If you do not have the format Please <a href="#">Download From Here</a></label>
			    			<div class="col-sm-7 padding-left-zero">
			    				<div class="inputFile">
			    					<label for="file">Choose File</label>
			    					<input class="hidefile" type="file" name="import" />
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<hr style="margin-top: 5px;">
		    		<div class="form-group">
		    			<div class="row">
			    			<label class="col-sm-5 control-label">Stores For other information like category, manufature etc</label>
			    			<div class="col-sm-7">
			    				<select name="store_id" class="form-control" >
			    					<option value="">Default</option>
			    				</select>
			    			</div>
			    		</div>
		    		</div>
		    		<hr>
			    	<div class="form-group">
			    		<div class="row">
				    		<label class="col-sm-5 control-label">Import By</label>
				    		<div class="col-sm-7">
				    			<select name="importby" class="form-control">
				    				<option value="1">Product ID</option>
				    				<option value="2">Product Model</option>

				    			</select>
				    		</div>
				    	</div>
			    	</div>
		    	</form>
		    </div>
		</div>
	</div>
</div>