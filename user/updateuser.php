<?
include "konek.php";

$viduser=$_GET['iduser'];

$query = "SELECT * FROM user where iduser='$viduser'";
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result))
{
	$viduser=$data['iduser'];
	$vusername=$data['username'];
	$vpass=$data['pass'];
	$vjk=$data['jk'];
	$vumur=$data['umur'];
	$valamat=$data['alamat'];
	}
?>
<style type="text/css">
</style>


  <table width="400" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#0099CC">DATA PASIEN</td>
    </tr>
    <tr>
      <td width="184" bgcolor="#CCCCCC">User Name</td>
      <td width="206" bgcolor="#CCCCCC"><label for="username"></label>
        :
        <input name="username" type="text" id="username" value="<? echo "$vusername";?>"></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Password</td>
      <td bgcolor="#CCCCCC"><label for="nama">:</label>
        <input name="pass" type="text" id="textfield2" value="<? echo "$vpass";?>"></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Jenis Kelamin</td>
      <td bgcolor="#CCCCCC"><label for="select"></label>
        <label for="select2">:
          <input name="jk" type="text" id="jk" value="<? echo "$vjk";?>">
        </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Umur</td>
      <td bgcolor="#CCCCCC"><label for="nama">:</label>
        <input name="umur" type="text" id="textfield2" value="<? echo "$vumur";?>"></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Alamat</td>
      <td bgcolor="#CCCCCC">:
      <input name="alamat" type="text" id="alamat" value="<? echo "$valamat";?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td align="right" bgcolor="#CCCCCC"><a href="#">UPDATE</a></td>
    </tr>
  </table>
