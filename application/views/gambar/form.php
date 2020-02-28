<h1>Tambah Gambar</h1><hr>

<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
	<table cellpadding="8">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td><input type="text" name="input_nohp" value="<?php echo set_value('input_nohp'); ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></td>
		</tr>
		<tr>
			<td>Nominal Transfer</td>
			<td><input type="text" name="input_nominal" value="<?php echo set_value('input_nominal'); ?>"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="input_gambar"></td>
		</tr>
	</table>
		
	<hr>
	<input type="submit" name="submit" value="Simpan">
	<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
