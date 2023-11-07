<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$message1 = stream_get_line(STDIN, 500 + 1, "\n");
$message2 = stream_get_line(STDIN, 500 + 1, "\n");
$message3 = stream_get_line(STDIN, 500 + 1, "\n");

$length = strlen($message1);
$encodedHex = '';
for ($i = 0; $i < $length; $i += 2) {
    $byte1 = hexdec(substr($message1, $i, 2));
    $byte2 = hexdec(substr($message2, $i, 2));
    $byte3 = hexdec(substr($message3, $i, 2));
    $xorResult = $byte1 ^ $byte2 ^ $byte3;
    $encodedHex .= dechex($xorResult);
}

function hexToText($hex) {
    $text = '';
    for ($i = 0; $i < strlen($hex); $i += 2) {
        $byte = hexdec(substr($hex, $i, 2));
        $text .= chr($byte);
    }
    return $text;
}
$encodedText = hexToText($encodedHex);

echo($encodedText);
?>
