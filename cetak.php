
<title>Cetak Hasil Konsultasi</title>
<body onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <h1>SISTEM PAKAR DIAGNOSA PENYAKIT HIPERTENSI </h1>
  </div>
</div>
<form id="form1" name="form1" method="post" action="">
  <table width="1023" border="0">
    <tr>
      <td width="618">HASIL DIAGNOSIS SISTEM PAKAR MENGATAKAN, BAHWA ANDA TERSERANG PENYAKIT:<b>Hipertensi Sistolik Terisolasi </b></td>
      <td width="389" rowspan="2"><div align="center"><img src="images/a.jpg" width="332" height='184' /></div></td>
    </tr>
    <tr>
      <td><p align="justify"><br>
          <em>Definisi Penyakit: Hipertensi sistolik terisolasi adalah suatu kondisi spesifik yang ditandai dengan tekanan darah sistolik lebih dari 140 mmHg dan tekanan dara diastolik kurang dari 90 mmHg atau normal. Biasanya kondisi ini sering terjadi pada usia lanjut. Seiring dengan pertambahan usia, hampir setiap orang mengalami kenaikan tekanan darah, dimana tekanan sistolik terus meningkat hingga usia 80 tahun dan tekanan diastolik terus meningkat hingga 55-60 tahun. </em></p>
        <p align="justify">Pengobatan: <br>
1.	Jangan merokok dan hindari asap rokok.<br>
2.	Hindari stres dengan gaya hidup yang lebih santai<br>
3.	Hindari obesitas atau kegemukan<br>
4.	Hindari makanan yang mengandung garam.<br>
5.	Berolahraga secara teratur.<br>
6.	Hindari minuman beralkohol</p>
        <p>Nilai Densitas: 65% </p></td>
    </tr>
  </table>
</form>
<div align="left">
    <p><br/> 
    </p>
    
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";

?>

	
  </div>