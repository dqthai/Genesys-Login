<?php

define("USERNAME", "d_thai94@yahoo.com");
define("PASSWORD", "Nanking1!");
define("SECURITY_TOKEN", "2oFQNgwgpig7ngyw4tjGbs9g");

require_once('/soapclient/SforcePartnerClient.php');

$mySforceConnection = new SForcePartnerClient();
$mySforceConnection->createConnection("partner.wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);

?>
