<?php

class About extends Controller{
    public function index($nama = 'Chaerul',$pekerjaan = 'Karyawan' , $umur = 32)
    {
        $data['nama'] = $nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header');
       $this->view('about/index', $data);
       $this->view('templates/footer');
    }
    public function page()
    {
        $data['page'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}