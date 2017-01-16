<?php
$x = include '../config.php';
$db = new PDO('mysql:host='.$x['h'].';dbname='.$x['db'], $x['l'], $x['p']);
$que = $db->query('SELECT * FROM kopica ORDER BY id DESC');
$result = $que->fetch();
require 'vendor/autoload.php';
use Metzli\Encoder\Encoder;
use Metzli\Renderer\PngRenderer;
$code = Encoder::encode($result['name']);
$renderer = new PngRenderer();
header('Content-Type: image/png');
echo $renderer->render($code);
?>