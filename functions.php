<?php
// $length = $_GET["length"];
function passwordGenerator($length)
{
    if ($length <= 1) {
        return "ERROR!";

    } else {
        $chars = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'), array('@', '£', '$', '.', ',', ';', ':', '_', '-', '%', '&', '*'));
        $password = "";

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[array_rand($chars)];
        }

        return $password;
    }
}