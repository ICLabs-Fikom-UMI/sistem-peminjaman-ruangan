<?php

class ImageUpload{
    public static function upload($fileInputName, $targetDirectory)
    {
        $namaFile = $_FILES[$fileInputName]['name'];
        $ukuranFile = $_FILES[$fileInputName]['size'];
        $error = $_FILES[$fileInputName]['error'];
        $tmpname = $_FILES[$fileInputName]['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo '<div class="alert alert-danger" role="alert">Pilih gambar terlebih dahulu!</div>';
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
            alert('yang anda upload bukan gambar!');
            </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar 
        if ($ukuranFile > 2097152) {
            echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // Tentukan direktori tujuan berdasarkan targetDirectory
        $targetFolder = 'img/' . $targetDirectory . '/';

        move_uploaded_file($tmpname, $targetFolder . $namaFileBaru);

        return $namaFileBaru;
    }
}