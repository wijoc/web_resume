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
              <li class="breadcrumb-item active">List Pengalaman</li>
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
                        <h5 class="card-title">Daftar Pengalaman</h5>
                        <a href="<?php echo site_url('Experience_c/pageAddExperience') ?>" class="float-right btn btn-xs btn-success"><b> Tambah data baru</b></a>
                    </div>
                    <div class="card-body table-responsive">
                        <div id="alert-proses"></div>
                        <table class="table table-bordered default-datatable">
                            <thead class="text-center">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                              <?php $no = 1; foreach($dataExp as $showExp): ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $showExp['exp_name'] ?></td>
                                    <td class="text-center"><?php echo $showExp['exp_periode_begin'] ?> - <?php echo $showExp['exp_periode_end'] ?></td>
                                    <td class="text-center"><?php echo ($showExp['exp_status'] == 'F')? 'Freelance' : 'Kontrak' ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Experience_c/pageEditExperience/').urlencode(base64_encode($showExp['exp_id'])) ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo site_url('Experience_c/deleteExperienceProses/').urlencode(base64_encode($showExp['exp_id'])) ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                            <tfoot class="text-center">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tfoot>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->