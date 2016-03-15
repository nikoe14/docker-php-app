<?php
	$container_number = getenv('CONTAINER_NUMBER');
?>

<html>
    <head>
        <title>Welcome to Docker container <?php echo $container_number;?></title>
    </head>
    <body>
        <h1>Welcome to Docker containers</h1>
        <h1>You are running the container number: #<?php echo $container_number;?></h1>
    <body>
</html>