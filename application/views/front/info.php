 <?php include 'header.php'; ?> 
     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Jurnal</h2>
        <ol class="breadcrumb">
            
            <li><a href="#" class="active">Jurnal</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

   

   <!-- About Us Area -->
    <section class="about_us_area about_us_2 row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="text-transform: none;"><?= $jurnal['judul'] ?></h2>
                <h4 style="text-transform: none;"><?= $jurnal['author'] ?></h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-12">
                    <div class="subtittle">
                        <h2 style="font-size: 12pt">Abstrak</h2>
                    </div>
                      <?= $jurnal['abstrak'] ?>

                    <a href="<?= base_url().$jurnal['file'] ?>" class="btn btn-warning">Full PDF</a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

<?php include 'footer.php'; ?>