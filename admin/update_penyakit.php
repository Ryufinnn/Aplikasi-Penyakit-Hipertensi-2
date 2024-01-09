<?php
include "koneksi.php";
$nama_gejala=$_REQUEST['nama_gejala'];
$definisi=$_REQUEST['definisi'];
$solusi=$_REQUEST['solusi'];
$id=$_REQUEST['id'];

$strsql="UPDATE master_penyakit SET master_penyakit='$nama_gejala', definisi='$definisi', solusi='$solusi' WHERE id='$id'";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA PENYAKIT'); document.location.href='index.php?pg=21&aksi=edit&id=$id';</script>";
}
else
{
mysql_query($strsql);
header("location:index.php?pg=21");
}
?>