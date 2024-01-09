<?
include "../konek.php";

$kepada='admin';
$username=$_POST['username'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];
$tgl=date('d-M-Y');
$jam=date('H:i');

$sql=mysql_query("insert into pesan (kepada,username,subjek,pesan,tgl,jam) values ('$kepada','$username','$subjek','$pesan','$tgl','$jam')") or die ('Error');

echo "<script language=javascript>
		alert('Pesan telah dikirim');
		window.location='?testimoni=pesan';
		</script>";
?>