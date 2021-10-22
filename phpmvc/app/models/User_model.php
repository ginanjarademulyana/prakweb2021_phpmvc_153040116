<!-- 

  Ginanjar Ade Mulyana
  153040116
  https://github.com/ginanjarademulyana/prakweb2021_phpmvc_153040116
  Pertemuan 4 - 1 Oktober 2021 
  Materi Mengenai PHP MVC (Model - View Controller)

-->

<?php
class User_model
{
  private $nama = 'Ginanjar Ade Mulyana';

  public function getUser()
  {
    return $this->nama;
  }
}
