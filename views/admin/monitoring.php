<?php
    include "../../controller/connect.php";
?>

<!-- START CONTENT -->
<main role="main">
        <div class="container">
        <h4 class="mt-5">DAFTAR CALON SISWA </h4>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>NISN</th>
                        <th>Asal Sekolah</th>
                        <th>Alamat</th  >
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No Handphone</th>
                        <th>Program Peminatan</th>
                        <th>Aksi</th>
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
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['nama_ayah'] ?></td>
                        <td><?= $data['nama_ibu'] ?></td>
                        <td><?= $data['nohp'] ?></td>
                        <td><?= $data['program'] ?></td>
                        <td>
                            <!-- Tambahkan tombol aksi di sini -->
                            <!-- Misalnya, tombol edit dan hapus -->
                            <?php
                            if ($data['status'] == 0) {
                                echo "<a href='generate_pdf.php?no_pendf=$data[no_pendfawal]' target='_blank' class='btn btn-info'>Cetak PDF</a>";
                                echo "<a href='../../controller/konfirmasi.php?yes&no_pendfawal=$data[no_pendfawal]' class='btn btn-warning'>Terima</a>
                                    <a href='../../controller/konfirmasi.php?no&no_pendfawal=$data[no_pendfawal]' class='btn btn-danger'>Tolak</a>";
                            } else if  ($data['status'] == 2)  {
                                echo "<span class='badge badge-danger'>Ditolak</span>";
                            } else{
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
</main>
</main>
<!-- END CONTENT -->
