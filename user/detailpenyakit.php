<?
include "../konek.php";

$kdpkt=$_GET['kdpkt'];

$query="SELECT * FROM penyakit where kdpkt='$kdpkt'";
$result=mysql_query($query);
while($data=mysql_fetch_array($result))
{
	$vidpkt=$data['idpkt'];
	$vkdpkt=$data['kdpkt'];
	$vnamapkt=$data['namapkt'];
	$vket=$data['ket'];
	
	$query2="SELECT * FROM pencegahan where kdpkt='$vkdpkt'";
	$result2=mysql_query($query2);
	while($data2=mysql_fetch_array($result2))
	{
		$vnamapenc=$data2['namapenc'];
	}
}
?>
<style type="text/css">
</style>

<table width="100%" border="1">
  <tr></tr>
  <tr>
    <td align="center" bgcolor="#0099FF"><strong>DETAIL PENYAKIT DI DERITA</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="1">
      <tr>
        <td width="40%" bgcolor="#0099FF"><strong>JENIS PENYAKIT</strong></td>
        <td><? echo "$vnamapkt"; ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="40%">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="40%" bgcolor="#0099FF"><strong>KETERANGAN PENYAKIT</strong></td>
        <td><? echo "$vket"; ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="40%">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
        <?
  $tgl=date('d-m-Y');
  $jam=date('H:i');
  
  $query="SELECT * FROM simpan where tgl='$tgl' and jam='$jam'";
  $result=mysql_query($query);
  while($data=mysql_fetch_array($result))
  {
	  $vkdgjl=$data['kdgjl'];
	  
	  $query2="SELECT cf FROM simpan where kdgjl='$vkdgjl'";
	  $result2=mysql_query($query2);
	  while($data2=mysql_fetch_array($result2))
	  {
		  $cf=$data2['cf'];
	  }
  }
  ?>
  <?
  	if($cf >= 72){
		$ket = "Hampir Dapat di Pastikan";
	}
	else if($cf >= 60){
		$ket = "Kemungkinan Besar";
	}
	else {
		$ket = "Tidak Pasti";
	}
  
  ?>
      <tr>
        <td width="40%" rowspan="3" bgcolor="#0099FF"><strong>NILAI KEPASTIAN PENYAKIT BERDASARKAN GEJALA</strong></td>
        <td>Nilai Kepastian Penyakit Berdasarkan Gejala ialah sebesar : <? echo "$cf"; ?> % </td>
      </tr>
      <tr>
        <td>Dengan Nilai Kepastian Tersebut Anda Tergolong Kedalam Kategori "<? echo "$ket"; ?>" Terdiagnosa Penyakit Radang Sendi</td>
      </tr>
      <tr>
        <td>Untuk Lebih Memastikan Hubungi Dokter Spesialis Tulang Agar Dapat Diperiksa Melalui Tes Laboratorium.</td>
      </tr>
      <tr>
        <td width="40%">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
       <td colspan="2" align="center" bgcolor="#0099FF"><strong>PENCEGAHAN</strong></td>
      </tr>
          <?
  		$query2="SELECT * FROM pencegahan where kdpkt='$vkdpkt'";
  		$result2=mysql_query($query2);
  		while($data2=mysql_fetch_array($result2))
  		{
	  		$vnamapenc=$data2['namapenc'];
  	?>
      <tr>
        <td colspan="2" align="center"><? echo "$vnamapenc"; ?></td>
        </tr>
 	<? }?>
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>

    </table></td>
  </tr>
</table>
<p><a href="cetak.php?idpkt=<? echo "$vidpkt"; ?>&amp;username=<? echo "".$_SESSION['username'].""; ?>" target="_new">Cetak</a></p>
