    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Pengalaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item">Pengalaman</li>
              <li class="breadcrumb-item active">Tambah Pengalaman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-warning card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Data Pengalaman</h5>
                    </div>
                    <form class="form-horizontal" method="POST" action="<?php echo site_url('Experience_c/addExperienceProses') ?>">
                        <div class="card-body">
                        <!-- Div ALert -->
                            <div id="alert-proses"></div>

                        <!-- Form-part input Nama Project -->
                            <div class="form-group row">
                                <label for="inputNameExp" class="col-sm-3 col-form-label">Nama Project<a class="float-right"> : </a></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control float-right" name="postNameExp" id="inputNameExp" placeholder="Project..." required>
                                </div>
                            </div>

                        <!-- Form-part input Periode -->
                            <div class="form-group row">
                                <label for="inputPeriodeExp" class="col-sm-3 col-form-label">Periode <a class="float-right"> : </a></label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" name="postPeriodeA">
                                </div>
                                <div class="col-sm-2"> Sampai </div>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" name="postPeriodeB">
                                </div>
                            </div>

                        <!-- Form-part input Status -->
                            <div class="form-group row">
                                <label for="inputStatusExp" class="col-sm-3 col-form-label">Status<a class="float-right"> : </a></label>
                                <div class="col-sm-8">
                                    <select class="form-control float-right" name="postStatusExp" id="inputStatusExp" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="F">Freelance</option>
                                        <option value="K">Kontrak</option>
                                    </select>
                                </div>
                            </div>

                        <!-- Form-part input Deskripsi -->
                            <div class="form-group row">
                                <label for="inputDeskripsiExp" class="col-sm-3 col-form-label">Deskripsi <a class="float-right"> : </a></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="3" name="postDeskripsiExp" id="inputDeskripsiExp" placeholder="Deskripsi...."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="reset" class="btn btn-secondary"><b> Reset </b></button>
                                <button type="submit" class="btn btn-success"><b> Simpan </b></button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->