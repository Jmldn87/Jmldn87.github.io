<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TUGASKU</title>

	    <link rel="stylesheet" href="bootstrap.css">

    </head>

    <body>
        <div class="container">
          <div class="judul">
          <h1>Formulir Pengiriman Tugas</h1>
          <style>
              .judul {
                  background-color: #800000; 
                  padding: 15px;
                  color: #ffffff;
                  text-align: center;
              }
          </style>

          </div>
          <div>
          <div class="info-matkul">
              <div class="info-matkul-item">
                  <h5>Mata Pelajaran: </h5>
                  <li>Komputer Jaringan Dasar (KJD)</li>
                  <li>Dasar Desain Grafis (DDG)</li>
              </div>
              <div class="info-matkul-item">
                  <h5>Guru Mata Pelajaran</h5>
                  <ol>Jamaludin</ol>
              </div>
              <style>
                  .info-matkul {
                      display: flex;
                      justify-content: space-between;
                      align-items: flex-end;
                      margin-top: 10px;
                  }

                  .info-matkul-item {
                      text-align: left;
                  }
              </style>

          </div>
          </div>
          <hr>
          <?php echo $flashMessage; ?>

          <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" autofocus="autofocus" placeholder="Tulis Nama Lengkap" value="<?php echo $nama ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="kelas" class="col-sm-2 control-label">Kelas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" value="<?php echo $kelas ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="mapel" class="col-sm-2 control-label">Mata Pelajaran</label>
                 <div class="col-sm-10">
                 <select class="form-control" name="mapel" required>
                  <option value="KJD" <?php echo ($mapel == 'KJD') ? 'selected' : ''; ?>>Komputer Jaringan Dasar (KJD)</option>
                  <option value="DDG" <?php echo ($mapel == 'DDG') ? 'selected' : ''; ?>>Dasar Desain Grafis (DDG)</option>
                </select>
            </div>
            </div>

            <div class="form-group">
              <label for="tugas" class="col-sm-2 control-label">Tugas</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="tugas" autofocus="autofocus" placeholder="Masukan Nama Tugas" value="<?php echo $tugas ?>" required>
              </div>
            </div>

            <div class="form-group">
                <label for="tanggal_pengiriman" class="col-sm-2 control-label">Tanggal Pengiriman</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_pengiriman" value="<?php echo $tanggal_pengiriman ?>" required>
                </div>
            </div>

            <div class="form-group">
              <label for="file" class="col-sm-2 control-label">File Input</label>
              <div class="col-sm-10">
                <input type="file" name="file">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" value="submit"class="btn btn-warning">Kirim</button>
                <style>
              </div>
            </div>
          </form>
        </div>
    </body>
</html>
