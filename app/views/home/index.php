<link rel="stylesheet" href="<?= BASEURL ?>/public/css/home.css">
<nav class="navbar bg-light">
    <div class="container-fluid" style="">
        <form class="d-flex ms-auto">
            <div class="d-flex flex-column">
                <a class="navbar-brand">muhalif.maulana17@gmail.com</a>
                <a class="navbar-brand ms-auto" style="font-size: 0.9rem;">Alif</a>
            </div>
            <img src="<?= BASEURL ?>/public/img/user-icon.png" alt="Profile" width="50" height="50">
        </form>
    </div>
</nav>

<div class="overflow-y-auto" style="max-height: 95vh; overflow-x: hidden; margin-top: 20px;">
    <div class="row px-3">
        <div class="col-lg-3 p-2">
            <div class="card p-3 bg-light text-body-secondary">
                <div class="row">
                    <div class="col-7 card-body">
                        <h6 class="card-subtitle mb-2">Akun User</h6>
                        <!-- <h2 class="card-title"><?= $data['user']['jumlahUser'] ?></h2> -->
                        <p class="card-text">Jumlah</p>
                    </div>
                    <div class="col-5 align-self-center">
                        <img src="<?= BASEURL ?>/public/img/user-management.png" alt="foto-card4" width="80px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 p-2">
            <div class="card p-3 bg-light text-body-secondary">
                <div class="row">
                    <div class="col-7 card-body">
                        <h6 class="card-subtitle mb-2">Mahasiswa</h6>
                        <!-- <h2 class="card-title"><?= $data['mahasiswa']['jumlahMahasiswa'] ?></h2> -->
                        <p class="card-text">Jumlah</p>
                    </div>
                    <div class="col-5 align-self-center">
                        <img src="<?= BASEURL ?>/public/img/data-mahasiswa.png" alt="foto-card4" width="80px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 p-2">
            <div class="card p-3 bg-light text-body-secondary">
                <div class="row">
                    <div class="col-7 card-body">
                        <h6 class="card-subtitle mb-2">Mata Kuliah</h6>
                        <!-- <h2 class="card-title"><?= $data['matkul']['jumlahMatkul'] ?></h2> -->
                        <p class="card-text">Jumlah</p>
                    </div>
                    <div class="col-5 align-self-center">
                        <img src="<?= BASEURL ?>/public/img/matakuliah.png" alt="foto-card4" width="80px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 p-2">
            <div class="card p-3 bg-light text-body-secondary">
                <div class="row">
                    <div class="col-7 card-body">
                        <h6 class="card-subtitle mb-2">Pembayaran</h6>
                        <!-- <h2 class="card-title"><?= $data['countpembayaran']['jumlahPembayaran'] ?></h2> -->
                        <p class="card-text">Jumlah</p>
                    </div>
                    <div class="col-5 align-self-center">
                        <img src="<?= BASEURL ?>/public/img/pembayaran.png" alt="foto-card4" width="80px">
                    </div>
                </div>
            </div>
        </div>
    </div>