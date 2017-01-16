<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aztec denerator</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
$x = include '../config.php';
$db = new PDO('mysql:host='.$x['h'].';dbname='.$x['db'], $x['l'], $x['p']);
$que = $db->query('SELECT * FROM kopica ORDER BY id DESC');
$q = $db->query('SELECT * FROM kopica ORDER BY id DESC');
if($q->fetch()) {
    ?>
    <a href="index.php" class="gallery">Назад</a>
    <hr>
    <?php
    while ($result2 = $que->fetch()) { ?>
        <div align="center" class="gal-img"><img src="<?php echo $result2['name']; ?>.jpg"></div>
        <div align="center" class="gal-text"><?php echo $result2['name']; ?></div>
        <hr>
        <?php
    }
    ?>
    <a href="index.php" class="gallery">Назад</a>
    <?php
}else{
?>
<a href="index.php" class="gallery">Назад</a>
<div align="center"><span class="gallery2">Галерея пуста</span></div>
<?php
}
?>
</body>
</html>