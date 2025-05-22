// let mahasiswa = {
//         nama: "Syafrilla Diantamela",
//         nim: "2217020141",
//         email: "tameladian@gmail.com"
// }

// console.log(JSON.stringfiy(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa= this.responseText;
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();
$.getJSON('coba.json', function (data) {
    console.log(data);
});