<?php

class About extends Controller{
    public function index($nama = 'Chaerul',$pekerjaan = 'Karyawan' , $umur = 32)
    {
       $this->view('about/index', $data);
    }
    public function page()
    {
        $this->view('aboot/page');
    }
}