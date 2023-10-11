<?php
include 'KonversiSuhu.php';

$dataKonversiSuhu = array(
  new KonversiSuhu('Celcius', 25, 'Fahrenheit'),
  new KonversiSuhu('Fahrenheit', 77, 'Celcius'),
  new KonversiSuhu('Celcius', 25, 'Rheamur'),
  new KonversiSuhu('Rheamur', 45, 'Celcius')
);

echo "<table border='1'>
      <tr>
        <th>Satuan Suhu Awal</th>
        <th>Besaran Suhu</th>
        <th>Satuan Suhu Tujuan</th>
        <th>Hasil Konversi Suhu</th>
      </tr>";
foreach ($dataKonversiSuhu as $konversiSuhu) {
  $konversiSuhu->cetakKonversiSuhu();
}
echo "</table>";
?>
