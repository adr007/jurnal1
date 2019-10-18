<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Jurnal
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li> -->
        <!-- <li class="active">Here</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <?php if ($this->session->flashdata('notif')) {
              echo $this->session->flashdata('notif');
            } ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-tasks"></i> Edit Jurnal</h3>
              </div>
              <form role="form" method="POST" action="<?= base_url('admin/edit_jurnal') ?>" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" value="<?= $jurnal['judul'] ?>" name="judul" required>
                  </div>

                  <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" value="<?= $jurnal['author'] ?>" name="author" required>
                  </div>

                  <input type="hidden" name="idx" value="<?= $jurnal['id'] ?>">

                  <div class="form-group">
                    <label>Abstrak</label>
                    <textarea id="editor1" name="abstrak" rows="10" cols="80" required><?= $jurnal['abstrak'] ?></textarea>
                  </div>

                 <div class="row">
                   <div class="col-md-1">
                      <a href="<?= base_url().$jurnal['file'] ?>">
                        <img src="<?= base_url('komponen/admin/dist/') ?>img/pdf-ico.jpg" width="100%" class="img-thumbnail">
                      </a>
                   </div>
                   <div class="col-md-11">
                      <div class="form-group">
                        <label>File Jurnal</label>
                        <input type="file" name="dok">
                        <p class="text-danger">Isi jika file akan diganti.</p>
                      </div>
                   </div>
                 </div>
                
                </div>
                <!-- /.box-body -->

                <div class="box-footer" style="text-align: right;">
                  <a href="<?= base_url('admin/jurnal') ?>" class="btn btn-danger"><i class="fa fa-close"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
<!-- CK Editor -->
<script src="<?= base_url('komponen/admin/bower_components/') ?>ckeditor/ckeditor.js"></script>
<script>
  $('#mn2').addClass('active');
  CKEDITOR.replace('editor1')
</script>