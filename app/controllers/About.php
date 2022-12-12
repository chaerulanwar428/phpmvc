<?php

class About{
    public function index($nama = 'Chaerul',$pekerjaan = 'Karyawan')
    {
        echo "Halo,nama saya $nama , saya adlah seorang $pekerjaan"
    }
    public function page()
    {
        echo 'About/page';
    }
}