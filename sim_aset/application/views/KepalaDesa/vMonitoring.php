<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('KepalaDesa/cDashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Monitoring Asset</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Asset</th>
                                <th>Nama Barang</th>
                                <th>Lokasi</th>
                                <th>Kondisi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($monitoring as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->kode_asset ?></td>
                                    <td><?= $value->nama_barang ?></td>
                                    <td><?= $value->nama_lokasi ?></td>
                                    <td>
                                        <?php if ($value->kondisi == 'Baik') { ?>
                                            <span class="badge badge-success">Baik</span>
                                        <?php } elseif ($value->kondisi == 'Rusak Ringan') { ?>
                                            <span class="badge badge-warning">Rusak Ringan</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Rusak Berat</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?= $value->status_asset ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('KepalaDesa/cMonitoring/detail/' . $value->id_monitoring) ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>

<!-- DataTables -->
<script>
    $(function() {
        $("#example2").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
