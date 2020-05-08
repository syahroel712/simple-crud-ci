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
<?php }
if ($this->session->flashdata('error') == TRUE) {
  $error = $this->session->flashdata('error');
?>
  <script type="text/javascript">
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '<?= $error ?>'
    })
  </script>
<?php
}
if ($this->session->flashdata('local') == TRUE) {
  $local = $this->session->flashdata('local');
?>
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
  <script type="text/javascript">
    Swal.fire(
      'PERINGATAN!!',
      '<?= $local ?>',
      'question'
    )
  </script>
<?php } ?>

<div class="row">
  <!-- Content Column -->
  <div class="col-lg-12 mb-12">
    <!-- Approach -->
    <div class="card shadow mb-12">
      <div class="card-header py-11">
        <h2 class="m-0 font-weight-bold text-primary" align="center">Welcome To SB ADMIN</h2>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>