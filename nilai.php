 <div layout:fragment="breadcrumb">
    <div class="panel-heading"><h3>Nilai Mahasiswa</h3></div>
</div>
<div layout:fragment="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-tools">
                        <form method="get">
                            <div class="input-group input-group-sm" style="width: 250px; float: right; padding: 4px 5px 4px 5px;">
                                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-btn" >
                                    <button class="btn btn-success " type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Nilai</th>

                                    </tr>
                                    <tbody>
                                        <?php 
                                        $nomor=1;
                                        $ambil=$koneksi->query("SELECT * FROM  nilai , Mahasiswa, mata_kuliah ");
                                        ?>
                                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['nim'] ?></td>
                                            <td><?php echo $pecah['nama']; ?></td>
                                            <td><?php echo $pecah['kode_matkul'] ?></td>
                                            <td><?php echo $pecah['nama_matkul']; ?></td>
                                            <td><?php echo $pecah['nilai']; ?></td>

                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>