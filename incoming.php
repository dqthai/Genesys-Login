<?php

include('connection.php');

send_remote_syslog("salesforce access success");

$body = file_get_contents("php://input");
$body_params = json_decode($body);
$parameters = array();
foreach($body_params as $param_name => $param_value) {
    $parameters[$param_name] = $param_value;
}

$username = $parameters['username'];
$first = $parameters['first'];
$last = $parameters['last'];
$alias = $parameters['alias'];
$email = $parameters['email'];
$usertype = $parameters['usertype'];
$language = $parameters['language'];
$nickname = $parameters['nickname'];

$result = pg_query("INSERT INTO users(first, last, alias, email, username, nickname, usertype, language) VALUES('$first', '$last', '$alias', '$email', '$username', '$nickname', '$usertype', '$language')");
$success = pg_affected_rows($result);
if($succes){
  send_remote_syslog("recieved data from salesforce");
  send_remote_syslog("$username has been added to external database");
}

pg_close();

?>
