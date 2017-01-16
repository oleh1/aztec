<?php
$x = include '../config.php';
if($_POST['size'] != false) {
    
    $db = new PDO('mysql:host='.$x['h'].';dbname='.$x['db'], $x['l'], $x['p']);
    $que = $db->query('SELECT * FROM kopica ORDER BY id DESC');
    $result2 = $que->fetch();

    $img_name = $result2['name'];
    $size = $_POST['size'];

    if ($size != '') {
        include 'wideimage/lib/WideImage.php';
        $img = WideImage::load($img_name . '.jpg');
        $img->resize($size, $size)->saveToFile($img_name . '.jpg');
    }
    
}
header('Location: http://aztec-code-kopica'.$x['u']);
?>