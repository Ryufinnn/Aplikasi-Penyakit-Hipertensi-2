<?php
session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		// header("location:login.php");
		?>
<li><a href="../index.php" title="Home">Home</a></li>
<li><a href="logout.php" title="keluar">logout</a></li>
		<?php
	}else{
	?>
	<li><a href="?u=<?php echo"$_SESSION[useradmin]"; ?>" title="Home">Home<span class="rov"> Halaman Admin</span></a></li>
    <li><a class="MenuBarItemSubmenu" href="index.php?pg=20" title="Kelola">Data Gejala</a>
     </li>
<li><a class="MenuBarItemSubmenu" href="index.php?pg=21" title="Lihat">Data Penyakit</a>
	</li>
<li><a class="MenuBarItemSubmenu" href="index.php?pg=40" title="Laporan">Data User</a>
	</li>
<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
	<?php
	}
?>