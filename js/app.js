const CryptoJS = require("crypto-js");

const value = '76017195026';

// Encrypt
const ciphertext = CryptoJS.AES.encrypt(value, '12345', {
    iv: 'a7adc3d68e17c350'
});
 
// Decrypt
const bytes  = CryptoJS.AES.decrypt(ciphertext, '12345');
const originalText = bytes.toString(CryptoJS.enc.Utf8);
 
console.log('bytes', bytes); 
console.log('ciphertext', ciphertext.toString().trim());
console.log('originalText', originalText);
console.log('IV', ciphertext.iv.toString());