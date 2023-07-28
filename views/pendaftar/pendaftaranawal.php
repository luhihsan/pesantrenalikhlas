    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>FORMULIR PENDAFTARAN</h4>
            <hr>
            <form action="../../controller/daftarawal.php" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <h5>BIODATA</h5>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukkan tempat lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tgllahir">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
                        </div>
                        
                        <label for="customFile">Foto</label>
                        <div class="custom-file">
                            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="masukkan NISN anda" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="masukkan asal sekolah anda" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ayah<br><b>Isikan Alm/Almah dulu jika sudah meninggal</b></label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="masukkan nama ayah anda" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ibu<br><b>Isikan Alm/Almah dulu jika sudah meninggal</b></label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="masukkan nama ibu anda" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">No Handphone<br><b>Utamakan Nomor WA</b></label>
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="masukkan no hp anda" required>
                        </div>
                        <div class="form-group">
                        <label for="pilihan">Program Peminatan</label><br>
                        <select id="program" name="program" required>
                            <option value="">-</option>
                            <option value="Tahfidz">Tahfidz</option>
                            <option value="Kitab">Kitab</option>
                        </select><br><br>
                        <input type="hidden" name="id_user" value="<?php echo $id; ?>">
                        </div>

                       
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div>
                        
                        
                <hr>
                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="daftar"><i class="fa fa-paper-plane"></i> Daftar</button>    
            </form>
        </div>
    </main>
    <!-- END CONTENT -->