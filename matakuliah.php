 <div layout:fragment="breadcrumb">
    <div class="panel-heading"><h3>Daftar Mata Kuliah</h3></div>
</div>
<div layout:fragment="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-tools"></div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tbody>
                                        <?php 
                                        $nomor=1;
                                        $ambil=$koneksi->query("SELECT * FROM mata_kuliah")
                                        ?>
                                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['kode_matkul'] ?></td>
                                            <td><?php echo $pecah['nama_matkul']; ?></td>
                                            
                                            <td>
                                                <a href="index.php?page=editmatkul&kode_matkul=<?php echo $pecah['kode_matkul']; ?>" class="btn btn-default" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a href="index.php?page=hapusmatkul&kode_matkul=<?php echo $pecah['kode_matkul']; ?>" class="btn btn-default" title="Delete Data"><i class="glyphicon glyphicon-trash"></i></a>
                                            </td>
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
            <div class="panel-footer">
                <a href="index.php?page=tambahmatkul" class="btn-title btn btn-primary"><i class="fa fa-plus"></i> Tambah Matkul</a>
            </div>
        </div>
    </div>
</div>