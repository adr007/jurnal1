 <?php include 'header.php'; ?> 
     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Cari Jurnal</h2>
       <div class="row">
           <div class="col-md-12">
                <form class="" method="GET" action="<?= base_url('menu/cari') ?>">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="key" placeholder="Kata Kunci">
                        </div>
                        <div class="col-md-2 text-left" style="padding-left: 0; margin-left: 0">
                            <button type="submit" class="btn btn-warning">Cari</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
           </div>
       </div>
    </section>
    <!-- End Banner area -->

   

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Jurnal Terbaru</h2>
            </div>
            <div class="row construction_iner">
                <?php foreach ($jurnal as $data) { ?>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?= base_url('komponen/front/images/') ?>jurnal3.jpg" alt="" style="width: 100%;">
                   </div>
                   <div class="cns-content">
                        <a href="<?= base_url('menu/info/').$data['id']  ?>">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <p><?= $data['judul'] ?></p>
                            <p style="text-transform: none; color: #e7a711"><?= $data['author'] ?> <br> <?= $data['author2'] ?> <br> <?= $data['author3'] ?></p>
                            <p style="">                                        
                                <button style="float: right;" class="btn btn-warning"><span class="fa fa-calendar"></span> <?= $data['tgl'] ?></button>
                            </p>
                            <br>
                        </a>
                   </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

<?php include 'footer.php'; ?>