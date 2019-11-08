<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tambah Jurnal
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
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-tasks"></i> Tambah Jurnal</h3>
              </div>
              <form role="form" method="POST" action="<?= base_url('admin/add_jurnal') ?>" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" required>
                  </div>

                  <div class="form-group">
                    <label>Metode</label>
                    <select class="form-control" name="metode" required>
                      <option value="">-- Pilih Metode --</option>
                      <?php 
                          foreach ($metode as $data) {
                            echo "<option value='$data[id]'>$data[metode]</option>";
                          }
                       ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Author 1</label>
                    <input type="text" class="form-control" name="author" required>
                  </div>

                  <div class="form-group">
                    <label>Author 2</label>
                    <input type="text" class="form-control" name="author2" required>
                  </div>

                  <div class="form-group">
                    <label>Author 3</label>
                    <input type="text" class="form-control" name="author3" required>
                  </div>

                  <div class="form-group">
                    <label>Abstrak</label>
                    <textarea id="editor1" name="abstrak" rows="10" cols="80" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label>File Jurnal</label>
                    <input type="file" name="dok" required>
                    <p class="help-block">Harap Upload File *PDF</p>
                  </div>
                
                </div>
                <!-- /.box-body -->

                <div class="box-footer" style="text-align: right;">
                  <a href="<?= base_url('admin/jurnal') ?>" onclick="return confirm('Batal upload jurnal?')" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Submit</button>
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