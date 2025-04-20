$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nisn').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nisn').val(data.nisn);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });

    });

});






const btnHapus = document.querySelectorAll('.btn-hapus');
btnHapus.forEach(function(btnHapus){
    btnHapus.addEventListener('click', function (e) {
        e.preventDefault();
    
        const targetHref = btnHapus.getAttribute('href');
    
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = targetHref;
                // Swal.fire({
                //     title: "Deleted!",
                //     text: "Your file has been deleted.",
                //     icon: "success"
                // });
            }
        });
    });
})