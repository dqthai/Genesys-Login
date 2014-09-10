$body = file_get_contents("php://input");
$body_params = json_decode($body);
foreach($body_params as $param_name => $param_value) {
    $parameters[$param_name] = $param_value;
	  print_r($param_value);
}
