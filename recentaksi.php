<?php
session_start();
	include"koneksi.php";
	$sqlcek = mysql_query("SELECT * FROM recent where username='$_SESSION[user1]' and idproduk='$_GET[idproduk]'");
	$ketemu = mysql_num_rows($sqlcek);
	if($ketemu == 0){
	
	mysql_query("INSERT INTO recent(username, idproduk, tglrecent) VALUES ('$_SESSION[user1]', '$_GET[idproduk]', NOW())");
	header("location:index.php?u=$_SESSION[user1]&tambah&$ketemu");
	
	}else{
	mysql_query("UPDATE recent SET tglrecent = NOW() WHERE username='$_SESSION[user1]' and idproduk='$_GET[idproduk]'");	
	
	header("location:index.php?u=$_SESSION[user1]&update");
	}
?>