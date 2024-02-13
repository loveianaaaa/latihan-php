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
    <tr>
        <th>nama</th>
        <th>kelas</th>
        <th>tanggal praktikum</th>
        <th>foto</th>
    </tr>
    <tr>
        <td>loveiana</td>
        <td>XI-RPL</td>
        <td>30-januari-2024</td>
        <td><img src="../poto opey.jpg" alt="Flowers in Chania" width="140" height="90"></img></td>
    </tr>
    <tr>          
  </table>
        <?php
        /* Di PHP kami memiliki pernyataan kondisional berikut:

pernyataan if - mengeksekusi beberapa kode jika satu kondisi benar
pernyataan if...else - mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi tersebut salah
pernyataan if...elseif...else - mengeksekusi kode berbeda untuk lebih dari dua kondisi
pernyataan switch - memilih salah satu dari banyak blok kode yang akan dieksekusi */
            $nilai = 56;

            if ($nilai > 90) {
                $grade = "A+";
            } elseif($nilai > 80){
                $grade = "A";
            } elseif($nilai > 70){
                $grade = "B+";
            } elseif($nilai > 60){
                $grade = "B";
            } elseif($nilai > 50){
                $grade = "C+";
            } elseif($nilai > 40){
                $grade = "C";
            } elseif($nilai > 30){
                $grade = "D";
            } elseif($nilai > 20){
                $grade = "E";
            } else {
                $grade = "F";
            }

            echo "Nilai anda: $nilai<br>";
            echo "Grade: $grade";
        ?>
    </div>
</body>
</html>
</body>
</html>