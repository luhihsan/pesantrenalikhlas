    <?php
        include "../../controller/connect.php";

    ?>
    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container overflow-auto">
            <h4>DAFTAR CALON SISWA</h4>
            <table class="table mt-4">
                <tr>
                    <td>No</td>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Tanggal lahir</td>
                    <td>NISN</td>
                   

                </tr>
                <?php
                    $i=0;
                    $query = mysqli_query($connect, "SELECT * FROM pendaftar p JOIN berkas b ON b.id_berkas=p.id_berkas JOIN nilai_un n ON n.id_nilai=p.id_nilai ORDER BY n.jumlah DESC");
                    foreach($query as $data) :
                    $i++;
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data['no_pendf'] ?></td>
                    <td><?= $data['nama'] ?></td>

                    <td><?= $data['tgl_lhr'] ?></td>
                    
                    <td><?= $data['nisn'] ?></td>
                </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </main>
    <!-- END CONTENT -->