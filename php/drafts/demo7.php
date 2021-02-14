<?php 
require __DIR__ . "/../vendor/autoload.php";

use Ronijan\EncryptDecrypt\EncryptDecrypt;

$encryptionKey = '12345678910111111';

$encryptDecrypt = new \Ronijan\EncryptDecrypt\EncryptDecrypt();

$encrypt = $encryptDecrypt->encrypt('43547912008', $encryptionKey);
$decryp = $encryptDecrypt->decrypt($encrypt, $encryptionKey);
 
echo "Encrypted: {$encrypt} \n";
echo "Decrypted {$decryp} \n";