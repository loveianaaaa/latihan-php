<!DOCTYPE html>
<html>
<body>
    <!-- identitas -->
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        background-color: #f0c6ff;

    }
    th {
        background-color: #00ff00;
        color: white;
    }
  </style>
  </head>
  <body>
  <table>
  <thead>
        <tr>
            <th>nama</th>
            <th>kelas</th>
            <th>tanggal praktikum</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>loveiana</td>
            <td>XI-RPL</td>
            <td>30-januari-2024</td>
            <td><img src="../poto opey.jpg" alt="Flowers in Chania" width="140" height="90"></img></td>
        </tr>
    </tbody>         
  </table>         
  </table>
<h2>variable</h2>
<!-- variable diawali dengan $ tanda, diikuti dengan nama variable-->
<?php
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;
?>
<!--variable keluaran-->
<!-- Pernyataan PHP echo sering digunakan untuk menampilkan data ke layar. -->
<?php
// menunjukkan cara menampilkan teks dan variable
$txt = "smk 2 subang";
echo "berkarakter $txt!";
// menampilkan jumlah dua variable
$x = 5;
$y = 4;
echo $x + $y;
?>
<h3>jenis variable</h3>
<!-- PHP tidak memiliki perintah untuk mendeklarasikan variabel, dan tipe datanya bergantung pada nilai variabe -->
<?php
$x = 5;      // $x is an integer
$y = "opey"; // $y is a string

echo $x;
echo $y;
?>
</body>
</html>
