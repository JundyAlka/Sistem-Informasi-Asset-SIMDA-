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
                    <h3 class="card-title">Daftar Penyusutan Asset</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example3" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Asset</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Penyusutan</th>
                                <th>Nilai Penyusutan</th>
                                <th>Nilai Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penyusutan as $key => $value) { 
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->kode_asset ?></td>
                                    <td><?= $value->nama_barang ?></td>
                                    <td><?= date('d-m-Y', strtotime($value->tgl_penyusutan)) ?></td>
                                    <td>Rp <?= isset($value->nilai_penyusutan) ? number_format($value->nilai_penyusutan, 0, ',', '.') : '0' ?></td>
                                    <td>Rp <?= isset($value->nilai_buku) ? number_format($value->nilai_buku, 0, ',', '.') : '0' ?></td>
                                    <td>
                                        <a href="<?= base_url('KepalaDesa/cPenyusutan/detail/' . $value->id_penyusutan) ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Detail
                                        </a>
                                        <a href="<?= base_url('KepalaDesa/cPenyusutan/cetak/' . $value->id_penyusutan) ?>" class="btn btn-sm btn-success" target="_blank">
                                            <i class="fas fa-print"></i> Cetak
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
        $("#example3").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[3, "desc"]],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
            "dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
