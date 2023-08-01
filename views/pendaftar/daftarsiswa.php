    <?php
        include "../../controller/connect.php";

    ?>
    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container overflow-auto">
            <h4>DAFTAR CALON SISWA LULUS SELEKSI</h4>
            <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Program Peminatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $query = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE status = '1' ");
                        foreach ($query as $data) :
                            $i++;
                    ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['no_pendfawal'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['asal_sekolah'] ?></td>
                        <td><?= $data['program'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </div>
    </main>
    <!-- END CONTENT -->