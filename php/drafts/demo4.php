<?php 

$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlUyRnNkR1ZrWDE5eHlacCtFQXh0a0VVbm1mMmRHdFhaYzYwN1E1cHltMjQ9IiwiaWF0IjoxNTE2MjM5MDIyfQ.XiA5s9LRwTA1H34di8XDq5Wndb0X2uEV5ngid6-XtDI";

$arr_division = explode('.', $token );


$payload = json_decode(base64_decode($arr_division[1]), true);
$payload = $payload['id'];


// DEFINE our cipher
const AES_256_CBC = 'AES-256-CBC';

$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

$decrypted = openssl_decrypt($payload, AES_256_CBC, '12345', 0, $iv);
echo "Decrypted: $decrypted\n";


// echo "Decrypted: ". base64_decode(decrypted) . "\n";

// var_dump($payload);

// $plaintext = "message to be encrypted";
// $cipher = "aes-128-gcm";
// if (in_array($cipher, openssl_get_cipher_methods()))
// {
//     $ivlen = openssl_cipher_iv_length($cipher);
//     $iv = openssl_random_pseudo_bytes($ivlen);
//     $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
//     //store $cipher, $iv, and $tag for decryption later
//     $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
//     echo $original_plaintext."\n";
// }

// $key = "chave de criptografia"; 
// $text = "123456";
// $criptografado = bin2hex(openssl_encrypt($text, 'AES-128-CBC', $key));
// $decrypted = openssl_decrypt(hex2bin($criptografado), 'AES-128-CBC', $chave);

// var_dump ($criptografado, $decriptografado);