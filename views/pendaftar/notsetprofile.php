<div class="container mt-4">
    <h3>PROFIL</h3>
    <hr>
    <?php
        include "../../controller/connect.php";
        $id = $_SESSION['id'];
        $query_status = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
        $data_status = mysqli_fetch_assoc($query_status);

    ?>
    <div class="row">
        <div class="col-3">
            <!-- <img src="../../assets/img/<?= $data_status['foto'] ?>" alt="" width="200"> -->
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['nama']) ? $data_status['nama'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo isset($data_status['email']) ? $data_status['email'] : 'N/A'; ?></td>
                </tr>
                
                <tr>
                    <td>Status Pendaftaran</td>
                    <td>:</td>
                    <td>
                    <?php 
                       echo "<div class='alert alert-warning' role='alert'>Status : Daftarkan diri anda!</div>";
                       
                       
                    if ($data3awal && isset($data3awal['status'])) {
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
                    }
                       
                    ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>