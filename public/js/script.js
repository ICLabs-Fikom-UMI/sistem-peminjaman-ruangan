$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Pengguna');
        $('.modal-footer button[type=submit]').html('Submit');
    });

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/peminjaman-lab/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        // Menggunakan AJAX 
        $.ajax({
            type: "post",
            url: "http://localhost/peminjaman-lab/public/mahasiswa/getubah",
            data: {id : id},
            dataType: "json",
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});

    // Fungsi untuk menampilkan pratinjau gambar
    function previewImage() {
        var thumbnailInput = document.getElementById('thumbnail-upload');
        var thumbnailPreview = document.getElementById('thumbnail-preview');

        // Memeriksa apakah ada file yang dipilih
        if (thumbnailInput.files && thumbnailInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                thumbnailPreview.src = e.target.result;
            };

            // Membaca file gambar sebagai URL data
            reader.readAsDataURL(thumbnailInput.files[0]);

            // Menampilkan elemen gambar pratinjau
            thumbnailPreview.style.display = 'block';
        }
    }