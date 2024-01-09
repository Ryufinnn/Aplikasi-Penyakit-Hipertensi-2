<?
include "koneksi.php";
    
			$sql = mysql_query("select * from member where username = '$_SESSION[user1]'");
	$data = mysql_fetch_array($sql);
			if($data['jk']=="L"){
						$jk="Laki - laki";
					}else{
						$jk="Perempuan";
					}
?>
<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 18px;
}
-->
</style>

<table width="400" border="1" align="center">
  <tr>
    <td height="30" colspan="2" align="center" bgcolor="#0099CC"><strong>Hasil Diagnosa</strong></td>
  </tr>
  <tr>
    <td width="133" height="30">Nama</td>
    <td width="257"><?php echo"$data[namalengkap]"; ?></td>
  </tr>
  <tr>
    <td height="30">Jenis Kelamin</td>
    <td><?php echo $jk?></td>
  </tr>
  <tr>
    <td height="30">Email</td>
    <td><?php echo"$data[email]"; ?></td>
  </tr>
  <tr>
    <td height="30">Alamat</td>
    <td><?php echo"$data[alamat]"; ?></td>
  </tr>
</table>

<?php
if (isset($id_gejala))
{
	$pjg_array=count($id_gejala);
	for($k=0;$k<$pjg_array;$k++)
	{
		$ok=$ok+$id_gejala[$k];
	}
	$strsql_temuan="select * from master_penyakit where nilai_temuan='$ok'";
	$hasil_temuan=mysql_query($strsql_temuan);

	echo "</br>";
	if(mysql_num_rows($hasil_temuan)<1){
	echo"Anda Tidak Terdiagnosa Penyakit Hipertensi , Kembali <a href='?pg=18&u=$_SESSION[user1]'>Klik disini </a> ";
	}else{
	
	while($row_temuan=mysql_fetch_array($hasil_temuan))
	{
	echo "HASIL DIAGNOSIS SISTEM PAKAR MENGATAKAN, BAHWA ANDA TERSERANG PENYAKIT:";
	echo "<table width='600' border='0'>
				<tr><b>$row_temuan[master_penyakit]</b><td>   </br><i> Definisi Penyakit: $row_temuan[definisi]</i> </br>  </br> Pengobatan: $row_temuan[solusi]</br></br> Nilai Densitas: $row_temuan[nilai]% <a href='cetak.php'> </br> </br> <b>Cetak Hasil Konsultasi</a></b> 
				
				
				</td></tr>
				</table>";
	}
	
	}
	
	
}
?>

