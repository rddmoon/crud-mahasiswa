<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tambah - Database Mahasiswa</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}

td {
	font-size:15px;
}

.table-responsive {
    margin: 30px 0;
}

.table-wrapper {
	background: #fff;
	padding: 20px;
	border-radius: 3px;
	width: 800px;
  align:center;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.table-title {
	padding-bottom: 15px;
	background: #212f3d;
	color: #fff;
	padding: 16px 15px;
	min-width: 100%;
	margin: ;
	border-radius: 3px 3px 0 0;
}

.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}

.form-control {
    width: 520px;
}
</style>

</head>
  <body>
    <div class="container-xl">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <br>
                  <h1 style="text-align:center;">Tambah Data Mahasiswa</h1>
              </div>
              <hr>
              <div style="color: red;"><?php echo validation_errors(); ?></div>

              <?php echo form_open("mahasiswa/tambah"); ?>
                <table cellpadding="8">
                  <tr>
                    <td>NRP</td>
                    <td><input type="text" name="input_nrp" value="<?php echo set_value('input_nrp'); ?>"></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
                    <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
                    </td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="input_telepon" value="<?php echo set_value('input_telepon'); ?>"></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
                  </tr>
                  <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan'); ?>"></td>
                  </tr>
                </table>

                <hr>
                <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
              <?php echo form_close(); ?>
            </div>
        </div>
    </div>
  </body>
</html>
