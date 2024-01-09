<?php
include "konek.php";

$hapus = "Delete from konsul";
if (isset($hapus) && !empty($hapus)) 
{ 
echo "<!--" . $hapus . "-->";
$proses = mysql_query($hapus) 
or 
die("Invalid query: " . mysql_error());
}
?>

<p class="style5">
    <h3>Pilihlah pertanyaan sesuai dengan gejala yang anda alami </h3> 
</p>
<table width="100%" border="0" cellpadding="1" cellspacing="1">
  <tr>
<td valign="top">
  <table width="75%" border="0" cellpadding="1" cellspacing="1">
  <tr>
     
  <form method="post" action="?konsulD=pkonsul">
  <?php
$strsql="select * from gejala order by kdgjl asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
$no=1;

while($row=mysql_fetch_array($hasil))
{
echo "<input type='checkbox' value='".$row['kdgjl']."' name='kdgjl".$no."'/>Apakah Anda ".$row[namagjl]." ?</br>";
echo "Masukan Nilai Kepastian Pada Gejala :";
echo "<input type='text' name='cf".$no."'> Range : [0 - 1]   </br></br>";
$no++;
}

?>
  <tr>
    <td height="25" colspan="2"><input name="submit" type="submit" value=" Penyakit Anda !!! " /></td>
  </tr>
  </form>
  </table>

</td>
</tr>
</table>