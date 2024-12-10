<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Pencarian Anggota</strong>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('pegawai/cariAnggota'); ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Masukkan kata kunci pencarian..." aria-label="Masukkan kata kunci pencarian..." aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </form>
                        
                        <?php if (isset($anggota)): ?>
                            <?php if (!empty($anggota)): ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Arsip Kode</th>
                                            <th>Nama Pemohon</th>
                                            <th>Nomor Pemohon</th>
                                            <th>Tanggal Upload</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach ($anggota as $item) { 
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $item['arsip_kode'] ?></td>
                                                <td><?= $item['nama_pemohon'] ?></td>
                                                <td><?= $item['pemohon_nomor'] ?></td>
                                                <td><?= $item['arsip_waktu_upload'] ?></td>
												<td>
												<a href="#" class="badge badge-success">
													<i class="fa fa-plus"></i> Tambahkan
												</a>
											</td>
                                            </tr>
                                        <?php 
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p class="text-center">Tidak ada data ditemukan</p>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
