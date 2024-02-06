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
    }
    th {
        background-color: #af4c6d;
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
        <td><img src="me.jpg" alt="Flowers in Chania" width="140" height="90"></img></td>
    </tr>
    <tr>          
  </table>
  <!-- Array adalah struktur data yang dapat menyimpan satu atau lebih nilai dalam satu variabel tunggal. Setiap nilai dalam array memiliki indeks unik, yang memungkinkan kita mengakses nilai tersebut dengan mudah. -->
  <div class="container">
        <h2>Array</h2>
        <?php
            $motocycles2T = [
                ["iphone", 22, 18],
                ["samsung", 15, 13],
                ["vivo", 5, 2],
                ["oppo", 17, 15]
            ];
        ?>
        <ul>
            <?php foreach ($motocycles2T as $motocycle) : ?>
                <li>
                    Merk: <?= $motocycle[0] ?> | Stock: <?= $motocycle[1] ?> | Sold: <?= $motocycle[2] ?>
                </li>
                
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
