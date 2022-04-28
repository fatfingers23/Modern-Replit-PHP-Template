<?php 
require_once __DIR__ . '/../vendor/autoload.php';
use App\HelloWorld;
$helloWorld = new HelloWorld();
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <p><?php $helloWorld->say("Hello 2022") ?></p>
  </body>
</html>