<?php include 'header.php';?>
<?php include 'column-left.php';?>

<div id="content" class="options-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="options.php">Options</a></li>
	</ul>
	<h1>Option form</h1>
	<hr class="Hrdl">
	<div class="container-fluid">
		<div class="pull-right">
			<button type="submit" form="form-option" data-toggle="tooltip" title="" class="btn btn-primary print-btn" data-original-title="Save">Save</button>
			<a href="http://localhost/dalooni_development/index.php?route=vendor/option" data-toggle="tooltip" title="" class="btn btn-default print-btn" data-original-title="Cancel">Return</a>
		</div>
	</div>
	<div>&nbsp;</div>
	<div class="container-fluid">
		<div class="allOrders">
		    <div class="mainboxlatestorder">
		        <form action="http://localhost/dalooni_development/index.php?route=vendor/option/edit&amp;option_id=96" method="post" enctype="multipart/form-data" id="form-option" class="form-horizontal">
		            <div class="form-group required">
		                <label class="col-sm-2 control-label">Option Name</label>
		                <div class="col-sm-10">
		                    <div class="input-group">
		                        <input type="text" name="option_description[1][name]" value="Size" placeholder="Option Name" class="form-control">
		                    </div>
		                </div>
		            </div>
		            <div class="form-group">
		                <label class="col-sm-2 control-label" for="input-type">Type</label>
		                <div class="col-sm-10">
		                    <select name="type" id="input-type" class="form-control">
		                        <optgroup label="Choose">
		                            <option value="select">Select</option>
		                            <option value="radio" selected="selected">Radio</option>
		                            <option value="checkbox">Checkbox</option>
		                        </optgroup>
		                        <optgroup label="Input">
		                            <option value="text">Text</option><option value="textarea">Textarea</option>
		                        </optgroup>
		                        <optgroup label="File">
		                            <option value="file">File</option>
		                        </optgroup>
		                        <optgroup label="Date">
		                            <option value="date">Date</option><option value="time">Time</option><option value="datetime">Date &amp; Time</option>
		                        </optgroup>
		                    </select>
		                </div>
		            </div>
		            <div class="form-group">
		                <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
		                <div class="col-sm-10">
		                    <input type="text" name="sort_order" value="1" placeholder="Sort Order" id="input-sort-order" class="form-control">
		                </div>
		            </div>
		            <table id="option-value" class="table table-striped table-bordered table-hover">
		                <thead>
		                    <tr>
		                        <td class="text-left required">Option Value Name</td>
		                        <td class="text-left">Image</td>
		                        <td class="text-right">Sort Order</td>
		                        <td></td>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr id="option-value-row0">
		                        <td class="text-center"><input type="hidden" name="option_value[0][option_value_id]" value="695">
		                            <div class="input-group">
		                                <input type="text" name="" value="Standard" placeholder="Option Value Name" class="form-control">
		                            </div>
		                        </td>
		                        <td class="text-left">

		                            <input type="hidden" name="option_value[0][image]" value="" id="input-image0">
		                        </td>
		                        <td class="text-right">
		                            <input type="text" name="option_value[0][sort_order]" value="1" class="form-control">
		                        </td>
		                        <td class="text-right">
		                            <button type="button" onclick="$('#option-value-row0').remove();" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-minus-circle"></i>
		                            </button>
		                        </td>
		                    </tr>
		                </tbody>
		                <tfoot>
		                    <tr>
		                        <td colspan="3"></td>
		                        <td class="text-left"><button type="button" onclick="addOptionValue();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Option"><i class="fa fa-plus-circle"></i></button></td>
		                    </tr>
		                </tfoot>
		            </table>
		        </form>
		    </div>
		</div>
	</div>
</div>