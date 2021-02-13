<?php 

namespace app\services;

class CryptoService {
    private string $key;
    private string $algorithm;
    private string $iv;


    public function __construct(string $key, string $algorithm, string $iv) {
        $this->key = base64_decode($key);
        $this->algorithm = $algorithm;
        $this->iv = $this->setIv(base64_decode($iv));
    }

    private function setIv(string $iv): string
    {
        $iv_len = openssl_cipher_iv_length($this->algorithm);
        $newIv = substr($iv, 0, $iv_len);
        
        return $newIv;
    }

    public function getIv(): string 
    {
        return $this->iv; 
    }

    public function Encrypt(string $message): string 
    {
        $mensagem_encriptografada = openssl_encrypt($message, $this->algorithm, $this->key, OPENSSL_RAW_DATA, $this->iv);
        
        return base64_encode($mensagem_encriptografada);
    }

    public function Decrypt(string $cipher_message): string
    {        
        $mensagemDescriptografada = openssl_decrypt(base64_decode($cipher_message), $this->algorithm, $this->key, OPENSSL_RAW_DATA, $this->iv);
        
        return $mensagemDescriptografada;
    }
}