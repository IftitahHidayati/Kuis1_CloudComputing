<div class="panel panel-primary">
<div class="panel-heading">
        Tambah Data Anggota
    </div>
  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />    
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" /> Laki-Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" /> Wanita
                                            </label>
                                        </div>

                                         <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option value="TI">Teknik Informatika</option>
                                                <option value="MI">Manajemen Informatika</option>
                                            </select>
                                        </div>

                                        
                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>

                                    </div>

                                </form>
                            </div>
</div>
</div>
</div>

<?php

 $nim = @$_POST['nim'];
 $nama = @$_POST['nama'];
 $tempat_lahir = @$_POST['tempat_lahir'];
 $tgl_lahir = @$_POST['tgl_lahir'];
 $jk = @$_POST['jk'];
 $prodi = @$_POST['prodi'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_anggota SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Berhasil Disimpan :)");
    window.location.href="?page=anggota";

   </script>

   <?php
  }
 }

?>