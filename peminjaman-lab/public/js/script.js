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