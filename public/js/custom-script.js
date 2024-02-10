function hitungMundur(waktuMulai, waktuSelesai, elemenSisaWaktu, statusPeminjaman) {
    var waktuSekarang = new Date();
    var sisaWaktu;

    if (statusPeminjaman === "Disetujui" && waktuSekarang >= waktuMulai) {
        sisaWaktu = waktuSelesai - waktuSekarang;
    } else if (statusPeminjaman === "Disetujui" && waktuSekarang < waktuMulai) {
        sisaWaktu = waktuSelesai - waktuMulai;
    } else {
        // Jika status peminjaman "Pending" atau waktu selesai telah lewat, tampilkan "Waktu Habis"
        $(elemenSisaWaktu).html("Waktu Habis");
        return;
    }

    if (sisaWaktu <= 0) {
        $(elemenSisaWaktu).html("Waktu Habis");
    } else {
        var jam = Math.floor(sisaWaktu / (1000 * 60 * 60));
        var menit = Math.floor((sisaWaktu % (1000 * 60 * 60)) / (1000 * 60));
        var detik = Math.floor((sisaWaktu % (1000 * 60)) / 1000);

        // Format waktu
        var sisaWaktuText = jam + ":" + (menit < 10 ? "0" : "") + menit + ":" + (detik < 10 ? "0" : "") + detik;
        $(elemenSisaWaktu).html(sisaWaktuText);
    }
}