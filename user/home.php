<? include "cek.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM PAKAR ARTHRITIS</title>
<style type="text/css">
</style>
</head>

<body>
<style type="text/css">
body p {
	text-align: left;
}
</style>

<table width="75%" border="1" align="center">
  <tr>
    <td colspan="2"><img src="../img/top1.png" width="100%" height="170" /></td>
  </tr>
  <tr>
    <td colspan="2"><? include "link.php";?></td>
  </tr>
  <tr>
    <td width="20%" valign="top" bgcolor="#CCCCCC"><table width="100%" border="1" align="center">
      <tr>
        <td align="center"><p><a href="?hal=1">Home</a></p></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><p><a href="?link=konsulD">Konsultasi</a></p></td>
      </tr>
      <tr>
        <td align="center"><p><a href="?hal=8">Pencegahan</a></p></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><p><a href="?hal=10">Bantuan</a></p></td>
      </tr>
  </table>
    <p>&nbsp;</p></td>
    <td valign="top" bgcolor="#CCCCCC">
	<? 		   if($_GET['hal']==1) { include "radangsendi.php"; }			  
			   if($_GET['hal']==6) { include "struktur.php"; }
			   if($_GET['hal']==7) { include "profil.php"; }
			   if($_GET['hal']==8) { include "pencegahan.php"; }
			   if($_GET['hal']==10) { include "bantuan.php"; }
			   
			   if($_GET['link']=='konsulD') { include "konsulD.php"; }
			   if($_GET['konsulD']=='pkonsul') { include "pkonsul.php"; }
			   if($_GET['konsulD']=='rule') { include "rule.php"; }
			   			   
			   if($_GET['user']=='daftar') { include "user.php"; }
			   if($_GET['daftar']=='simpan') { include "puser.php"; }
			   
			   if($_GET['user']=='profil') { include "profil.php"; }
			   if($_GET['user']=='update') { include "pupdateuser.php"; }
			   
			   
			   if($_GET['testimoni']=='pesan') { include "pesan.php"; }
			   if($_GET['testimoni']=='ppesan') { include "ppesan.php"; }
			?></td>
  </tr>
  <tr>
    <td colspan="2"><img src="../img/footer2.png" width="100%" height="53" /></td>
  </tr>
</table>
<script type="text/javascript">
