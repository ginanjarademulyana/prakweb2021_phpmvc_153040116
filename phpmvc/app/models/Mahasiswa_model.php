<!-- 

  Ginanjar Ade Mulyana
  153040116
  https://github.com/ginanjarademulyana/prakweb2021_phpmvc_153040116
  Pertemuan 4 - 1 Oktober 2021 
  Materi Mengenai PHP MVC (Model - View Controller)

-->

<?php

class Mahasiswa_model
{
  private $dbh; // Database handler
  private $stmt;

  public function __construct()
  {
    //  Data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
