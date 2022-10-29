<a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-plus"></i>
Tambah Data Anggota</a>
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                             <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Program Studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                            $no = 1;

                                            $sql = mysqli_query($koneksi, "select * from tb_anggota");
                                            while ($data= mysqli_fetch_array($sql)) {
                                                
                                            $jk = ($data['jk']=='l')?"Laki - Laki":"Wanita";
                                            $prodi = ($data['prodi']=='TI')?"Teknik Informatika":"Manajemen Informatika";
                                         ?>
                                            

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nim'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tempat_lahir'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $jk;?></td>
                                            <td><?php echo $prodi;?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-info" >Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ....???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>