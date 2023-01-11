<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <?php
    // collegamento ad "helper.php" per la logica 
    require 'helper.php';
    // collegamento ad un'altra pagina per la password
    session_start();
    ?>
</head>

<body>
    <!-- form per la lunghezza della password -->
    <form method="get">
        <label for="length">Lunghezza Password</label>
        <input type="text" name="length">
        <input type="submit" value="Genera Password">

        <?php
        // funzione per creare la password con numeri, lettere (min e maiusc), e carratteri speciali
        // function password_generator($length)
        // {
        //     // vengono combinati più array con array_merge
        //     $chars = array_merge(range(0, 5), range('a', 'q'), range('A', 'Q'), array('!', '&', '*', '?', '%'));
        //     $password = "";
        //     for ($i = 0; $i < $length; $i++) {
        //         $password .= $chars[array_rand($chars)];
        //     }
        //     return $password;
        // }
        
        // la lunghezza scritta dall'utente viene combinata con la funzione per generare la psw
        if (isset($_GET['length'])) {
            $password = password_generator($_GET['length']);
            // stampa la password nella stessa pagina di immissione dati, non serve più perchè viene mostrata in psw.php 
            // echo "Nuova Password: " . $password;
        
            // collegamento ad un'altra pagina per la password
            $_SESSION['length'] = $password;
            header('Location: psw.php');
        }

        ?>

    </form>

</body>

</html>