<!-- 

  Ginanjar Ade Mulyana
  153040116
  https://github.com/ginanjarademulyana/prakweb2021_phpmvc_153040116
  Pertemuan 4 - 1 Oktober 2021 
  Materi Mengenai PHP MVC (Model - View Controller)

-->

<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
