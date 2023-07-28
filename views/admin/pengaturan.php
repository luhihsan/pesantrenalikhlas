        <div class="container text-center mt-3">
            <br>
        <h4 class="mt-3">Portal Jawab Bantuan Pendaftar</h4>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>ID Pertanyaan</th>
                        <th>Pertanyaan</th>
                        <th>Lampiran</th> 
                        <th>Jawaban</th>   
                        <th>Aksi </th>           
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $query = mysqli_query($connect, "SELECT * FROM bantuan");
                        $data = mysqli_fetch_array($query);
                        $id_bantuan = $data['id_bantuan'];
                        foreach ($query as $data) :
                            $i++;
                    ?>
                    <tr>
                        <td><?= $data['id_bantuan'] ?></td>
                        <td><?= $data['pertanyaan'] ?></td>
                        <td><?= $data['lampiran'] ?></td>
                        <form action="../../controller/submit_jawaban.php" method="POST" >
                        <td>
                            <input type="text" value="<?php echo $data['jawaban']; ?>" name="jawaban" id="jawaban">
                            <input type="hidden" value="<?php echo $data['id_bantuan']; ?>" name="id_bantuan" id="id_bantuan">
                        </td>
                        <td>
                            <input type="submit"  value="Submit" >
                           
                        </td>
                        </form>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            
           
        </div>

