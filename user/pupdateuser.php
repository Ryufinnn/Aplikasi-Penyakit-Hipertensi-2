<?
include "../konek.php";

$iduser=$_POST['iduser'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$jk=$_POST['jk'];
$umur=$_POST['umur'];
$alamat=$_POST['alamat'];

mysql_query("update user set pass='$pass',jk='$jk',umur='$umur',alamat='$alamat' where iduser='$iduser'") or die ('Error');

echo "<script language=javascript>
		alert('Data telah diupdate...');
		window.location='?user=profil';
		</script>"
?>