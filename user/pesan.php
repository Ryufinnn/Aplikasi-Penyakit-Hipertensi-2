<?
$username="".$_SESSION['username']."";
?>
<style type="text/css">
</style>


<form name="form1" method="post" action="?testimoni=ppesan">
  <table width="100%" border="1">
    <tr>
      <td colspan="3" align="center" bgcolor="#0099CC"><strong>PESAN KONSULTASI</strong></td>
    </tr>
  </table>
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td width="130" height="25" bgcolor="#CCCCCC">USERNAME     :</td>
      <td width="500" bgcolor="#CCCCCC"><label for="username"></label>
      <input name="username" type="text" id="username" value="<? echo "$username"; ?>" size="45" readonly></td>
    </tr>
    <tr>
      <td height="24" bgcolor="#CCCCCC">SUBJEK :</td>
      <td bgcolor="#CCCCCC"><input name="subjek" type="text" id="subjek" size="45"></td>
    </tr>
    <tr>
      <td height="30" valign="top" bgcolor="#CCCCCC">PESAN :</td>
      <td bgcolor="#CCCCCC"><label for="pesan"></label>
      <textarea name="pesan" id="pesan" cols="60" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="30" bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC"><input type="submit" name="button" id="button" value="Kirim"></td>
    </tr>
  </table>
</form>

<p>
  <?
include "../konek.php";

$vtgl=date('d-M-Y');
$sql=mysql_query("select * from pesan where username='$username' order by id desc");
while($data=mysql_fetch_array($sql))
{
	$subjek=$data['subjek'];
	$pesan=$data['pesan'];
	$tgl=$data['tgl'];
	$jam=$data['jam'];
	
	$sql2=mysql_query("select * from pesan where kepada='$username' and subjek='$subjek' order by id desc");
	while($data2=mysql_fetch_array($sql2))
	{
		$username2=$data2['username'];
		$pesan2=$data2['pesan'];
		$tgl2=$data2['tgl'];
		$jam2=$data2['jam'];
?>
</p>
<table width="100%" border="1" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0099CC"><? echo "<strong>$username</strong>"; ?>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><? if($tgl==$vtgl) { echo "<i>Dikirim pada pukul $jam</i>"; } else { echo "<i>Dikirim pada $tgl</i>"; } ?>&nbsp;</td>
  </tr>
  <tr>
    <td><? echo "<strong>$subjek</strong> : $pesan"; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0099CC"><? echo "<strong>$username2</strong>"; ?>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><? if($tgl2==$vtgl) { echo "<i>Dikirim pada pukul $jam2</i>"; } else { echo "<i>Dikirim pada $tgl2</i>"; } ?>&nbsp;</td>
  </tr>
  <tr>
    <td><? echo "<strong>REPLY $subjek</i></strong> : $pesan2"; ?>&nbsp;</td>
  </tr>
</table>
    <? } } ?>
</p>
