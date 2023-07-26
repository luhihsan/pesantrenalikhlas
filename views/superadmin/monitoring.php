<?php
    include "../../controller/connect.php";
?>

<!-- START CONTENT -->
<main role="main">
    <div class="container">
        <h4 class="mt-5">DAFTAR CALON ADMIN</h4>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // $i=0;
                        $query = mysqli_query($connect, "SELECT * FROM user u JOIN level l ON l.id_level=u.id_level WHERE u.id_level = 2 ORDER BY u.id ASC");
                        foreach($query as $data) :
                        // $i++;
                    ?>
                    <tr>
                        <!-- <td><?= $i; ?></td> -->
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['nama_level'] ?></td>
                        <td>
                            <?php
                                if ($data['id_level'] == 2) {
                                    echo "<a href='../../controller/konfirmasiSuperAdmin.php?yes&id=$data[id]'class='btn btn-warning'>Terima</a>
                                    ";
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
</main>
<!-- END CONTENT -->
