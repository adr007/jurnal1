<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaturan
      </h1>
      <ol class="breadcrumb">
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <?php if ($this->session->flashdata('notif')) {
            echo $this->session->flashdata('notif');
          } ?>
          <div class="box box-info" style="margin-top: 10px;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-wrench"></i> Pengaturan</h3>
            </div>
            <form class="form-horizontal" method="POST" action="<?= base_url('admin/ubah_pass') ?>">
              <div class="box-body">
               
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password Lama</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="pl">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password Baru</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pb">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
<script>
  $('#mn3').addClass('active');
</script>