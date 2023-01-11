<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <!-- pagina collegata ad index che mostra la password -->
    <?php
    session_start();
    $password = $_SESSION['length'];
    echo "La tua Password è:" . $password;
    ?>

</body>

</html>