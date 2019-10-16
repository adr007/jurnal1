 <?php include 'header.php'; ?> 
     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Jurnal</h2>
        <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#" class="active">Jurnal</a></li>
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
                            <tr>
                                <td>1</td>
                                <td>Soleh</td>
                                <td>IMPLEMENTASI ALGORITMA RC4 STREAM CIPHER SEBAGAI METODE OBFUSCATION STRING PADA DATABASE MySQL</td>
                                <td><a href="info.php">Abstrak</a> | <a href="">PDF</a></td>
                            </tr>
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