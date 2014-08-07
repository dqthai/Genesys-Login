<?php

function pg_connection_string(){
	return  "dbname=d9obju9qqjs2bl host=ec2-23-23-183-5.compute-1.amazonaws.com port=5432 user=hjaabcekfmalra password=IAQJ5iBAKcazgisvh5PQeSWAdV sslmode=require";
	}

function send_remote_syslog($message, $component = "web", $program = "Genesys") {
	$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
	foreach(explode("\n", $message) as $line) {
		$syslog_message = "<22>" . date('M d H:i:s ') . $program . ' ' . $component . ': ' . $line;
		socket_sendto($sock, $syslog_message, strlen($syslog_message), 0, "logs2.papertrailapp.com", 18430);
	}
	socket_close($sock);
}


$db = pg_connect(pg_connection_string());
	if(!$db) {
    		echo "Database connection error";
    		exit;
  }

?>
