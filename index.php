<?php

#include("sforce_connection.php");
require('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;

// set the format
$output = "%message%";
$formatter = new LineFormatter($output);

// create a log channel to STDOUT
$log = new Logger('my_logger');
$streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
$streamHandler->setFormatter($formatter);
$log->pushHandler($streamHandler);

// test messages
$log->addWarning("testing 1");
$log->addWarning("testing 2");
include("form.php");
include("links.php");

?>

