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
                <h2 class="m-0 font-weight-bold text-primary" align="center">Tambah Data Kategori</h2>
            </div>
            <div class="card-body">
                <form name="form1" method="POST" enctype="multipart/form-data" action="<?php echo base_url('update-kategori') ?>">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">NAMA KATEGORI</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" name="kategori_id" value="<?= $kategori['kategori_id'] ?>">
                            <input type="text" name="kategori_nama" value="<?php echo $kategori['kategori_nama'] ?>" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ICON</label>
                        <div class="col-sm-10">
                            <center>
                                <img src="<?php echo base_url('img/kategori/' . $kategori['kategori_icon']) ?>" alt="<?= $kategori['kategori_icon'] ?>" style="width: 100px; height: 100px;">
                            </center>
                            <input type="hidden" class="form-control" name="kategori_icon_lama" value="<?= $kategori['kategori_icon'] ?>">
                            <input type="file" class="form-control" name="kategori_icon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12" align="center">
                            <button type="submit" class="btn btn-primary" name="tombol" value="SIMPAN"><i class="fa fa-save"> SIMPAN</i></button>
                            <button type="reset" class="btn btn-warning" name="reset" value="RESET"><i class="fa fa-refresh"> RESET</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>