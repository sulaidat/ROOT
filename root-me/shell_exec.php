<!DOCTYPE html>
<html>
<head>
<title>Ping Service</title>
</head>
<body>
	<form method="POST" action="shell_exec.php">
        <input type="text" name="ip" placeholder="127.0.0.1">
        <input type="submit">
	</form>
	<pre>
	<?php 
	$flag = "S3rv1ceP1n9Sup3rS3cure";
	if(isset($_POST["ip"]) && !empty($_POST["ip"])){
        $response = shell_exec("ping ".$_POST["ip"]);
        echo $response;
    }
	?>
	</pre>
</body>
</html>