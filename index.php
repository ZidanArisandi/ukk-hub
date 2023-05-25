<html>
<head>
 <title>Aplikasi CRUD Inventaris Barang | SMK Telkom Lampung</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi Inventaris Barang <br /> SMK Telkom Lampung</h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Id</th>
   <th>Nama</th>
   <th>jenis</th>
   <th>jumlah</th>
   <th>kondisi</th>
   <th>keterangan</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $jenis_barang = $r['jenis_barang'];
   $jumlah_barang = $r['jumlah_barang'];
   $kondisi_barang = $r['kondisi_barang'];
   $keterangan = $r['keterangan'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $jenis_barang; ?></td>
   <td><?php echo $jumlah_barang; ?></td>
   <td><?php echo $kondisi_barang; ?></td>
   <td><?php echo $keterangan; ?></td>
  <td align=right width=70px><a href="ubah.php?id=<?php echo $id_barang;?>">Ubah</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
<a href="logout.php">Logout</a>
</html>
