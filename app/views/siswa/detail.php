<div class="container mt-5">

    <div class="card w-50">
        <div class="card-body">
            <h5 class="card-title"><?= $data['siswa']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nisn'] ?></h6>
            <p class="card-text"><?= $data['siswa']['email'] ?></p>
            <p class="card-text"><?= $data['siswa']['jurusan'] ?></p>
            <a href="<?= BASEURL; ?>/siswa/" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>