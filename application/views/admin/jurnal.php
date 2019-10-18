<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jurnal
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
       <!--  <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          
          <a href="<?= base_url('admin/tambah') ?>" class="btn btn-info" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Tambah Jurnal</a>

          <?php if ($this->session->flashdata('notif')) {
            echo $this->session->flashdata('notif');
          } ?>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tasks"></i> Data Jurnal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead class="bg-primary">
                    <th width="15">#</th>
                    <th width="180">Author</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th width="150" class="text-center">Menu</th>
                </thead>
                <tbody>
                  <?= $no = 1; foreach ($jurnal as $data) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['author'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['tgl'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url().$data['file'] ?>" class="btn btn-success"><i class="fa fa-download"></i> </a>
                            <a href="<?= base_url('admin/info/').$data['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                            <a href="<?= base_url('admin/hapus/').$data['id'] ?>" onclick="return confirm('Apakah jurnal akan dihapus?')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
               </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
<!-- DataTables -->
<script src="<?= base_url('komponen/admin/bower_components/') ?>datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('komponen/admin/bower_components/') ?>datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $('#mn2').addClass('active');
  $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
</script>