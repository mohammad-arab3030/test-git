<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>http only</title>
</head>

<body>
    <?php

    session_set_cookie_params(0, '/', 'localhost', false, true);

    session_start();

    $_SESSION['user'] = 'mohammad';

    echo 'session is start';

    ?>

    <script>
        alert(document.cookie);
    </script>

</body>

</html>