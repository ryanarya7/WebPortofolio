<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpan insert</title>
</head>
<body>
    <?php
        require_once "menu.php";
        include "koneksi.php";
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $nama = $_POST['nama'];
            $comment = $_POST['comment'];
            $querySQL = "INSERT INTO contactuts(id, email, nama, comment) VALUES (NULL,'$email', '$nama', '$comment')";
            $execSQL = mysqli_query($koneksi,$querySQL);
            
        }
    ?>
    <div class="container-fluid mt-5 pt-5">
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <?php
                            if($execSQL){
                                $lastId = mysqli_insert_id($koneksi);
                                echo "Data dengan ID $lastId berhasil diinput ke dalam database";
                            }
                            else {
                                echo "Data tidak berhasil diinput ke dalam database";
                            }
                        ?>
                    </p>
                </div>
                <div class="col-sm-12">
                    <a href="contact.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
</body>
</html>