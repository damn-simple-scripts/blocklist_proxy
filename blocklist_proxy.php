<?php
header('Content-Type: text/plain');
echo "[Adblock Plus 2.0]\r\n";

$homepage = file_get_contents($_GET['url']);
$homepage = preg_replace('/\r\n|\r|\n/', "\r\n", $homepage );
$homepage = preg_replace('/\[Adblock.*\]/', "", $homepage );

echo preg_replace('/[#;!]/i','!',$homepage);
?>
