<h1>Data Gambar</h1><hr>
<a href="<?php echo base_url("index.php/gambar/tambah"); ?>">Tambah Gambar</a><br><br>

<table border="1" cellpadding="8">
<tr>
	<th>Nama</th>
	<th>noHp</th>
	<th>alamat</th>
	<th>Nominal</th>
	<th>nama file</th>
	<th>gamabar</th>
</tr>

<?php
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
		echo "<tr>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->no_hp."</td>";
		echo "<td>".$data->alamat."/td>";
		echo "<td>".$data->nominal_transfer."</td>";
		echo "<td>".$data->nama_file."</td>";
		echo "<td><img src='".base_url("struk/".$data->nama_file)."' width='100' height='100'></td>";
		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
