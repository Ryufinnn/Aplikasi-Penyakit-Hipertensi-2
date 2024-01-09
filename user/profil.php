<?
include "../konek.php";

$username="".$_SESSION['username']."";

$sql=mysql_query("select * from user where username='$username'");
while($data=mysql_fetch_array($sql))
{
	$iduser=$data['iduser'];
	$pass=$data['pass'];
	$jk=$data['jk'];
	$umur=$data['umur'];
	$alamat=$data['alamat'];
}
?>
<style type="text/css">
</style>


<form name="form1" method="post" action="?user=update">
  <table width="100%" border="1">
    <tr>
      <td align="center" bgcolor="#0099CC"><strong>PROFIL</strong></td>
    </tr>
    <tr>
      <td><table width="70%" border="0" align="center" cellspacing="1">
        <tr>
          <td height="23" colspan="2" align="center" valign="top" bgcolor="#CCCCCC">&nbsp;</td>
        </tr>
        <tr>
          <td width="161" height="30" bgcolor="#CCCCCC">USER NAME</td>
          <td width="279" bgcolor="#CCCCCC"><label for="username"></label>
            <input name="username" type="text" id="username" value="<? echo "$username"; ?>" size="45" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="30" bgcolor="#CCCCCC">PASSWORD</td>
          <td bgcolor="#CCCCCC"><input name="pass" type="text" id="pass" value="<? echo "$pass"; ?>" size="45" /></td>
        </tr>
        <tr>
          <td height="30" bgcolor="#CCCCCC">JENIS KELAMIN</td>
          <td bgcolor="#CCCCCC"><? if($jk=='laki-laki') { ?>
            <input name="jk" type="radio" id="radio" value="laki-laki" checked="checked" />
            <label for="jk">Laki-laki
              <input type="radio" name="jk" id="radio2" value="perempuan" />
              Perempuan</label>
            <? } else { ?>
            <input name="jk" type="radio" id="radio" value="laki-laki" />
            <label for="jk">Laki-laki
              <input name="jk" type="radio" id="radio2" value="perempuan" checked="checked" />
              Perempuan</label>
            <? } ?></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC">UMUR</td>
          <td bgcolor="#CCCCCC"><input name="umur" type="text" id="textfield" value="<? echo "$umur"; ?>" size="45" /></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC">ALAMAT</td>
          <td height="0" bgcolor="#CCCCCC"><input name="alamat" type="text" id="alamat" value="<? echo "$alamat"; ?>" size="45" /></td>
        </tr>
        <tr>
          <td height="31" bgcolor="#CCCCCC"><input name="iduser" type="hidden" id="iduser" value="<? echo "$iduser"; ?>" /></td>
          <td bgcolor="#CCCCCC"><input type="submit" name="button" id="button" value="UPDATE" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>