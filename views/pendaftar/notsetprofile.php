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
                    <td>Nama lengkapss</td>
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
                       
                       
                    ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>