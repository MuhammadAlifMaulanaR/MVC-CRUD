<?php

class MahasiswaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMahasiswa()
    {
        $this->db->query("SELECT * FROM mahasiswa");

        return $this->db->fetchAll();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM mahasiswa  WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->fetch();
    }

    public function tambahMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (name, jurusan) VALUES (:name, :jurusan)";
        $this->db->query($query);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->execute();
    }
    public function hapusMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET name = :name, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->execute();
    }
}
