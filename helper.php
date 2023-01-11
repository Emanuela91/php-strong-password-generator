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
    return $password;
}
?>