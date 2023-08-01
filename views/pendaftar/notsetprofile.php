<div class="container mt-4">
    <h3>PROFIL</h3>
    <hr>
    <?php
        include "../../controller/connect.php";
        $id = $_SESSION['id'];
        $query_status = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE id='$id'");
        $data_status = mysqli_fetch_assoc($query_status);

        $query_profil = "SELECT * FROM pendaftaranawal";
        $result_profil = mysqli_query($connect, $query_profil);
        $row_profil = mysqli_fetch_assoc($result_profil);
    ?>
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['nama']) ? $row_profil['nama'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['tempat_lahir']) ? $row_profil['tempat_lahir'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['tgllhr']) ? $row_profil['tgllhr'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['nisn']) ? $row_profil['nisn'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['asal_sekolah']) ? $row_profil['asal_sekolah'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['alamat']) ? $row_profil['alamat'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['nama_ayah']) ? $row_profil['nama_ayah'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['nama_ibu']) ? $row_profil['nama_ibu'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Program Yang Diambil</td>
                    <td>:</td>
                    <td><?php echo isset($row_profil['program']) ? $row_profil['program'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Status Pendaftaran</td>
                    <td>:</td>
                    <td>
                    <?php 
                        if ($row_profil['status'] == '1') {
                            echo "<span class='badge badge-success'>Selamat Anda Diterima Sebagai Calon Santri</span>";
                        } else if  ($row_profil['status'] == '2'){
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