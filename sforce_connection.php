<?php

define("USERNAME", "kimlan.do@42demo.com");
define("PASSWORD", "Genesys2!");
define("SECURITY_TOKEN", "IQn0sf2HpbfyVxwWtBNzsEh3");

require_once('soapclient/SforceEnterpriseClient.php');

$mySforceConnection = new SForceEnterpriseClient();
$mySforceConnection->createConnection("enterprise.wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);

?>
