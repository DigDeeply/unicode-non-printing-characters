<?php
$string = "‬​⁯	";
echo 'Normal String: ' . $string . "\n";
echo 'Before Replace urlencode: ' . rawurlencode($string) . "\n";
$str = preg_replace('/[[:^print:]]/', '', $string);
echo $str . "\n";
echo 'After Replace urlencode: ' . rawurlencode($str). "\n";
