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