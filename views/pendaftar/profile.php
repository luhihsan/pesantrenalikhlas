<div class="container mt-4">
    <h3>PROFIL</h3>
    <hr>
    <?php
        include "../../controller/connect.php";
        $id = $_SESSION['id'];
        $query = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE id='$id'");
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="row">
        <div class="col-3">
            <img src="../../assets/img/<?= $data['foto'] ?>" alt="" width="200">
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $data['tempat_lahir'] ?></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $data['nisn'] ?></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><?= $data['asal_sekolah'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $data['tempat_lahir'] ?></td>
                </tr>
            </table>
            <?php 
                if ($data['status'] == '1') {
                    echo "<div class='alert alert-warning' role='alert'>Status : Calon Santri</div>";
                } else {
                    echo "<div class='alert alert-warning' role='alert'>Status : Sedang Dalam Proses Penilaian Panitia</div>";
                }
            ?>
        </div>
    </div>
</div>