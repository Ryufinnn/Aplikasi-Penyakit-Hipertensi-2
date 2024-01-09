<?
session_start();

include "../admin/konek.php";

if(!isset($_SESSION['username']))
{
	echo "<meta http-equiv=Refresh content=1;url=../index.php>";
	exit;
}
?>