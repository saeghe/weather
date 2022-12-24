<?php

namespace Saeghe\Weather\Weather;

function get(string $url): string
{
    $ch = curl_init('https:/wttr.in?ANSI');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}
