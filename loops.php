<?php
$count = intval($_GET['count'] ?? 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<?php
    // for ($i=$count; $i > 0; $i--) { 
    for ($i=0; $i < $count; $i++) { 
        echo 'Hello', $i, '<br>';
    }

    $i=0;
    for (; ;) { 
        if ($i > $count) {
            break;
        }
        if ($i != 2) {
            echo 'Hello', $i, '<br>';
        }
        $i += 2;
    }
    ?>
</body>
</html>