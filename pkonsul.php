<?
include "koneksi.php";


for($i=1; $i<=20; $i++){
	$vkdgjl = $_POST['kdgjl'.$i];
	$vcf = $_POST['cf'.$i];
	
	if(!empty($vkdgjl)&&!empty($vcf)){	
	$query="INSERT INTO konsul (kdgjl,cf) VALUES ('$vkdgjl','$vcf')";
		mysql_query($query)
		or die(mysql_error());
		echo "<meta http-equiv=Refresh content=1;url=?pg=19>";
	}
}
?>