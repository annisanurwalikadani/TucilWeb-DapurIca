<?php echo $this->extend('layout/index');?>
<?php echo $this->section('content');?>

	
	<h1 align="center">TentangKu</h1>
	<table border="2" align="center">
		<tr>
			<th>Foto</th>
			<th colspan="2">Data Diri</th>
		</tr>
		<tr>
			<td rowspan="3"><img src="assets/img/icaaa.jpg" height="500" width="" ="100" alt=""></td>

			<td>Nama</td>
			<td>Annisa Nurwalikadani</td>
		</tr>
		<tr>
			<td>NPM</td>
			<td>1817051037</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>07 10 2000</td>
		</tr>
	</table>
</body>

<?php echo $this->endSection();?>