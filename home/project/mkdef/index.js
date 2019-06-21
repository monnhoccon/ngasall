const read = require('readline');
const colo = require('colors');
const fs = require('fs');

colo.setTheme({a: 'blue', b: 'red', c: 'green'})

const tanya = read.createInterface ({ input: process.stdin, output: process.stdout });

console.log('\n Tools Isi Ulang Pulsa dan Kuota \n');

console.log(' ['.c + '1' + '] '.c + 'Isi Ulang Pulsa');
console.log(' ['.c + '2' + '] '.c + 'Isi Ulang Kuota');

tanya.question('\n ['.c + '?' + '] '.c + 'Pilih [1/2] : ', (satu) => {
  if (`${satu}` == 1 || `${satu}` == 01) {
    tanya.question('\n ['.c + '!' + '] '.c + 'Masukan Nomor   : ', (nmr) => {
    tanya.question(' ['.c + '?' + '] '.c + 'Masukan Nomimal : ', (nml) => {
      let berhasil = 'Berhasil'.a + ',' + ` ${nmr} ` + 'dengan nominal'.a + ` Rp ${nml},00,- ` + '[' + 'SUCCESS'.c + ']'
      let gagal = '\n Gagal'.a + ',' + ` ${nmr} ` + 'dengan nominal'.a + ` Rp ${nml},00,- ` + '[' + 'FAILED'.b + ']'
      /*const hasil = new Array(berhasil, gagal);
      const data = hasil[Math.floor(Math.random() * hasil.length)];*/
      console.log('\n ['.b + '√' + '] '.b + berhasil + '\n'); process.exit(1);
    }); });
  } else if (`${satu}` == 2 || `${satu}` == 02) {
    tanya.question('\n ['.c + '!' + '] '.c + 'Masukan Nomor   : ', (nmr) => {
    tanya.question(' ['.c + '?' + '] '.c + 'Masukan Nomimal : ', (nml) => {
      //let size = ['kb', 'MB', 'GB', 'TB'];
      //let kuota = size[Math.floor(Math.random() * size.length)]
      const berhasil = 'Berhasil'.a + ',' + ` ${nmr} ` + 'dengan kuota sebesar'.a + ` ${nml} ` + '[' + 'SUCCESS'.c + ']'
      console.log('\n ['.b + '√' + '] '.b + berhasil + '\n'); process.exit(1);
    }); });
//    console.log(berhasil); process.exit(1);
  } else {
    console.log('\n ['.a + '!' + '] '.a + 'Key Interupt ! '); process.exit(1);
  }
})
