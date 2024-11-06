<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <ul>
            <?php foreach ($listProduct as $product): ?>
                <li><?php echo $product['ten_sp']; ?></li>
            <?php endforeach ?>
        </ul>
    </table>
</body>
</html>