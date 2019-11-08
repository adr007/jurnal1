 <?php include 'header.php'; ?> 
     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Metode</h2>
       <div class="row">
           <div class="col-md-12">
                <form class="" method="GET" action="<?= base_url('menu/metode') ?>">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <select type="text" class="form-control" name="key">
                                <option value="">-- Pilih Metode --</option>
                              <?php 
                                  foreach ($metode as $data) {
                                    echo "<option value='$data[id]'>$data[metode]</option>";
                                  }
                               ?>
                            </select>
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
    <section class="what_we_area row" >
        <div class="container" style="min-height: 600px;">
            <?php if (isset($jurnal)) {  ?>
                        <div class="tittle wow fadeInUp">
                            <h2>Jurnal Metode : <span style="color: #f5b50b"><?= $metodex['metode'] ?></span></h2>
                        </div>
                        <div class="row construction_iner">
                            <div class="col-md-12" style="overflow: auto;">
                                <table class="table table-hover" id="tb1">
                                    <thead>
                                        <th width="15">#</th>
                                        <th width="180">Author</th>
                                        <th>Judul</th>
                                        <th>Publikasi</th>
                                        <th width="100"></th>
                                    </thead>
                                    <tbody>
                                       <?php $no = 1; foreach ($jurnal as $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['author'] ?>, <?= $data['author2'] ?>, <?= $data['author3'] ?></td>
                                            <td><?= $data['judul'] ?></td>
                                            <td><?= $data['tgl'] ?></td>
                                            <td><a href="<?= base_url('menu/info/').$data['id'] ?>">Abstrak</a> | <a href="<?= base_url().$data['file'] ?>">PDF</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            <?php }else{
                echo "<div class='col-md-12 text-center' style='padding-top: 20%;'>
                <h2>Pilih Metode</h2>
            </div>";
            } ?>

            
        </div>
    </section>
    <!-- End What ew offer Area -->

<?php include 'footer.php'; ?>

<script>
    $(document).ready( function () {
        $('#tb1').DataTable();
    } );
</script>