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
                <h2 class="m-0 font-weight-bold text-primary" align="center">Tambah Data Posting</h2>
            </div>
            <div class="card-body">
                <form name="form1" method="POST" enctype="multipart/form-data" action="<?php echo base_url('add-posting') ?>">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">JUDUL POSTING</label>
                        <div class="col-sm-10">
                            <input type="text" name="posting_judul" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">LOKASI POSTING</label>
                        <div class="col-sm-10">
                            <input type="text" name="posting_lokasi" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">URL POSTING</label>
                        <div class="col-sm-10">
                            <input type="text" name="posting_url" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">COVER</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="posting_cover" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ISI POSTING</label>
                        <div class="col-sm-10">
                            <textarea name="posting_isi" class="ckeditor" id="ckeditor" cols="30" rows="10" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">KATEROGI</label>
                        <div class="col-sm-10">
                            <select name="kategori_id" class="form-control" required>
                                <option>Pilih Kategori</option>
                                <?php foreach ($kategori as $row) : ?>
                                    <option value="<?= $row['kategori_id'] ?>"><?= $row['kategori_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
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