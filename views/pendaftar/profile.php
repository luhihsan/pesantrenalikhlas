<div class="container mt-4">
    <h3>PROFIL</h3>
    <hr>
    <?php
        include "../../controller/connect.php";
        $id = $_SESSION['id'];
        $query_status = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE id='$id'");
        $data_status = mysqli_fetch_assoc($query_status);

    ?>
    <div class="row">
        <div class="col-3">
            <img src="../../assets/img/<?= $data_status['foto'] ?>" alt="" width="200">
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <td>Nama lengkapaa</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['nama']) ? $data_status['nama'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['tempat_lahir']) ? $data_status['tempat_lahir'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['tgllhr']) ? $data_status['tgllhr'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['nisn']) ? $data_status['nisn'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['asal_sekolah']) ? $data_status['asal_sekolah'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['alamat']) ? $data_status['alamat'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['nama_ayah']) ? $data_status['nama_ayah'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['nama_ibu']) ? $data_status['nama_ibu'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Program Yang Diambil</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['program']) ? $data_status['program'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Status Pendaftaran</td>
                    <td>:</td>
                    <td>
                    <?php 
                        if ($data_status['status'] == '1') {
                            echo "<span class='badge badge-success'>Selamat Anda Diterima Sebagai Calon Santri</span>";
                            echo "<br>";
                            echo "<br>";
                            echo "<a href='../../controller/generate_pdf.php?no_pendfawal=$data_status[no_pendfawal]' target='_blank' class='btn btn-info'>Cetak PDF</a>";
                        } else if  ($data_status['status'] == '2'){
                            echo "<span class='badge badge-danger'>Mohan Maaf, Anda Tidak Lolos Seleksi Sebagai Calon Santri</span>";
                        } else {
                            echo "<div class='alert alert-warning' role='alert'>Status : Sedang Dalam Proses Penilaian Panitia</div>";
                        }   
                    ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>