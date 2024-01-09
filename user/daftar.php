
		
<html>
<head>
<title>DAFTAR MEMBER</title>
<link rel="shortcut icon" href="./img/guestbook.png" type="image/x-icon">
<script language="javascript">
<!--
function tutup()
{
	top.window.close()
}
//-->
</script>
</head>
<body>

<form name="daftar" method="post" action="puser.php">
  <table width="100%" border="0" cellpadding="0">
    <tr>
      <td height="50" colspan="2" align="center" bgcolor="#FFFFFF"><strong>REGISTRASI</strong></td>
    </tr>
    <tr>
      <td width="161" height="30" bgcolor="#FFFFFF">USER NAME</td>
      <td width="279" bgcolor="#FFFFFF"><label for="username"></label>
      <input name="username" type="text" id="username" size="45"></td>
    </tr>
    <tr>
      <td height="30" bgcolor="#FFFFFF">PASSWORD</td>
      <td bgcolor="#FFFFFF"><label for="nama"></label>
      <input name="pass" type="text" id="textfield2" size="45"></td>
    </tr>
    <tr>
      <td height="30" bgcolor="#FFFFFF">JENIS KELAMIN</td>
      <td bgcolor="#FFFFFF"><label for="nama">
        <input type="radio" name="jk" id="radio" value="perempuan" />
        Perempuan
        <input type="radio" name="jk" id="radio2" value="laki-laki" />
      Laki-Laki</label></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">UMUR</td>
      <td bgcolor="#FFFFFF"><input name="umur" type="text" id="textfield" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">ALAMAT</td>
      <td height="0" bgcolor="#FFFFFF"><input name="alamat" type="text" id="alamat" size="45" /></td>
    </tr>
    <tr>
      <td height="50" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="SAVE" />
      <input type="submit" name="exit" id="exit" value="keluar" onClick="tutup()" /></td>
    </tr>
  </table>
</form>
