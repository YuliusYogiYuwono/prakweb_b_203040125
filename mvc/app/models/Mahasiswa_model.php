<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


//    private $mhs = [
//        [
//            "nama" => "Yulius Yogi Yuwono",
//            "nrp" => "203040125",
//            "email" => "yulius.203040125@mail.unpas.ac.id",
//            "jurusan" => "Teknik Informatika"
//        ]
//
//    ];
//


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
