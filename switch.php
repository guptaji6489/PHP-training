<?php
$itemType = $_GET['type'] ?? 'others';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<?php switch ($itemType) {
    case 'food': ?>
        echo 'it is tasty, ';
    <?php case 'groceries': ?>
        echo "Eat well!";
        <?php break; ?>

    <?php case 'fashion': ?>
        echo "Looks nice";
        <?php break; ?>

    <?php case 'electronics': ?>
        echo "Use with caution";
        <?php break; ?>

    <?php case 'others': ?>
        echo "Wish you good exp...";
        <?php break; ?>
    
    <?php default: ?>
        echo "I don't know what product it is";
        <?php break; ?>
        
<?php } ?>

</body>
</html>