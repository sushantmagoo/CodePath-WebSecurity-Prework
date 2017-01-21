<?php
$bill = $_GET['bill'];
$percent = $_GET['percent'];
$split = $_GET['split'];
$tip = $bill * $percent;
$subtotal = $bill + $tip;
if ($split !=0 ) {
	$total = ($bill + $tip) / $split;
} else {
	$total = $bill + $tip;
}
?>

<html>
	<head>
		<title>Web Security Test</title>
		<style type="text/css">
  		body {
    		font-family: monospace;
    		text-align: center;
    		background-color: #00FFFF;
  		}
  		</style>
	</head>
	<body>
 		<h1>Payment</h1>
 		<p> <b>Tip: </b>
 			<b><?php echo number_format($tip, 2); ?> USD</b>
 		</p>
 		<p> <b>Subtotal: </b>
 			<b><?php echo number_format($subtotal, 2); ?> USD</b>
 		</p>
 		<p> <b>Total per person: </b>
 			<b><?php echo number_format($total, 2); ?> USD</b>
 		</p>
 	</body>
</html>