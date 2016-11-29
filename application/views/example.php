<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
	
	<a href='<?php echo site_url('visual/CATEGORY')?>'> CATEGORY </a> </br>
	<a href='<?php echo site_url('visual/CUSTOMERS')?>'> CUSTOMERS </a> </br>
	<a href='<?php echo site_url('visual/ORDERS')?>'> ORDERS </a> </br>
	<a href='<?php echo site_url('visual/ORDER_DETAILS')?>'> ORDER_DETAILS </a> </br>
	<a href='<?php echo site_url('visual/PAYMENT')?>'> PAYMENT </a> </br>
	<a href='<?php echo site_url('visual/PRODUCTS')?>'> PRODUCTS </a> </br>
	<a href='<?php echo site_url('visual/SHIPPERS')?>'> SHIPPERS </a> </br>
	<a href='<?php echo site_url('visual/SUPPLIER')?>'> SUPPLIER </a> </br>
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
