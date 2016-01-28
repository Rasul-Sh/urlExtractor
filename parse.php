<?php

exit();
$input = 'http://test.com/index.html';
$input = trim($input, '/');
if (!preg_match('#^http(s)?://#', $input)) {
    $input = 'http://' . $input;
}
$urlParts = parse_url($input);
$domain = preg_replace('/^www\./', '', $urlParts['host']);
echo $domain;
?>