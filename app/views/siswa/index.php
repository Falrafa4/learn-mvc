<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/siswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Siswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item">
                        <?= $siswa['nama'] ?>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id'] ?>" class="btn badge btn-danger float-end ms-1 btn-hapus" id="btn-hapus" style="text-decoration: none;">Hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/edit/<?= $siswa['id'] ?>" class="btn badge btn-success float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" style="text-decoration: none;" data-id="<?= $siswa['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id'] ?>" class="btn badge btn-primary float-end ms-1" style="text-decoration: none;">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" class="form-control" id="nisn" name="nisn" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
                            <option value="Teknik Jaringan Akses Telekomunikasi">Teknik Jaringan Akses Telekomunikasi</option>
                            <option value="Sistem Informasi, Jaringan, dan Aplikasi">Sistem Informasi, Jaringan, dan Aplikasi</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>