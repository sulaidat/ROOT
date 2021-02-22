<title>command execution through webpage</title>
<?php 
	var_dump($GLOBALS);
	$flag = "S3rv1ceP1n9Sup3rS3cure";
	if(isset($_POST["ip"]) && !empty($_POST["ip"])){
		//echo "yes";
		$command = "ping ".$_POST["ip"];
		echo $command;
		$response = shell_exec($command);
		echo "<pre>$response</pre>";
    }
?>