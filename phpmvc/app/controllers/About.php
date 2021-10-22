<!-- 

  Ginanjar Ade Mulyana
  153040116
  https://github.com/ginanjarademulyana/prakweb2021_phpmvc_153040116
  Pertemuan 4 - 1 Oktober 2021 
  Materi Mengenai PHP MVC (Model - View Controller)

-->

<?php

class About extends Controller
{
  public function index($nama = 'Ginanjar Ade Mulyana', $pekerjaan = 'Mahasiswa', $umur = 24)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
