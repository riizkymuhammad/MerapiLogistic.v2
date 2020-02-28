<!DOCTYPE html>
<html>
<head>
	<title> Tambah Relawan</title>


	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">


</head>
<body>


<h1>Form Tambah Data Pegawai</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<!-- <div style="color: red;"><?php echo validation_errors(); ?></div> -->

		<?php echo form_open("admin/addrelawan"); ?>
			<table cellpadding="8">
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><input type="text" name="input_nohp" value="<?php echo set_value('input_nohp'); ?>"></td>
				</tr>
				
				<tr>
					<td>Alamat</td>
					<td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="input_username" value="<?php echo set_value('input_username'); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="input_password" value="<?php echo set_value('input_password'); ?>"></td>
				</tr>
				<tr>
					
					<td><input type="hidden" name="input_level" value="2"></td>
				</tr>
				
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>

</body>
</html>


