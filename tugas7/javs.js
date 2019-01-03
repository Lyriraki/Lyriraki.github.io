alert("Selamat datang di Auto Room");


var jam, name, nim;
name = prompt("Masukkan Nama", "Disini");
nim = prompt("Masukkan NIM", "Disini");
jam = prompt("Masukkan Jam", "Disini");

/*var today = new Date();
jam = today.getHours();
menit = today.getMinutes(); misal ingin mengambil realtime*/

document.writeln(name, "<br>");
document.writeln(nim, "<br>");
if (jam >= 6.00 && jam <= 12.00) {
    document.writeln("Selamat Pagi ini jam = ", jam);
    if (jam >= 8.40 && jam <= 10.20) {
        document.write("<br>Saat ini hadiri Kuliah PBW");
    }
} else if (jam > 12.00 && jam <= 15.00) {
    document.write("Selamat Siang, ini jam = ", jam);
} else if (jam > 15.00 && jam <= 23.59) {
    document.write("Selamat Sore/Malam, ini jam = ", jam);
} else {
    document.write("Ini masih Dini hari, jam = ", jam);
}


var konfirmasi = confirm("Apakah anda ingin mengisi ulang jam tadi?");
if (konfirmasi == true) {
    document.location.href = "index.html";
} else
    alert("Anda tidak mengulang");