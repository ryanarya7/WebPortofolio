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
        <style>
            
        </style>
    </head>
    <body id="page-top">
        <?php
            require_once "menu.php";
            include "koneksi.php";
            $querySQL = "SELECT * FROM indexhome" ;
            $execQuerySQL = mysqli_query($koneksi,$querySQL);
            if(mysqli_num_rows($execQuerySQL) > 0){
                while($row = mysqli_fetch_assoc($execQuerySQL)){
        ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase"><?= $row['nama'] ?></h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?= $row['isi'] ?></h2>
                    </div>
                </div>
            </div>
        </header>
        <?php
        }
            }
        ?>
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
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Ryan Arya 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
