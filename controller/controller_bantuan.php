<?php
    session_start();
    include "connect.php";

    if (isset($_FILES["image"]["name"])) {
        // File upload path
        $targetDir = "../views/pendaftar/bantuan/";

        // Get the name, size, and temporary name of the uploaded file
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Image validation
        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        // Generate a unique filename for the uploaded image
        $newImageName = uniqid() . '.' . $imageExtension;
        $targetFile = $targetDir . $newImageName;

        if (in_array($imageExtension, $validImageExtensions)) {
            if ($imageSize <= 1200000) { // 1,200,000 bytes = 1.2 MB (adjust as needed)
                if (move_uploaded_file($tmpName, $targetFile)) {
                    // Image uploaded successfully
                    // Now you can store the $newImageName in your database or perform any other necessary actions
                    // For example, you can use this value in your SQL INSERT or UPDATE query

                    // If you want to redirect back to the original form after successful upload
                    header('Location: ../views/pendaftar/tes.php');
                    exit();
                } else {
                    // Failed to move the uploaded image to the target folder
                    echo "Failed to upload the image.";
                }
            } else {
                echo "Image size is too large. Maximum allowed size is 1.2 MB.";
            }
        } else {
            echo "Invalid image extension. Only JPG, JPEG, and PNG files are allowed.";
        }
    }

    // Menangkap data biodata
    $judul = $_POST['judul'];
    $id = $_SESSION['id'];
    $isi = $_POST['isi'];
    $customFile = $_POST['image'];

    // Masukkan data ke database (tabel pendaftarawal)
    $querypendaftarawal = mysqli_query($connect, "INSERT INTO bantuan (judul, pertanyaan, lampiran, id_user) 
    VALUES ('$judul', '$isi', '$customFile', '$id')");


    if ($querypendaftarawal) {
        // Redirect ke halaman yang diinginkan setelah pendaftaran berhasil
        echo "<script>alert('Bantuan siswa berhasil!'); document.location.href = '../views/pendaftar';</script>";
    } else {
        // Tampilkan pesan gagal jika pendaftaran gagal
        echo "<script>alert('Bantaun siswa gagal!'); document.location.href = '../views/pendaftar';</script>";
    }
?>
