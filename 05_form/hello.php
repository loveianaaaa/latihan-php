<!DOCTYPE HTML>
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
            <td style="background: #fafafa;">loveiana</td>
            <td>XI-RPL</td>
            <td>30-januari-2024</td>
            <td><img src="../poto opey.jpg" alt="Flowers in Chania" width="140" height="90"></img></td>
        </tr>
    </tbody>
  </table>
  <!-- orm merupakan sintaks HTML yang berisi kumpulan kolom isian data -->
   <h2>form</h2>
   <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan ">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan ">
        </div>
        <div>
            <button>kirim</button>
        </div>
    </form>
    <!-- Kode program di dibawah berfungsi untuk membaca data yang berada pada query string. Tanda @ sebelum variabel $_GET berfungsi untuk mengubah nilai menjadi null jika key nama atau pun alamat tidak tersedia pada array $_GET -->
    <?php
    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}
     ?>
</body>
</html>
