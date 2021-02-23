<?php
    session_start();
    

    if ($_GET['type'] == 'login') {
        $_SESSION['username'] = $_GET['username'];
    }
    // http_response_code(429);
    // header('Developed-by: SKaaS');
    // header('timing: evening');
    // setcookie('AuthToken', 'supersecrettoken', time()+300);
    // setcookie('Username', 'kalki', time()+300);
    // $_SESSION['Username'] = $_COOKIE['Username'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello <?= $_SESSION['username'] ?? 'User' ?>
    <?php
        // var_dump(headers_sent());
        // ob_flush();
        // var_dump(headers_sent());
    ?>
    <pre> <?php
        var_dump($_SERVER);

    // var_dump(headers_list());
    ?> </pre>
    <pre> <?php // var_dump($_COOKIE); ?> </pre>
</body>
</html>
    