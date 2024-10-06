<div style="padding-right: 60%; margin-left: 50px; margin-top: 80px;">
    <button type="button" class="btn btn-outline-success btn-lg mb-2 tambah-button" data-bs-toggle="modal" data-bs-target="#addMahasiswa">Tambah</button>

    <table class="table border-dark" style="border-collapse: collapse;" border="1">
        <thead class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jurusan</th>
            <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>

        <tbody>
            <!-- Looping data mahasiswa -->
            <?php if (!empty($data['mahasiswa'])): ?>
                <?php foreach ($data['mahasiswa'] as $index => $mahasiswa): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $mahasiswa['name'] ?></td>
                        <td><?= $mahasiswa['jurusan'] ?></td>
                        <td>
                            <button type="button" class="btn btn-primary edit-button" data-id="<?= $mahasiswa['id']; ?>" data-bs-toggle="modal" data-bs-target="#addMahasiswa">
                                EDIT
                            </button>
                        </td>
                        <td>
                            <form action="<?= BASEURL; ?>/Home/hapus/<?= $mahasiswa['id']; ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                <button type="submit" class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Belum ada data mahasiswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>


    <!-- modal add -->
    <div class="modal fade" id="addMahasiswa" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubah-title">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form id="mahasiswa-form" action="<?= BASEURL ?>/Home/prosesTambah" method="POST">
                        <input type="hidden" name="id" id="hidden-id">
                        <div class="mb-3  ps-5" style="padding-right: 10%;">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control input-name" name="name" id="input-name" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3 ps-5" style="padding-right: 10%;">
                            <label for="jurusan" class="form-label">Jurusan:</label>
                            <input type="text" name="jurusan" class="form-control input-jurusan" id="input-jurusan" placeholder="Masukkan Jurusan" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success" name="submit" id="submit-button">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>