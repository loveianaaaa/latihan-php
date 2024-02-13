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
  <!-- Array itu struktur data yang bisa menyimpan satu/lebih nilai dalam satu variabel tunggal. nilai dalam array juga memiliki indeks unik, yang memungkinkan kita mengakses nilai tersebut dengan mudah. -->
  <div class="container">
        <h2>Array</h2>
        <?php
            $Laptops = [
                ["ASUS", 22, 18],
                ["LENOVO", 15, 13],
                ["MACBOOK", 5, 2],
                ["DELL", 17, 15]
            ];
        ?>
        <ul>
            <?php foreach ($Laptops as $Laptop) : ?>
                <li>
                    Merk: <?= $Laptop[0] ?> | Stock: <?= $Laptop[1] ?> | Sold: <?= $Laptop[2] ?>
                </li>
                
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
