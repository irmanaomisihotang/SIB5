<?php
class KonversiSuhu {
  private $satuanSuhuAwal;
  private $besaranSuhu;
  private $satuanSuhuTujuan;

  public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
    $this->satuanSuhuAwal = $satuanSuhuAwal;
    $this->besaranSuhu = $besaranSuhu;
    $this->satuanSuhuTujuan = $satuanSuhuTujuan;
  }

  public function konversiSuhu() {
    $hasil = 0;
    switch ($this->satuanSuhuAwal) {
      case 'Celcius':
        if ($this->satuanSuhuTujuan == 'Fahrenheit') {
          $hasil = ($this->besaranSuhu * 9/5) + 32;
        } else if ($this->satuanSuhuTujuan == 'Rheamur') {
          $hasil = $this->besaranSuhu * 4/5;
        } else {
          $hasil = $this->besaranSuhu;
        }
        break;
      case 'Fahrenheit':
        if ($this->satuanSuhuTujuan == 'Celcius') {
          $hasil = ($this->besaranSuhu - 32) * 5/9;
        } else if ($this->satuanSuhuTujuan == 'Rheamur') {
          $hasil = ($this->besaranSuhu - 32) * 4/9;
        } else {
          $hasil = $this->besaranSuhu;
        }
        break;
      case 'Rheamur':
        if ($this->satuanSuhuTujuan == 'Celcius') {
          $hasil = $this->besaranSuhu * 5/4;
        } else if ($this->satuanSuhuTujuan == 'Fahrenheit') {
          $hasil = ($this->besaranSuhu * 9/4) + 32;
        } else {
          $hasil = $this->besaranSuhu;
        }
        break;
    }
    return $hasil;
  }

  public function cetakKonversiSuhu() {
    echo "<tr>";
    echo "<td>" . $this->satuanSuhuAwal . "</td>";
    echo "<td>" . $this->besaranSuhu . "</td>";
    echo "<td>" . $this->satuanSuhuTujuan . "</td>";
    echo "<td>" . $this->konversiSuhu() . "</td>";
    echo "</tr>";
  }
}
?>
