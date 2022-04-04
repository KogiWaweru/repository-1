
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>errors</title>
	<link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
<?php 

include('server.php'); ?>

<div class = "errors">
<?php if (count($errors) > 0): ?>
	<p> <?php foreach($errors as $error): ?>
	<?php echo $error; ?>

	</p>
    <?php endforeach  ?>	

</div>
<?php endif;


?>
</body>
</html>