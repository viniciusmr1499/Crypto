<?php 
require __DIR__ . "/../vendor/autoload.php";

use MiladRahimi\PhpCrypt\Symmetric;

$key = '12345678910111111';

// Set the key using the constructor
$symmetric = new Symmetric($key);

$encryptedData = $symmetric->encrypt('43547912008');
// $encryptedData = "bLzA++bAx+r1ATDDdEheBQ==";
echo "encryptedData " . $encryptedData . "\n";
echo "decryptedData " . $symmetric->decrypt($encryptedData) . "\n";