<?php
$bill = $_GET['bill'];
$percent = $_GET['percent'];
$split = $_GET['split'];
$tip = $bill * $percent;
$total = $bill + $tip;
if ($split !=0 ) {
	$perPerson = ($bill + $tip) / $split;
} else {
	$perPerson = $total;
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
      <h1>Your Payment</h1>
      <p> <b>Tip: </b>
        <b><?php echo number_format($tip, 2); ?> USD</b>
      </p>
      <p> <b>Total: </b>
        <b><?php echo number_format($total, 2); ?> USD</b>
      </p>
      <p> <b>Total per person: </b>
        <b><?php echo number_format($perPerson, 2); ?> USD</b>
      </p>
 	  <a href="index.php"><b>RESET<b></a>
 	</body>
</html>