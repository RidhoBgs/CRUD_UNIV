<div layout:fragment="breadcrumb">
    <div class="panel-heading"><h3>Daftar Mahasiswa</h3></div>
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
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>nim</th>
                                        <th>nama</th>
                                        <th>alamat</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                    <tbody>
                                        <?php 
                                        $nomor=1;
                                        $ambil=$koneksi->query("SELECT * FROM mahasiswa")
                                        ?>
                                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $nomor; ?></td>
                                                
                                                <td><?php echo $pecah['nim'] ?></td>
                                                <td><?php echo $pecah['nama']; ?></td>
                                                <td><?php echo $pecah['alamat']; ?></td>
                                                
                                                <td>
                                                    <a href="index.php?page=editmahasiswa&nim=<?php echo $pecah['nim']; ?>" class="btn btn-default" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
                                                    <a href="index.php?page=hapusmahasiswa&nim=<?php echo $pecah['nim']; ?>" class="btn btn-default" title="Delete Data"><i class="glyphicon glyphicon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="index.php?page=tambahmahasiswa" class="btn-title btn btn-primary"><i class="fa fa-plus"></i> Tambah Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>