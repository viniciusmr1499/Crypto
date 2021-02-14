const CryptoJS = require("crypto-js");

const value = "vinicius";

// Encrypt
const ciphertext = CryptoJS.AES.encrypt(value, '12345');
 
// Decrypt
const bytes  = CryptoJS.AES.decrypt(ciphertext, '12345');
const originalText = bytes.toString(CryptoJS.enc.Utf8);
 
console.log('ciphertext', ciphertext.toString());
console.log('originalText', originalText);