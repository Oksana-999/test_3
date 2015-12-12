<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--VIEWS - внешний вид(это видит пользователь) - ЛОГИКА ОТОБРАЖЕНИЯ- HTML-код
с небольшими вставками PHP здесь не должно быть запроса к Б.Д.-->
<?php foreach ($items as $item): ?>
    <h1><?php echo $item->news; ?></h1>
    <div><?php echo $item->text; ?></div>
<?php endforeach; ?>
</body>
</html>
