<?php
$items = explode(",", $_GET['items']) ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    <ul>
        <?php $length = count($items);
        for ($i=0; $i < $length; $i++) { ?>
            <li> Hello - <?= $items[$i] ?> </li>
        <?php } ?> 
    </ul>

    <ul>
        <?php foreach ($items as $item) { ?>
            <li> Hello - <?= $item ?> </li>
        <?php } ?> 
    </ul>
</body>
</html>