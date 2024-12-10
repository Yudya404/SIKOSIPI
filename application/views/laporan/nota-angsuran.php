<p align="center">
    <b>NOTA PEMBAYARAN ANGSURAN PINJAMAN</b>
</p>
<table>
    <tr>
        <th>Nama Anggota</th>
        <th>Nama Teller</th>
        <th>Jumlah Angsuran</th>
        <th>Tanggal Transaksi</th>
    </tr>
    <?php
	$total_angsuran = 0;
	foreach ($angsuran_detail as $item) {
		// Membersihkan data dan mengubah format
		$angsuran_pembayaran_cleaned = str_replace(['Rp', ','], '', $item['angsuran_pembayaran']);
		// Konversi ke tipe data numerik (float)
		$angsuran_pembayaran_numeric = floatval($angsuran_pembayaran_cleaned);
		// Tambahkan nilai yang sudah dikonversi ke total
		$total_angsuran += $angsuran_pembayaran_numeric;
	?>
		<tr>
			<td><?= $item['nama_anggota'] ?></td>
			<td><?= $item['nama_pegawai'] ?></td>
			<td><?= $item['angsuran_pembayaran'] ?></td>
			<td><?= formatTanggal($item['tanggal_angsuran']) ?></td>
		</tr>
	<?php } ?>
	<tr>
		<th colspan="2">Total Angsuran :</th>
		<th>Rp. <?= number_format($total_angsuran, 0, ',', '.') ?></th>
		<th></th>
	</tr>
</table>