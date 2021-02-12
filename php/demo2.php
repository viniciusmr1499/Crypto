<?php 

require_once('vendor/autoload.php');

$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlUyRnNkR1ZrWDE5eHlacCtFQXh0a0VVbm1mMmRHdFhaYzYwN1E1cHltMjQ9IiwiaWF0IjoxNTE2MjM5MDIyfQ.XiA5s9LRwTA1H34di8XDq5Wndb0X2uEV5ngid6-XtDI";

$arr_division = explode('.', $token);
$payload = json_decode(base64_decode($arr_division[1]), true);
$payload = $payload['id'];

$aes = new \HemiFrame\Lib\AES();
$aes->setKey("12345");
$aes->setData("76017195026");

$encryptedString = $aes->encrypt();

$ivString = $aes->generateIv();
$aes->setIv($ivString);

$decryptedString = $aes->decrypt();

echo "Payload {$payload}" . PHP_EOL;
echo "Decrypted string: " . $decryptedString . PHP_EOL;
echo "encrypted string: " . $encryptedString . PHP_EOL;