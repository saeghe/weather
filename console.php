<?php

use Saeghe\Weather\Request;
use function Saeghe\Weather\Weather\get;

$request = new Request();
$request->ansi();

echo get($request->url());
