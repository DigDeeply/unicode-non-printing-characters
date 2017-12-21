<?php
$search = ${SEARCH_NON_PRINTING};
$string = "‬";
echo 'Normal String: ' . $string . "\n";
echo 'Before Replace urlencode: ' . urlencode($string) . "\n";
$str = str_replace($search, '', $string);
echo $str;
echo 'After Replace urlencode: ' . urlencode($str). "\n";
