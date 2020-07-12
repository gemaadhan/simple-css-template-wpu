// ubah object jadi json

// let mahasiswa = {
//     nama: "gema",
//     email: "gemaadhan@gmail.com",
//     nim: "21120112130040"
// }

// console.log(JSON.stringify(mahasiswa));

//ini ubah json jadi object
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

//pake jequery ubah json jadi object
$.getJSON('coba.json', function(hasil) {
    console.log(hasil);
});