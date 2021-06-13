<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Database Mahasiswa</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Database<b> Mahasiswa</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href='<?php echo base_url("mahasiswa/tambah"); ?>' data-target="#addNewStudent" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Mahasiswa</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th style="text-align:center;">NRP</th>
                                <th style="text-align:center;">Nama</th>
                                <th style="text-align:center;">Jenis Kelamin</th>
                                <th style="text-align:center;">Telepon</th>
                                <th style="text-align:center;">Alamat</th>
                                <th style="text-align:center;">Jurusan</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                               if( ! empty($mahasiswa)){
                                   foreach($mahasiswa as $data){
                                   echo "<tr>
                                   <td>".$no++."</td>
                                    <td>".$data->nrp."</td>
                                    <td>".$data->nama."</td>
                                    <td>".$data->jenis_kelamin."</td>
                                    <td>".$data->telepon."</td>
                                    <td>".$data->alamat."</td>
                                    <td>".$data->jurusan."</td>
                                    <td>
                                        <a href='".base_url("mahasiswa/ubah/".$data->nrp)."'>Ubah</a>
                                        <a href='".base_url("mahasiswa/hapus/".$data->nrp)."'>Hapus</a>
                                    </td>
                                    </tr>";
                                    }
                                }else{
                                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="addNewStudent" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo base_url("mahasiswa/tambah"); ?>">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Mahasiswa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <?php echo form_open("mahasiswa/tambah"); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" name="input_nrp" value="<?php echo set_value('input_nrp'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="test" class="form-control" name="input_nama" value="<?php echo set_value('input_nama'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
                                <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="input_telepon" value="<?php echo set_value('input_telepon'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="input_jurusan" value="<?php echo set_value('input_jurusan'); ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                            <a href="<?php echo base_url(); ?>"><input type="button" class="btn btn-default" value="Batal"></a>
                            <?php echo form_close(); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
