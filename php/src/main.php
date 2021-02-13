<?php 

require __DIR__ . "/../vendor/autoload.php";

use app\services\CryptoService;

$message = "your message here!";
$algorithm = "aes-256-cbc";
$key = "6Le0DgMTAAAAANokdEEial";
$iv = "mHGFxENnZLbienLyANoi.e";

$crypto = new CryptoService(base64_encode($key), $algorithm, base64_encode($iv));

$cipher_message = $crypto->Encrypt($message);

$decrypted = $crypto->Decrypt($cipher_message);

echo "\n IV: " . $crypto->getIv() . "\n";
echo " ---------------------------\n";
echo "\n Text encrypt: {$cipher_message} \n";
echo " ---------------------------\n";
echo "\n Text decrypt: {$decrypted} \n";
echo " ---------------------------\n";
echo "\n The End. \n";