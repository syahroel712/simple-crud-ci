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
                <h2 class="m-0 font-weight-bold text-primary" align="center">Tambah Data Member</h2>
            </div>
            <div class="card-body">
                <form name="form1" method="POST" enctype="multipart/form-data" action="<?php echo base_url('update-member') ?>">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">NAMA MEMBER</label>
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="member_id" value="<?= $member['member_id'] ?>">
                            <input type="text" name="member_nama" required class="form-control" value="<?= $member['member_nama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">EMAIL MEMBER</label>
                        <div class="col-sm-9">
                            <input type="email" name="member_email" required class="form-control" value="<?= $member['member_email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">PASSWORD MEMBER</label>
                        <div class="col-sm-9">
                            <input type="password" name="member_password" class="form-control">
                            <span><i style="color:red;font-size: 12px;">*Abaikan jika tidak ingin ganti password</i></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">NIK MEMBER</label>
                        <div class="col-sm-9">
                            <input type="number" name="member_nik" required class="form-control" value="<?= $member['member_nik'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">GENDER MEMBER</label>
                        <div class="col-sm-9">
                            <?php $gender = $member['member_gender']; ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="member_gender" id="optionsRadios1" class="form-check-input" value="Pria" <?php echo ($gender == 'Pria') ? "checked" : "" ?>>Pria
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="member_gender" id="optionsRadios2" class="form-check-input" value="Wanita" <?php echo ($gender == 'Wanita') ? "checked" : "" ?>>Wanita
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">NO TELPON MEMBER</label>
                        <div class="col-sm-9">
                            <input type="number" name="member_notelp" required class="form-control" value="<?= $member['member_notelp'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">BIO MEMBER</label>
                        <div class="col-sm-9">
                            <input type="text" name="member_bio" required class="form-control" value="<?= $member['member_bio'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">ALAMAT MEMBER</label>
                        <div class="col-sm-9">
                            <input type="text" name="member_alamat" required class="form-control" value="<?= $member['member_alamat'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">KOORDINAT MEMBER</label>
                        <div class="col-sm-9">
                            <input type="text" name="member_koordinat" required class="form-control" value="<?= $member['member_koordinat'] ?>">
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