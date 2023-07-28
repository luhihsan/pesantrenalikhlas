        <div class="container text-center mt-3">
            <br>
        <h4 class="mt-3">Portal Jawab Bantuan Pendaftar</h4>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Id keluhan</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Lampiran</th>
                        <th>Asal Sekolah</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $query = mysqli_query($connect, "SELECT * FROM pendaftaranawal");
                        foreach ($query as $data) :
                            $i++;
                    ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['no_pendfawal'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['tgllhr'] ?></td>
                        <td><?= $data['tempat_lahir'] ?></td>
                        <td><?= $data['nisn'] ?></td>
                        <td><?= $data['asal_sekolah'] ?></td>
                        
                        <td>
                            <!-- Tambahkan tombol aksi di sini -->
                            <!-- Misalnya, tombol edit dan hapus -->
                            <a href="edit_pendaftaranawal.php?no_pendfawal=<?= $data['no_pendfawal']; ?>" class="btn btn-primary">Edit</a>
                            <a href="../../controller/hapus_pendaftaranawal.php?no_pendfawal=<?= $data['no_pendfawal']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            <?php
                            if ($data['status'] == 0) {
                                echo "<a href='generate_pdf.php?no_pendf=$data[no_pendf]' target='_blank' class='btn btn-info'>Cetak PDF</a>";
                                echo "<a href='../../controller/konfirmasi.php?yes&no_pendf=$data[no_pendf]' class='btn btn-warning'>Terima</a>
                                    <a href='../../controller/konfirmasi.php?no&no_pendf=$data[no_pendf]&idberkas=$data[id_berkas]&idnilai=$data[id_nilai]' class='btn btn-danger'>Tolak</a>";
                            } else {
                                echo "<span class='badge badge-success'>Diterima</span>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            
           
        </div>

