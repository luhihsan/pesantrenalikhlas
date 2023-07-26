    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>FORMULIR PENDAFTARAN</h4>
            <hr>
            <form action="../../controller/daftar.php" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <h5>BIODATA</h5>
                        <!-- <div class="form-group">
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
                        </div> -->

                        <!-- EDITT!!! -->

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                        </div>
                        <label class="d-block m-0">Jenis kelamin</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="kelamin" id="lakilaki" value="L" required>
                            <label class="form-check-label" for="lakilaki">Laki-laki</label>
                            <input class="form-check-input ml-2" type="radio" name="kelamin" id="perempuan" value="P" required>
                            <label class="form-check-label ml-4" for="perempuan">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <label for="tgllahir">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katholik">katholik</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <h5>NILAI</h5>
                        <div class="form-group">
                            <label for="nilai">nilai rata-rata(rapor per-semester)</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" placeholder="masukkan nilai" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="indo">Bahasa indonesia</label>
                            <input type="number" class="form-control" id="indo" name="indo" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="mtk">Matematika</label>
                            <input type="number" class="form-control" id="mtk" name="mtk" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="inggris">Bahasa inggris</label>
                            <input type="number" class="form-control" id="inggris" name="inggris" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="ipa">IPA</label>
                            <input type="number" class="form-control" id="ipa" name="ipa" placeholder="masukkan nilai" required>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>BERKAS</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="foto">foto(JPEG)</label>
                            <input type="file" name="foto" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="kk">Kartu keluarga(PDF)</label>
                            <input type="file" name="kk" id="kk" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="akta">akta kelahiran(PDF)</label>
                            <input type="file" name="akta" id="akta" required>
                        </div>
                        <div class="form-group">
                            <label for="ijazah">Ijazah(PDF)</label>
                            <input type="file" name="ijazah" id="ijazah" required>
                        </div>
                    </div>
                </div> 
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div>
                        
                        <!-- <label class="d-block m-0">Jenis kelamin</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="kelamin" id="lakilaki" value="L" required>
                            <label class="form-check-label" for="lakilaki">Laki-laki</label>
                            <input class="form-check-input ml-2" type="radio" name="kelamin" id="perempuan" value="P" required>
                            <label class="form-check-label ml-4" for="perempuan">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katholik">katholik</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <h5>NILAI</h5>
                        <div class="form-group">
                            <label for="nilai">nilai rata-rata(rapor per-semester)</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" placeholder="masukkan nilai" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="indo">Bahasa indonesia</label>
                            <input type="number" class="form-control" id="indo" name="indo" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="mtk">Matematika</label>
                            <input type="number" class="form-control" id="mtk" name="mtk" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="inggris">Bahasa inggris</label>
                            <input type="number" class="form-control" id="inggris" name="inggris" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="ipa">IPA</label>
                            <input type="number" class="form-control" id="ipa" name="ipa" placeholder="masukkan nilai" required>
                        </div>
                    </div>
                </div> -->
                <!-- <hr>
                <h5>BERKAS</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="foto">foto(JPEG)</label>
                            <input type="file" name="foto" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="kk">Kartu keluarga(PDF)</label>
                            <input type="file" name="kk" id="kk" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="akta">akta kelahiran(PDF)</label>
                            <input type="file" name="akta" id="akta" required>
                        </div>
                        <div class="form-group">
                            <label for="ijazah">Ijazah(PDF)</label>
                            <input type="file" name="ijazah" id="ijazah" required>
                        </div>
                    </div>
                </div> 
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div> -->
                <hr>
                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="daftar"><i class="fa fa-paper-plane"></i> Daftar</button>    
            </form>
        </div>
    </main>
    <!-- END CONTENT -->