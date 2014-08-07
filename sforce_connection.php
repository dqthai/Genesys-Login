<?php

define("USERNAME", "kimlan.do@42demo.com");
define("PASSWORD", "Genesys2!");
define("SECURITY_TOKEN", "IQn0sf2HpbfyVxwWtBNzsEh3");

require_once('soapclient/SforceEnterpriseClient.php');

try{
  $mySforceConnection = new SForceEnterpriseClient();
  $mySforceConnection->createConnection("soapclient/enterprise.wsdl.xml");
  $mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);
} catch( Exception $e) {
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}


$query = "SELECT Username from User";
$response = $mySforceConnection->query($query);

echo "Results of query '$query'<br /><br />\n";
foreach($response->records as $record) {
  echo $record->Username."<br />\n";
}

?>
