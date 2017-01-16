<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aztec denerator</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="title" align="center">
<span class="style-text1">Курсова робота на тему:"Реалiзацiя вiдтворення 2D Aztec символу"</span><br>
<span class="style-text1">Група ІТ.мз-52с</span><br>
<span class="style-text1">Виконав: Копиця Олег</span><br>
</div>

<div class="form-generetor1" align="center">
    <div class="form-generetor2">
        <form action="sq.php" method="post">
            <span class="style-text2">Введіть текст для генерації Aztec символу</span><br>
            <input type="text" name="msg"><br>
            <span class="style-text2">Введіть якість малюнку</span><br>
            <input size="16" type="text" name="quality" placeholder="Стандартна якість 100"><br>
            <input type="submit" value="Створити Aztec символ" class="sub">
        </form>
    </div>
</div>
<div class="form-size1" align="center">
    <div class="form-size2">
        <form action="sz.php" method="post">
            <input size="23" type="text" name="size" placeholder="Стандартний розмір 70 пікселів"><br>
            <input type="submit" value="Змінити розмір" class="sub">
        </form>
    </div>
</div>
<div align="center">
    <a href="gallery.php" class="gallery">Галерея Aztec символів</a>
</div>
<?php
$x = include '../config.php';
$db = new PDO('mysql:host='.$x['h'].';dbname='.$x['db'], $x['l'], $x['p']);
$que = $db->query('SELECT * FROM kopica ORDER BY id DESC');
$result2 = $que->fetch();
$img_name = $result2['name'];
?>

<?php if($img_name != ''){ ?>
    <div class="code-img" align="center">
        <img src="<?php echo $img_name.'.jpg'; ?>">
    </div>
    <div class="code-download" align="center">
        <a class="download" href="<?php echo $img_name.'.jpg'; ?>" download>Скачати малюнок</a>
    </div>
<?php } ?>

</body>
</html>