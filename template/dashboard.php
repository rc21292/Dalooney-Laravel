<?php include 'header.php';?>
<?php include 'column-left.php';?>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Monthly Sales Data"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		prefix: "₹",
		labelFormatter: addSymbols
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [
		{
			type: "column",
			name: "Actual Sales",
			showInLegend: true,
			xValueFormatString: "MMMM YYYY",
			yValueFormatString: "₹#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 20000 },
				{ x: new Date(2017, 1), y: 25000 },
				{ x: new Date(2017, 2), y: 30000 },
				{ x: new Date(2017, 3), y: 70000, indexLabel: "High Renewals" },
				{ x: new Date(2017, 4), y: 40000 },
				{ x: new Date(2017, 5), y: 60000 },
				{ x: new Date(2017, 6), y: 55000 },
				{ x: new Date(2017, 7), y: 33000 },
				{ x: new Date(2017, 8), y: 45000 },
				{ x: new Date(2017, 9), y: 30000 },
				{ x: new Date(2017, 10), y: 50000 },
				{ x: new Date(2017, 11), y: 35000 }
			]
		},
		{
			type: "line",
			name: "Expected Sales",
			showInLegend: true,
			yValueFormatString: "$#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 32000 },
				{ x: new Date(2017, 1), y: 37000 },
				{ x: new Date(2017, 2), y: 40000 },
				{ x: new Date(2017, 3), y: 52000 },
				{ x: new Date(2017, 4), y: 45000 },
				{ x: new Date(2017, 5), y: 47000 },
				{ x: new Date(2017, 6), y: 42000 },
				{ x: new Date(2017, 7), y: 43000 },
				{ x: new Date(2017, 8), y: 41000 },
				{ x: new Date(2017, 9), y: 42000 },
				{ x: new Date(2017, 10), y: 50000 },
				{ x: new Date(2017, 11), y: 45000 }
			]
		},
		{
			type: "area",
			name: "Profit",
			markerBorderColor: "white",
			markerBorderThickness: 2,
			showInLegend: true,
			yValueFormatString: "$#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 4000 },
				{ x: new Date(2017, 1), y: 7000 },
				{ x: new Date(2017, 2), y: 12000 },
				{ x: new Date(2017, 3), y: 40000 },
				{ x: new Date(2017, 4), y: 20000 },
				{ x: new Date(2017, 5), y: 35000 },
				{ x: new Date(2017, 6), y: 33000 },
				{ x: new Date(2017, 7), y: 20000 },
				{ x: new Date(2017, 8), y: 25000 },
				{ x: new Date(2017, 9), y: 16000 },
				{ x: new Date(2017, 10), y: 29000 },
				{ x: new Date(2017, 11), y: 20000 }
			]
		}]
};
$("#chartContainer").CanvasJSChart(options);

function addSymbols(e) {
	var suffixes = ["", "K", "M", "B"];
	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

	if (order > suffixes.length - 1)
		order = suffixes.length - 1;

	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}


}
</script>
<div id="content" class="dashboard-page">
	<ul class="breadcrumb list-inline">
		<li><a href="#">Home</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
	</ul>
	<h1>Dashboard</h1>
	<hr class="Hrdl">
	<div class="dashPanel">
		<div class="row width100">
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Products Online</h4>
						<p>3992</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Total Orders</h4>
						<p>412</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Completed Orders</h4>
						<p>342</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Pending Orders</h4>
						<p>87</p>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>All Shops</h4>
						<p>55</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Approved Shops</h4>
						<p>17</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Unapproved Shops</h4>
						<p>43</p>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="tile">
					<a href="#">
						<h4>Total Sale</h4>
						<p>₹ 2,13,843</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row width100">
		<div class="col-sm-6">
			<div class="newShops">
				<h3 class="mHeading">New Shops</h3>
				<hr class="Hrdl">
				<div class="mainboxlatestorder">
					<ul class="list-unstyled">
						<li><a href="#">Gurmeet Singh</a> is waiting for the verification of his shop. <span><a class="btn btn-primary btn-xs" href="#">View</a></span></li>
						<li><a href="#">Rakesh</a> is waiting for the verification of his shop. <span><a class="btn btn-primary btn-xs" href="#">View</a></span></li>
						<li><a href="#">Vijay</a> is waiting for the verification of his shop. <span><a class="btn btn-primary btn-xs" href="#">View</a></span></li>
						<li><a href="#">Sameer</a> is waiting for the verification of his shop. <span><a href="#" class="btn btn-primary btn-xs">View</a></span></li>
						<li><a href="#">Sameer</a> is waiting for the verification of his shop. <span><a href="#" class="btn btn-primary btn-xs">View</a></span></li>
						<li><a href="#">Sameer</a> is waiting for the verification of his shop. <span><a href="#" class="btn btn-primary btn-xs">View</a></span></li>
						<li><a href="#">Sameer</a> is waiting for the verification of his shop. <span><a href="#" class="btn btn-primary btn-xs">View</a></span></li>
						<li><a href="#">Sameer</a> is waiting for the verification of his shop. <span><a href="#" class="btn btn-primary btn-xs">View</a></span></li>
					</ul>
					<div class="text-center">
						<a href="#" class="btn btn-primary">View all</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="analyticsGraph">
				<h3 class="mHeading">Analytics Graph</h3>
				<hr class="Hrdl">
				<div class="tile">
			        <ul class="nav nav-tabs">
			          <li style="margin-left: 0" class="active"><a href="#tab-analytics-order" data-toggle="tab">Orders</a></li>
			          <li><a href="#tab-analytics-sales" data-toggle="tab">Sales</a></li>
			        </ul>
			        <div class="monthlyGraph">
			          <ul class="nav nav-tabs range">
			            <li style="margin-left: 0"><a href="#tab-analytics-today" data-toggle="tab">Today</a></li>
			            <li class="active"><a href="#tab-analytics-7days" data-toggle="tab">7 Days</a></li>
			            <li><a href="#tab-analytics-14days" data-toggle="tab">14 Days</a></li>
			            <li><a href="#tab-analytics-lastmonth" data-toggle="tab">Last Month</a></li>
			          </ul>
			        </div>
			        <div class="tab-content">
			          <div id="tab-analytics-order" class="tab-pane active">
			            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
			          </div>
			        </div>
			      </div>
			</div>
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

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>