<?php
require_once 'myvariables.php';
require_once 'myvariables.php';
require_once 'myvariables.php';

$dateMessage = $date == 'today' ? "and Have a good day" : "See you soon";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
</head>
<body>
    <?php
        include 'eventplannerheader.php';
    ?>

    <main style="background-color: yellow;">
        <?php if ($event == 'training') { ?>
            <p style="color: blue;">
                Have a good learning <?= $date ?>!<br>
                <?= $dateMessage ?>
            </p>
        <?php } elseif ($event == 'gettogether') { ?>
            <p style="color: green;">
                See you all soon<br>
            </p>
        <?php } elseif ($event == 'bday') { ?>
            <p style="color: purple;">
                Happy birthday<br>
            </p>
        <?php } else { ?>
            <p style="color: red;">All the best!</p>
        <?php } ?>
    </main>

    <?php
        include 'eventplannerfooter.php';
    ?>


</body>
</html>
