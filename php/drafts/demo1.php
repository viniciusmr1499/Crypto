<?php 

require "vendor/autoload.php";

use PhpAes\Aes;

// $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlUyRnNkR1ZrWDE5eHlacCtFQXh0a0VVbm1mMmRHdFhaYzYwN1E1cHltMjQ9IiwiaWF0IjoxNTE2MjM5MDIyfQ.XiA5s9LRwTA1H34di8XDq5Wndb0X2uEV5ngid6-XtDI";

// $arr_division = explode('.', $token);

// $payload = json_decode(base64_decode($arr_division[1]), true);
// $payload = $payload['id'];

$payload = "U2FsdGVkX18SDa7CW7jxc/fg9LR07Olgtmn6+SHsW+Q=";

$hex = hex2bin("e687fe810e4f5b7b3c24ef2668ce2622");

$aes = new Aes('abcdefgh01234567', 'cbc', '1234567890abcdef');

$decrypted = $aes->decrypt($payload);

var_dump([
    'payload' => $payload,
    'decrypted' => $decrypted,
    'hex' => $hex,
]);