<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Luxora Interiors</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">


  <!-- jQuery -->
  <script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>template/dist/js/demo.js"></script>
</head>
<style>
  * {
    font-family: serif;
  }

  .container-1 {
    padding: 10px 50px 100px;
  }

  .container-2 {
    padding: 10px 25px 100px;
  }

  /*----------------------- SIDEBAR ------------------------*/
  .sidebar-custom {
    background: linear-gradient(180deg, rgba(13, 106, 94, 1) 0%, rgba(67, 153, 142, 1) 47%, rgba(67, 153, 142, 1) 56%, rgba(11, 84, 75, 1) 100%);
  }

  .logo-brand {
    opacity: 1;
    width: 13rem;
    margin: 0 10px 0 10px;
    margin-bottom: 10px;
  }

  .sidebar .nav-link.active {
    background-color: rgba(255, 255, 255, 0.1) !important;
    color: white !important;
  }

  .sidebar .nav-treeview .nav-link.active {
    background-color: rgba(255, 255, 255, 0.1) !important;
    color: white !important;
  }

  /*----------------------- SIDEBAR ------------------------*/
</style>