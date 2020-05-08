<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
if ($this->session->flashdata('pesan') == TRUE) {
    $pesan = $this->session->flashdata('pesan');
?>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <script type="text/javascript">
        Swal.fire(
            'Berhasil!',
            '<?= $pesan ?>',
            'success'
        )
    </script>
<?php } ?>

<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-12">
        <!-- Approach -->
        <div class="card shadow mb-12">
            <div class="card-header py-11">
                <h2 class="m-0 font-weight-bold text-primary" align="center">Data Aduan</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="<?php echo base_url('tambah-aduan/') ?>" class="btn btn-sm btn-primary mb-4"> <i class="fas fa-plus"> Tambah Data</i> </a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Isi Aduan</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($aduan as $no => $row) : ?>
                                <tr>
                                    <td><?php echo $no + 1; ?></td>
                                    <td><?php echo $row['aduan_isi']; ?></td>
                                    <td>
                                        <img src="<?php echo base_url('img/aduan/' . $row['aduan_foto']) ?>" alt="<?= $row['aduan_foto'] ?>" style="width: 100px; height: 100px;">
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('edit-aduan/' . $row['aduan_id']) ?>" class="btn btn-sm btn-success"> <i class="fas fa-edit"></i> </a>
                                        <a href="<?php echo base_url('hapus-aduan/' . $row['aduan_id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>