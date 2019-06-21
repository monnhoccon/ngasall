






var request = require('request');
var readlin = require('readline');

const tanya = readlin.createInterface => ({
  input : process.stdin,
  output: process.stdout
});

console.log('\n Scan Port By Termux Discuss Party \n');

tanya.question(' Input Ip : ', async (ip) => {
  request(`https://api.hackertarget.com/nmap/?q=${ip}`, async (error, response, body) => {
    await console.log(`\n ${body} \n `);
  ; process.exit(1); })
});

/**
 *
 *   $ npm i --save request readline
 *
 */

