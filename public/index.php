<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\HelloWorld;

$helloWorld = new HelloWorld();
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Modern PHP Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.2/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<style>
</style>

<body>

  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold"><?php $helloWorld->say("Hello 2022") ?></h1>
        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>
</body>

</html>