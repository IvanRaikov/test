<?php
require_once  __DIR__.'/vendor/autoload.php';

$dom = phpQuery::newDocument("https://sakhatyla.ru/");
print_r($dom);