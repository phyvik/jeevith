<?php

     set_time_limit(0);
		
	require_once("/home/ubuntu/webhook/includes/database.php");
	
	$webhookContent = "";

	$webhook = fopen('php://input' , 'rb');
	
	while (!feof($webhook)){
		$webhookContent .= fread($webhook, 4096);
	}
	fclose($webhook);
	
	insert_webhookstodb($webhookContent);
	
?>
