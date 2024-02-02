<?php

class Flasher
{

    public static function setFlash($pesan, $aksi, $tipe, $jenis)
    {
        // $_SESSION['flash'] = [
        //     'pesan' => $pesan,
        //     'aksi' => $aksi,
        //     'tipe' => $tipe
        // ];

        // Cek apakah $_SESSION['flash'] sudah diinisialisasi
        if (!isset($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }

        // Tambahkan data flash ke dalam array $_SESSION['flash']
        $_SESSION['flash'][] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'jenis' => $jenis,
            'durasi' => 5000
        ];
    }

    public static function flash($jenis = null)
    {
        // if (isset($_SESSION['flash'])) {
        //     echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
        //     Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . ' </strong> ' . $_SESSION['flash']['aksi'] . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
        // unset($_SESSION['flash']);

        if (isset($_SESSION['flash'])) {
            foreach ($_SESSION['flash'] as $flash) {
                // Tampilkan pesan flash hanya jika jenis cocok (atau jika jenis null)
                if ($jenis === null || $jenis === $flash['jenis']) {
                    echo '<div class="alert alert-' . $flash['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data ' . $flash['jenis'] . ' <strong>' . $flash['pesan'] . ' </strong> ' . $flash['aksi'] . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }

            // Hapus semua data flash setelah ditampilkan
            unset($_SESSION['flash']);
        }
    }
}
