    <style>
    #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @keyframes zoom {
    from {transform: scale(0.1)} 
    to {transform: scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
    </style>
    

       <div class="container text-center mt-3">
            <br>
        <h4 class="mt-3">Portal Jawab Bantuan Pendaftar</h4>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>ID Pertanyaan</th>
                        <th>Pertanyaan</th>
                        <th>Foto</th> 
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
                        <td> 
                        <img class="myImg" id="myImg" src="../pendaftar/bantuan/<?= $data['lampiran'] ?>" alt="Lampiran" width="300" height="200">
                 
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img1">
                        <div id="caption"></div>
                        </div>
                        <script>
                        // Get all elements with the class "myImg"
                        var images = document.querySelectorAll('.myImg');

                        // Get the modal
                        var modal = document.getElementById('myModal');

                        // Get the modal image and caption elements
                        var modalImg = document.getElementById("img1");
                        var captionText = document.getElementById("caption");

                        // Loop through all images to attach the modal functionality
                        for (var i = 0; i < images.length; i++) {
                            var img = images[i];

                            // Create a function to handle the click event for each image
                            img.onclick = function() {
                            // Set the modal display to block and update the image and caption
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                            };
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        };
                        </script>

                        </td>
                        <!-- The Modal -->
                        
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

        