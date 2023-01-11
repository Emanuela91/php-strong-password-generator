<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generatort</title>
</head>

<body>
    <!-- form per la lunghezza della password -->
    <form method="get">
        <label for="length">Lunghezza Password</label>
        <input type="text" name="length">
        <input type="submit" value="Genera Password">

        <?php
        // funzione per creare la password con numeri, lettere (min e maiusc), e carratteri speciali
        function password_generator($length)
        {
            // vengono combinati più array con array_merge
            $chars = array_merge(range(0, 5), range('a', 'q'), range('A', 'Q'), array('!', '&', '*', '?', '%'));
            $password = "";
            for ($i = 0; $i < $length; $i++) {
                $password .= $chars[array_rand($chars)];
            }
        }

        ?>

    </form>

</body>

</html>