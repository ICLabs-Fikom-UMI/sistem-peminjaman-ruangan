$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Pengguna');
        $('.modal-footer button[type=submit]').html('Submit');
    });

    $('.tombolTambahJurusan').on('click', function(){
        $('#formModalLabel').html('Tambah Jurusan');
        $('.modal-footer button[type=submit]').html('Submit');
    });

    $('.tombolTambahRuangan').on('click', function(){
        $('#formModalLabel').html('Tambah Ruangan');
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
            data: {id_user : id},
            dataType: "json",
            success: function (data) {
                $('#nama_lengkap').val(data.nama_lengkap);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#no_telp').val(data.no_telp);
                $('#password').val(data.password);
                $('#confirm_password').val(data.password);
                $('#id_user').val(data.id_user);

                            // Menampilkan jurusan berdasarkan ID
            $.ajax({
                type: "post",
                url: "http://localhost/peminjaman-lab/public/mahasiswa/getJurusanById",
                data: {id_jurusan : data.id_jurusan},  // Mengirim ID jurusan ke backend
                dataType: "json",
                success: function (jurusanData) {

        if (jurusanData) {
            // Jika ada data, tambahkan opsi dengan data yang diterima
            $('#nama_jurusan').append('<option value="' + jurusanData.id_jurusan + '" selected>' + jurusanData.nama_jurusan + '</option>');
        } else {
            // Jika tidak ada data, tambahkan opsi default
            $('#nama_jurusan').append('<option value="#">-- Pilih Jurusan --</option>');
        }
                    // Mengisikan data jurusan ke dalam opsi select nama_jurusan
                    //$('#nama_jurusan').append('<option value="' + jurusanData.id_jurusan + '" selected>' + jurusanData.nama_jurusan + '</option>');
                }
            });

                $.ajax({
                type: "post",
                url: "http://localhost/peminjaman-lab/public/mahasiswa/getRoleById",
                data: {id_role : data.id_role},  // Mengirim ID jurusan ke backend
                dataType: "json",
                success: function (roleData) {

        if (roleData) {
            // Jika ada data, tambahkan opsi dengan data yang diterima
            $('#nama_role').append('<option value="' + roleData.id_role + '" selected>' + roleData.nama_role + '</option>');
        } else {
            // Jika tidak ada data, tambahkan opsi default
            $('#nama_role').append('<option value="#">-- Pilih Role --</option>');
        }
                    // Mengisikan data jurusan ke dalam opsi select nama_jurusan
                    //$('#nama_role').append('<option value="' + roleData.id_role + '" selected>' + roleData.nama_role + '</option>');
                }
            });
            }
        });
    });

    $('.tombolEditJurusan').on('click', function(){
        $('#formModalLabel').html('Ubah Data Jurusan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/peminjaman-lab/public/jurusan/ubah');

        const id = $(this).data('id');
        
        // Menggunakan AJAX 
        $.ajax({
            type: "post",
            url: "http://localhost/peminjaman-lab/public/jurusan/getubah",
            data: {id_jurusan : id},
            dataType: "json",
            success: function (data) {
                $('#namaJurusan').val(data.nama_jurusan);
                $('#ketuaJurusan').val(data.ketua_jurusan);
                $('#id_jurusan').val(data.id_jurusan);
            }
        });
    });

});