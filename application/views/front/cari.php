 <?php include 'header.php'; ?> 
     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Cari Jurnal</h2>
        <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-search"></i></a></li>
            <li><a href="#" class="active"><?= $key ?></a></li>
        </ol>
    </section>
    <!-- End Banner area -->

   

    <!-- What ew offer Area -->
    <section class="what_we_area row" >
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Indeks Jurnal</h2>
            </div>
            <div class="row construction_iner">
                <div class="col-md-12" style="overflow: auto;">
                    <table class="table table-hover" id="tb1">
                        <thead>
                            <th width="15">#</th>
                            <th width="180">Author</th>
                            <th>Judul</th>
                            <th width="100"></th>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($jurnal as $data) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['author'] ?></td>
                                <td><?= $data['judul'] ?></td>
                                <td><a href="<?= base_url('menu/info/').$data['id'] ?>">Abstrak</a> | <a href="<?= base_url().$data['file'] ?>">PDF</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

<?php include 'footer.php'; ?>

<script>
    $(document).ready( function () {
        $('#tb1').DataTable();
    } );
</script>