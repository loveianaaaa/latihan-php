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
    <div class="container">
        <h2>Functions</h2>
        <hr>
        <!-- identitas -->
<body>
        
        <?php
        /* Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.*/
            function sayHallo($name, $umur) {
                return "Hallo saya $name, umur saya $umur tahun";
            }
        ?>
        <p><?= sayHallo("loveiana", 19) ?></p>
        <p><?= sayHallo("juldin", 16) ?></p>
        <p><?= sayHallo("ridwan", 20) ?></p>
    </div>
    
</body>
</html>
</body>
</html>
