<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>
<body>
<?php
require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape('red', 50, 50);
?>
    <div style="
        position: absolute;
        left: <?php echo $shape->x; ?>px;
        top: <?php echo $shape->y; ?>px;
        width: 100px;
        height: 100px;
        background-color: <?php echo htmlspecialchars($shape->color, ENT_QUOTES, 'UTF-8'); ?>;
    "></div>
</body>
</html>