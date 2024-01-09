<?php
session_start();
	if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
		// header("location:login.php");
		?>
<li><a href="index.php" title="Home">Home</a></li>


<li><a href="?pg=10" title="Profile">Profil<span class="rov"> Informasi Tentang Penyakit </span></a></li>
<li><a href="?pg=1" title="Hubungi Kami">Register<span class="rov"> Bergabung Bersama Kami </span></a></li>
<li><a href="?pg=11" title="Hubungi Kami">Petunjuk</a></li>
		<?php
	}else{
	?>
	<li><a href="?u=<?php echo"$_SESSION[user1]"; ?>" title="Home">Home</a></li>
    <li><a href="?pg=10&u=<?php echo"$_SESSION[user1]"; ?>" title="Profile">Profile<span class="rov"> visi & misi </span></a></li>
<li><a href="?pg=18&u=<?php echo"$_SESSION[user1]"; ?>" title="Cara Beli">Konsultasi<span class="rov"> Jawablah pertanyaan sesuai dengan gejala yang anda rasakan </span></a></li>
<li><a href="?pg=16&u=<?php echo"$_SESSION[user1]"; ?>" title="AKUN">Akun<span class="rov"> Kelola Akun Anda </span></a></li>

<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
	<?php
	}
?>