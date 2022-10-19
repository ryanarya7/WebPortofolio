<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ryan Arya</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <?php
        require_once "menu.php";
        include "koneksi.php";
        $querySQL = "SELECT * FROM certificateuts" ;
        $execQuerySQL = mysqli_query($koneksi,$querySQL);
        if(mysqli_num_rows($execQuerySQL) > 0){
            while($row = mysqli_fetch_assoc($execQuerySQL)){
    ?>
    <!-- Projects-->
    <section class="projects-section" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/<?= $row['gambar'] ?>" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"><?= $row['judul'] ?></h4>
                                    <p class="mb-0 text-white-50"><?= $row['isi'] ?></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
        }
    }
    ?>
<!-- Footer-->
<footer
        class="text-center text-lg-start text-white pb-0"
        style="background-color: #4d4d4d"
        >
<!-- Section: Social media -->
<section
            class="d-flex justify-content-between p-4"
            style="background-color: #1c1c1c"
            >
    <!-- Left -->
    <div class="me-5">
    <span>Get connected with my social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
    <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
    </a>
    </div>
    <!-- Right -->
</section>
 <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div></footer>
</body>
</html>