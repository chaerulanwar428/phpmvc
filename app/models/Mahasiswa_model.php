<?php

class Mahasiswa_model{
    private $mhs = [
        [
            "nama" => "Chaerul Anwar",
            "nim" => "15200135",
            "email" => "chaerulanwar428@gmail.com",
            "jurusan" => "Ilmu komputer"
        ],
        [
            "nama" => "indra",
            "nim" => "11111111",
            "email" => "indra@gmail.com",
            "jurusan" => "Ilmu kedokteran"
        ],
        [
            "nama" => "joko",
            "nim" => "22222222",
            "email" => "joko@gmail.com",
            "jurusan" => "Tehnik industri"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }

}