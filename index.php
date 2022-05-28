<?php
require_once 'env.class.php';
$env = new env();
$env->init();

echo getenv("VOO");
echo $_ENV["VOO"];