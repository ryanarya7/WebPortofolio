<?php
    require_once "menu.php";
    include "koneksi.php";
    $querySQL = "SELECT * FROM aboututs" ;
    $execQuerySQL = mysqli_query($koneksi,$querySQL);
    if(mysqli_num_rows($execQuerySQL) > 0){
        while($row = mysqli_fetch_assoc($execQuerySQL)){
?>
<!-- About-->
<section class="about-section text-center mt-0 pt-0" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg">
                    <section class="section about-section gray-bg text-white" id="about">
                        <div class="container">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="about-text go-to">
                                        <h3 class="dark-color">About Me</h3>
                                        <p> <?= $row['about'] ?></p>
                                        <div class="row about-list">
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <label>Birthday</label>
                                                    <p><?= $row['birthday'] ?></p>
                                                </div>
                                                <div class="media">
                                                    <label>Age</label>
                                                    <p><?= $row['age'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="media">
                                                    <label>Residence</label>
                                                    <p><?= $row['residence'] ?></p>
                                                </div>
                                                <div class="media">
                                                    <label>Address</label>
                                                    <p><?= $row['address'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-avatar">
                                        <img class="card-img-top rounded-square mt-3" src="assets/img/<?= $row['gambar'] ?>" alt="Card image" style="width: 50%;">                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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