<?php

    $nim = $_GET['id'];
    $sql = $koneksi->query("select * from tb_anggota where nim = '$nim'");
    $tampil = $sql->fetch_assoc();
    $jkl = $tampil['jk'];
    $prodi = $tampil['prodi'];

?>


<div class="panel panel-primary">
<div class="panel-heading">
        Ubah Data
    </div>
  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" value="<?php echo $tampil['nim']?>" readonly />    
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>" />    
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" <?php echo($jkl=='l')?"checked":""; ?> /> Laki-Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" <?php echo($jkl=='p')?"checked":""; ?> /> Wanita
                                            </label>
                                        </div>

                                         <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option value="TI" <?php if ($prodi=='TI') { echo "selected"; 
                                            } ?> />Teknik Informatika</option>
                                                <option value="MI" <?php if ($prodi=='MI') { echo "selected"; 
                                            } ?> />Manajemen Informatika</option>
                                            </select>
                                        </div>


                                        <div>
                                            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
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
  
  $sql = $koneksi->query("update tb_anggota SET nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi' where nim='$nim' ");

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