<?php
include "koneksi.php";
$nama_gejala=$_REQUEST['nama_gejala'];

$strsql="INSERT INTO master_gejala (master_gejala) VALUES ('$nama_gejala')";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA GEJALA'); document.location.href='index.php?pg=20&aksi=add';</script>";
}
else
{
mysql_query($strsql);
header("location:index.php?pg=20");
}
?>