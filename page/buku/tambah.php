<div class="panel panel-primary">
<div class="panel-heading">
        Tambah Data Buku
    </div>
  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />    
                                        </div>

                                         <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                               <?php

                                                    $tahun = date("Y");
                                                    for ($i=$tahun-25; $i <= $tahun;  $i++) {
                                                        echo'
                                                            <option value="'.$i.'">'.$i.'</option>
                                                        ';
                                                    }

                                                ?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" />    
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" />    
                                        </div>

                                         <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option valeu="rak1">rak1</option>
                                                <option valeu="rak2">rak2</option>
                                                <option valeu="rak3">rak3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" type="date" />    
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

 $judul = @$_POST['judul'];
 $pengarang = @$_POST['pengarang'];
 $penerbit = @$_POST['penerbit'];
 $tahun_terbit = @$_POST['tahun_terbit'];
 $isbn = @$_POST['isbn'];
 $jumlah_buku = @$_POST['jumlah_buku'];
 $lokasi = @$_POST['lokasi'];
 $tgl_input = @$_POST['tgl_input'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi', tgl_input='$tgl_input'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Berhasil Disimpan :)");
    window.location.href="?page=buku";

   </script>

   <?php
  }
 }

?>