<?php
$x = include '../config.php';
if($_POST['msg'] != false) {

    include 'wideimage/lib/WideImage.php';
    $db = new PDO('mysql:host='.$x['h'].';dbname='.$x['db'], $x['l'], $x['p']);

    $ins = "INSERT INTO kopica (`name`) VALUES ('{$_POST['msg']}')";
    $result1 = $db->query($ins);

    $url = "http://aztec-code-kopica".$x['u']."/img-code.php";
    $img = WideImage::load($url);

    if ($_POST['quality'] != '') {
        $quality = $_POST['quality'];
    } else {
        $re = 100;
    }
    
    $img->saveToFile($_POST['msg'] . '.jpg', $re);
}
header('Location: http://aztec-code-kopica'.$x['u']);
?>