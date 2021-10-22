<!-- 

  Ginanjar Ade Mulyana
  153040116
  https://github.com/ginanjarademulyana/prakweb2021_phpmvc_153040116
  Pertemuan 4 - 1 Oktober 2021 
  Materi Mengenai PHP MVC (Model - View Controller)

-->

<?php

class Controller
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}
