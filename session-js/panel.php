<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session js</title>
</head>

<body>

    <?php

    session_start();

    if (isset($_SESSION['user']) && $_SESSION['user']) {
        echo 'hi panel';
    } else {
        echo 'please login';
    }

    ?>

    <script>
        let myCookie = document.cookie;
        
        alert(myCookie);
    </script>

</body>

</html>