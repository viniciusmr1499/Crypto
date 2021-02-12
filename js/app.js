const CryptoJS = require("crypto-js");

const value = '76017195026';

// Encrypt
const ciphertext = CryptoJS.AES.encrypt(value, '12345').toString();
 
// Decrypt
const bytes  = CryptoJS.AES.decrypt(ciphertext, '12345');
const originalText = bytes.toString(CryptoJS.enc.Utf8);
 
console.log('bytes', bytes); 
console.log('ciphertext', ciphertext);
console.log('originalText', originalText); 