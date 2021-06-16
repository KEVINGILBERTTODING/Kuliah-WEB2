$(function(){

    $('.btnTambahData').on('click', function(){
        var baseurl = $(this).data('zurl');
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl+'/mahasiswa/simpanmahasiswa');
    });

    $('.tampilModalUbah').on('click', function(){

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl+'/mahasiswa/updateMahasiswa');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl+'/mahasiswa/getDataChange',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#id').val(data.id);
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#jurusan').val(data.jurusan);
            }
        });
    });

})