<?php 

require __DIR__ . "/../vendor/autoload.php";

use Nullix\CryptoJsAes\CryptoJsAes;

// encrypt
$originalValue = 'vinicius'; // this could be any value
$password = "123456";
$encrypted = CryptoJsAes::encrypt($originalValue, $password);
// something like: {"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}


// decrypt
// $encrypted = '{"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}';
// $password = "123456";
$encrypted = 'U2FsdGVkX19vaIshekiBEqtm0xOr57IkIth2n9A7gZc=';

$decrypted = CryptoJsAes::decrypt($encrypted, $password);
echo "Encrypted: " . $encrypted . "\n\n";
echo "Decrypted: " . $decrypted . "\n";