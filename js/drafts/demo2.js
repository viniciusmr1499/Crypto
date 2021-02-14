const CryptoJS = require("crypto-js");

const message = "43547912008";

let key = "12345678910111111"; //length=22
let iv  = "mHGFxENnZLbienLyANoi.e"; //length=22


key = CryptoJS.enc.Base64.parse(key); // length=16 bytes
iv = CryptoJS.enc.Base64.parse(iv); // length=16 bytes


let cipherData = CryptoJS.AES.encrypt(message, key, { iv });
const bytes = CryptoJS.AES.decrypt(cipherData, key, { iv, });

const textOriginal = bytes.toString(CryptoJS.enc.Utf8);

console.log('IV:', iv.toString());
console.log('cipherData:', cipherData.toString());
console.log('textOriginal:', textOriginal);