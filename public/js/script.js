$(function () {
    $('.tambah-button').on('click', function () {

        $('#ubah-title').html('Tambah Mahasiswa');
        $('#submit-button').html('Tambah');

        $('#hidden-id').val('');
        $('#input-name').val('');
        $('#input-jurusan').val('');

        $('#mahasiswa-form').attr('action', BASEURL + '/Home/prosesTambah');

    });

    $('.edit-button').on('click', function () {

        $('#ubah-title').html('Ubah Mahasiswa');
        $('#submit-button').html('Ubah');

        $('#mahasiswa-form').attr('action', BASEURL + '/Home/prosesUbah');

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: BASEURL + '/Home/getUbah',
            data: { id: id },
            method: 'POST',
            dataType: 'json',

            success: function (data) {
                // console.log(data);
                $('#hidden-id').val(data.id);
                $('#input-name').val(data.name);
                $('#input-jurusan').val(data.jurusan);

            },
        });
    });
});
