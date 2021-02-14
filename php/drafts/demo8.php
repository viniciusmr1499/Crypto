<?php 
require __DIR__ . "/../vendor/autoload.php";
use Lablnet\Encryption;

$encryption = new Encryption('12345');

//Encrypt the message
// $encrypt = $encryption->encrypt("This is a text");

$decrypt = $encryption->decrypt('U2FsdGVkX1+eksYzgDS3nMw55OD8ypQ1T6428djBUCE=');	
// echo "encrypt: " . $encrypt . "\n";
echo "decrypt: " . $decrypt . "\n";