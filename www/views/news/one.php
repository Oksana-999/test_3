<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach ($item as $it): ?>
    <h1><?php echo $it->news; ?></h1>
    <div><?php echo $it->text; ?></div>
<?php endforeach; ?>
</body>
</html>
