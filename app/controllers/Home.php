<?php

class Home extends Controller
{
    public function index()
    {
        $model = $this->model('MahasiswaModel');
        $data['mahasiswa'] = $model->getMahasiswa();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }

    public function prosesTambah()
    {
        if (isset($_POST['name'], $_POST['jurusan'])) {
            $model = $this->model('MahasiswaModel');
            $model->tambahMahasiswa([
                'name' => $_POST['name'],
                'jurusan' => $_POST['jurusan']
            ]);
            header("Location:" . BASEURL . "/index");
            exit();
        }
    }

    public function hapus($id)
    {
        if ($this->model('MahasiswaModel')->hapusMahasiswa($id) > 0) {
            header('Location: ' . BASEURL . '/index');
            exit;
        } else {
            header('Locatiion: ' . BASEURL . '/index');
            exit;
        }
    }
    public function getUbah()
    {
        $id = $_POST['id'];
        $data = $this->model('MahasiswaModel')->getMahasiswaById($id);
        echo json_encode($data);
    }

    public function prosesUbah()
    {
        if (isset($_POST['id'], $_POST['name'], $_POST['jurusan'])) {
            $model = $this->model('MahasiswaModel');
            $model->ubahMahasiswa([
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'jurusan' => $_POST['jurusan']
            ]);
            header("Location:" . BASEURL . "/index");
            exit();
            echo json_encode(['status' => 'success']);
        }
    }
}
