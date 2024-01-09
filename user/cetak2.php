<body onLoad=javascript:window:print()>

<?
include "../konek.php";
  $tgl=date('d-m-Y');
  $jam=date('H:i');
$username=$_GET['username'];

$query="SELECT * FROM user where username='$username'";
$result=mysql_query($query);
while($data=mysql_fetch_array($result))
{
	$vjk=$data['jk'];
	$vumur=$data['umur'];
	$valamat=$data['alamat'];
}
?>

<br />
<table width="400" border="1" align="center">
  <tr>
    <td height="30" colspan="2" align="center" bgcolor="#0099CC"><strong>Hasil Diagnosa</strong></td>
  </tr>
  <tr>
    <td width="133" height="30">Nama</td>
    <td width="257"><? echo "$username"; ?></td>
  </tr>
  <tr>
    <td height="30">Jenis Kelamin</td>
    <td><? echo "$vjk"; ?></td>
  </tr>
  <tr>
    <td height="30">Umur</td>
    <td><? echo "$vumur"; ?></td>
  </tr>
  <tr>
    <td height="30">Alamat</td>
    <td><? echo "$valamat"; ?></td>
  </tr>
</table>

<?
$gejala = mysql_query("Select * From konsul");
$rgejala = mysql_fetch_array($gejala);
$gjl=$_POST['kdgjl'];
$cf=$_POST['cf'];

$strsql="select gejala.kdgjl,namagjl, konsul.cf from gejala,konsul where gejala.kdgjl=konsul.kdgjl order by kdgjl asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
$no=1;
?>
<p></p>
<table width="50%" border="1" align="center">
	<tr>
    <td colspan="3" align="center" bgcolor="#0099CC"><strong> Gejala yang diderita :</strong></td>
    </tr>
    </table>
<?
//echo "<h3 align='center'>Gejala yang diderita :</h3>";
while($row=mysql_fetch_array($hasil))
{ 
echo "<table width='50%' border='1' align='center'>";
echo "<tr>";
echo    "<td width='5%'>$no</td>";
echo    "<td width='50%'>$row[namagjl]</td>";
echo    "<td width='25%'>Nilai Kepastian Dari Penyakit : $row[cf]</td>";
echo  "</tr>";
echo "</table>";
$no++;
}

		//rule 1
		$rule11=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G01' "));
		$rule12=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G06'"));
		$rule13=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G04'"));

		
		//rule 2
		$rule22=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G09'"));
		$rule23=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G11'"));
		$rule24=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G19'"));
																
		//rule 3
		$rule31=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G02'"));
		$rule33=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G03'"));
		$rule34=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G05'"));
		
		//rule 4
		$rule41=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G07'"));
		$rule42=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G08'"));
		$rule43=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G05'"));
		$rule44=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G13'"));
		
		//rule 5
		$rule51=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G08'"));
		$rule52=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G13'"));
		$rule53=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G07'"));
		
		//rule 6
		$rule61=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G12'"));
		$rule62=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G14'"));
		$rule63=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G08'"));
		
		//rule 7
		$rule71=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G16'"));
		$rule72=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G18'"));
		$rule73=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G20'"));
		$rule74=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G15'"));
		
		//rule 8
		$rule81=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G18'"));
		$rule82=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G17'"));
		$rule83=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G16'"));
		
		//rule 9
		$rule91=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G10'"));
		$rule92=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G06'"));
		$rule93=mysql_num_rows(mysql_query("SELECT * FROM konsul where  kdgjl='G20'"));


		if(($rule11 > 0)&&($rule12 > 0)&&($rule13 > 0)){
			$cfu11 = mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G01'"));
			$cfu12 = mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G06'"));
			$cfu13 = mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G04'"));
			$nilai1 = $cfu11['cf'];
			$nilai2 = $cfu12['cf'];
			$nilai3 = $cfu13['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil1 = $min*0.6;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Osteoathritis 0.6 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil1";
		}if(($rule22 > 0)&&($rule23 > 0)&&($rule24 > 0)){
			$cfu21=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G09'"));
			$cfu22=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G11'"));
			$cfu23=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G19'"));
			$nilai1 = $cfu21['cf'];
			$nilai2 = $cfu22['cf'];
			$nilai3 = $cfu23['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil2 = $min*0.45;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Osteoathritis 0.45 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil2";
		}if(($rule31 > 0)&&($rule33 > 0)&&($rule34 > 0)){
			$cfu31=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G02'"));
			$cfu32=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G03'"));
			$cfu33=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G05'"));
			$nilai1 = $cfu31['cf'];
			$nilai2 = $cfu32['cf'];
			$nilai3 = $cfu33['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil3 = $min*0.8;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Rheumatoid 0.8 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil3";
		}if(($rule41 > 0)&&($rule42 > 0)&&($rule43 > 0)&&($rule44 > 0)){
			$cfu41=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G07'"));
			$cfu42=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G05'"));
			$cfu43=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G08'"));
			$cfu44=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G13'"));
			$nilai1 = $cfu41['cf'];
			$nilai2 = $cfu42['cf'];
			$nilai3 = $cfu43['cf'];
			$nilai4 = $cfu44['cf'];
			$min = min($nilai1,$nilai2,$nilai3,$nilai4);
			$hasil4 = $min*0.65;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Rheumatoid 0.65 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil4";
		}if(($rule51 > 0)&&($rule52 > 0)&&($rule53 > 0)){
			$cfu51=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G08'"));
			$cfu52=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G13'"));
			$cfu53=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G07'"));
			$nilai1 = $cfu51['cf'];
			$nilai2 = $cfu52['cf'];
			$nilai3 = $cfu53['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil5 = $min*0.70;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Rheumatoid 0.70 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil5";
		}if(($rule61 > 0)&&($rule62 > 0)&&($rule63 > 0)){
			$cfu61=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G07'"));
			$cfu62=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G08'"));
			$cfu63=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G11'"));
			$nilai1 = $cfu61['cf'];
			$nilai2 = $cfu62['cf'];
			$nilai3 = $cfu63['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil6 = $min*0.80;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Rheumatoid 0.80</h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil6";
		}if(($rule71 > 0)&&($rule72 > 0)&&($rule73 > 0)&&($rule74 >0)){
			$cfu71=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G16'"));
			$cfu72=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G18'"));
			$cfu73=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G20'"));
			$cfu74=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G15'"));
			$nilai1 = $cfu71['cf'];
			$nilai2 = $cfu72['cf'];
			$nilai3 = $cfu73['cf'];
			$nilai4 = $cfu74['cf'];
			$min = min($nilai1,$nilai2,$nilai3,$nilai4);
			$hasil7 = $min*0.80;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Pirai 0.80</h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil7";
		}if(($rule81 > 0)&&($rule82 > 0)&&($rule83 > 0)){
			$cfu81=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G18'"));
			$cfu82=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G17'"));
			$cfu83=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G16'"));
			$nilai1 = $cfu81['cf'];
			$nilai2 = $cfu82['cf'];
			$nilai3 = $cfu83['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil8 = $min*0.60;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Pirai 0.60 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil8";
		}if(($rule91 > 0)&&($rule92 > 0)&&($rule93 > 0)){
			$cfu91=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G10'"));
			$cfu92=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G06'"));
			$cfu93=mysql_fetch_array(mysql_query("SELECT * FROM konsul where kdgjl='G20'"));
			$nilai1 = $cfu91['cf'];
			$nilai2 = $cfu92['cf'];
			$nilai3 = $cfu93['cf'];
			$min = min($nilai1,$nilai2,$nilai3);
			$hasil9 = $min*0.80;
			//echo "<br><h3 align='center'>Kemungkinan Penyakit yang di derita  : Arthritis Pirai 0.80 </h3>";
			//echo "<h4 align='center'>Dengan Nilai Kepastian : $hasil9";
		}
	
		$oa = ($hasil1+$hasil2) *(1-$hasil1);
		$ar = ($hasil3+$hasil4+$hasil5+$hasil6) *(1-$hasil3);
		$ap = ($hasil7+$hasil8+$hasil9) *(1-$hasil7);

		$akhir = max($oa, $ar, $ap);
		
		if($akhir==0){
			echo "
				<h1 align='center'>Kesimpulan </h1>
				<h4 align='center'>Anda Tidak Terdiagnosa Penyakit Radang Sendi</h4>
				";
		}else{
		if($akhir == $oa){
			$num_oa = number_format($oa, 2, '.', '');
			$peroa = $num_oa*100;
			echo "
			<h1 align='center'>Kesimpulan </h1>
			<h4 align='center'>Anda penyakit Osteoathritis dengan kemungkinan $peroa%</h4>
			";
		} else if($akhir == $ar){
			$num_ar = number_format($ar, 2, '.', '');
			$perar = $num_ar*100;
		echo "
			<h1 align='center'>Kesimpulan </h1>
			<h4 align='center'>Anda memderita penyakit Athritis Rheumatoid dengan kemungkinan $perar%</h4>
			";
		} else if($akhir == $ap){
			$num_ap = number_format($ap, 2, '.', '');
			$perap = $num_ap*100;
		echo "
			<h1 align='center'>Kesimpulan </h1>
			<h4 align='center'>Anda memderita penyakit Athritis Pirai dengan kemungkinan $perap%</h4>
			";
		}
		}
	?>
<h3><p align="right"> Tanggal Mengakses : <? echo "$tgl";  ?> Jam :<? echo "$jam"; ?></h3></p>