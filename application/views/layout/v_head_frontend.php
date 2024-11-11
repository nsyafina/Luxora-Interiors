<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?> | Luxora Interiors</title>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="layout/style_frontend.css">
  <!-- CSS -->

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
  <!-- Tailwind -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Source Sans Pro -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome -->

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- DataTables -->

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- SweetAlert2 -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
  <!-- Theme style -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery -->

  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap 4 -->

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
  <!-- DataTables  & Plugins -->

  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE App -->

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>template/dist/js/demo.js"></script>
  <!-- AdminLTE for demo purposes -->
</head>
<style>
  @tailwind base;
  @tailwind components;
  @tailwind utilities;

  * {
    font-family: serif;
  }

  a:hover {
    color: white;
  }

  body {
    background: linear-gradient(139deg, rgba(246, 211, 77, 1) 0%, rgba(242, 222, 149, 1) 11%, rgba(238, 233, 225, 1) 32%, rgba(238, 233, 225, 1) 42%, rgba(49, 134, 123, 1) 100%);
  }

  .container-1 {
    padding: 10px 50px 100px;
  }

  .container-2 {
    padding: 10px 25px 100px;
  }

  /*----------------------- NAVBAR ------------------------*/
  .navbar {
    background: linear-gradient(270deg, rgba(11, 84, 75, 1) 0%, rgba(67, 153, 142, 1) 39%, rgba(67, 153, 142, 1) 59%, rgba(12, 73, 64, 1) 100%);
    background-size: cover;
    background-repeat: no-repeat;
    padding: 10px 80px;
    margin-top: 0px;
  }

  .logo {
    border-radius: 2px;
  }

  .brand {
    color: white;
    font-size: 30px;
    margin-right: 10.4rem;
  }

  .brand span {
    font-weight: bold;
    font-size: 36px;
  }

  .nav-menu {
    color: rgba(255, 255, 255, 0.5);
    font-size: 20px;
    padding-bottom: 7px;
    transition: 0.1s;
  }

  .nav-menu:hover {
    border-bottom: 1px solid white;
    color: white;
  }

  .nav-link {
    color: rgba(255, 255, 255, 0.5) !important;
    font-size: 20px !important;
    padding-bottom: 3px !important;
    transition: 0.1s !important;
  }

  .nav-link:hover {
    border-bottom: 1px solid white !important;
    color: white !important;
  }

  .active {
    color: white;
    border-bottom: 1px solid white;
    font-weight: bold;
  }

  .nav-profile-img {
    width: 40px;
  }

  .nav-btn-login {
    border: none;
    padding: 8px 16px 13px;
    width: 220px;
    border-radius: 6px;
    box-shadow: inset -4px -4px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    color: white;
    -webkit-text-stroke: 1px rgba(191, 191, 191, 0.409);
    font-weight: bold;
    font-size: 18px;
    background-size: 200%;
    background-image: linear-gradient(to left, #ff4500, #f9cd26, #ff4500);
    transition: 0.6s;
  }

  .nav-btn-login:hover {
    background-position: right;
  }


  /*----------------------- NAVBAR ------------------------*/

  /*----------------------- BANNER ------------------------*/
  .banner {
    background: linear-gradient(270deg, rgba(11, 84, 75, 1) 0%, rgba(67, 153, 142, 1) 39%, rgba(67, 153, 142, 1) 59%, rgba(12, 73, 64, 1) 100%);
  }

  .banner-img {
    background-size: 100%;
    animation: change 20s infinite ease-in-out;
  }

  @keyframes change {
    0% {
      background-image: url(img/banner/1.png);
    }

    20% {
      background-image: url(img/banner/2.png);
    }

    40% {
      background-image: url(img/banner/3.png);
    }

    60% {
      background-image: url(img/banner/1.png);
    }

    80% {
      background-image: url(img/banner/2.png);
    }

    100% {
      background-image: url(img/banner/3.png);
    }
  }

  .banner h2 {
    color: white;
    font-size: 33px;
  }

  .banner p {
    font-size: 19px;
  }

  .btn-banner {
    border: none;
    margin: 20px;
    padding: 13px 16px;
    width: 220px;
    border-radius: 6px;
    box-shadow: inset -4px -4px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    color: white;
    -webkit-text-stroke: 1px rgba(191, 191, 191, 0.409);
    font-weight: bold;
    font-size: 23px;
    background-size: 200%;
    background-image: linear-gradient(to left, #ff4500, #f9cd26, #ff4500);
    transition: 0.6s;
  }

  .btn-banner:hover {
    background-position: right;
  }

  /*----------------------- BANNER ------------------------*/

  /*----------------------- TITLE -------------------------*/
  .title-left {
    color: #0b544b;
    font-size: 35px;
    font-family: serif;
    font-weight: bold;
    margin-left: 60px;
    margin-top: 30px;
  }

  .title-left span {
    color: #c41212;
  }

  .des-title-left {
    margin-left: 61px;
    font-size: 17px;
    color: #707e7c;
  }

  /*----------------------- TITLE -------------------------*/

  /*----------------------- ABOUT -------------------------*/
  .title-about {
    color: #0b544b;
    font-size: 35px;
    font-weight: bold;
    margin-left: 6rem;
    margin-top: 33px;
  }

  .title-about span {
    color: #c41212;
  }

  .des-title-about {
    color: #707e7c;
    font-size: 17px;
    margin-left: 6.1rem;
    margin-top: 78px;
  }

  .about {
    background-color: rgba(182, 40, 40, 0.1);
  }

  .tagline-about {
    color: #0b544b;
  }

  .des-about {
    color: #0b544b;
  }

  /*----------------------- ABOUT -------------------------*/

  /*--------------------- KATEGORI ------------------------*/

  .title-kategori {
    color: #0b544b;
    font-size: 35px;
    font-family: serif;
    font-weight: bold;
    margin-left: 10px;
    margin-top: 30px;
  }

  .title-kategori span {
    color: #c41212;
  }

  .des-title-kategori {
    margin-left: 11px;
    font-size: 17px;
    color: #707e7c;
  }

  /* Container untuk banner dan produk */
  .main-container-kategori {
    display: flex;
    gap: 15px;
  }

  .container-3 {
    padding: 10px 30px 27rem 10px;
  }


  /* Banner vertikal */
  .banner-vertical-kategori {
    background-image: url('../../img/kategori/v-banner2.png');
    /* Sesuaikan path gambar */
    background-size: cover;
    background-position: center;
    width: 400px;
    /* Lebar banner */
    padding: 20px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    border-radius: 8px;
    margin: 20px 0 20px 20px;
  }

  .banner-title-kategori {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }

  .banner-text-kategori {
    font-size: 1rem;
    opacity: 0.85;
  }


  /* Styling item produk */
  .bg-grid {
    background: linear-gradient(180deg, rgba(11, 84, 75, 1) 0%, rgba(238, 233, 225, 1) 100%);
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
  }

  .bg-grid:hover {
    transform: scale(1.03);
  }

  /* Judul Produk */
  .title-produk {
    font-size: 21px;
    font-weight: 500;
    text-align: center;
    margin-bottom: 10px;
    color: white;
  }

  /* Gambar Produk */
  .img-produk {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
    transition: filter 0.3s ease;
  }

  .harga-produk {
    font-size: 20px;
    margin-bottom: 10px;
    color: #c41212;
  }

  .group:hover .img-produk {
    filter: grayscale(50%);
  }

  .btn-produk-cart {
    color: white;
    background: #0b544b;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    margin-left: 7px;
  }

  .btn-produk-cart:hover {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) !important;
  }

  .btn-produk-detail {
    color: #0b544b;
    background: #f9cd26;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    margin-left: 5px;
  }

  .btn-produk-detail:hover {
    color: #0b544b;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) !important;
  }


  /*--------------------- KATEGORI ------------------------*/

  /*---------------------- LOGIN --------------------------*/
  .btn-login {
    border: none;
    border-radius: 6px;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    padding-bottom: 10px;
    cursor: pointer;
    color: white;
    -webkit-text-stroke: 1px rgba(191, 191, 191, 0.409);
    font-weight: bold;
    font-size: 1.3rem;
    background-size: 200%;
    background-image: linear-gradient(to left, #ff4500, #f9cd26, #ff4500);
    transition: 0.6s;
  }

  .btn-login:hover {
    background-position: right;
  }

  /*---------------------- LOGIN --------------------------*/


  /*----------------------- CART --------------------------*/
  .card-cart {
    margin: 2rem;
    background: linear-gradient(180deg, rgba(11, 84, 75, 1) 0%, rgba(238, 233, 225, 1) 100%);
  }

  .title-cart {
    color: #f9cd26;
    font-size: 35px;
    font-family: serif;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
  }

  .title-cart span {
    color: #c41212;
  }

  .btn-cart-update {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    font-size: 1rem;
    color: white;
    background: #0b544b;
    padding: 10px 15px !important;
    margin-right: 10px;
  }

  .btn-cart-update:hover {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) !important;
  }

  .btn-cart-clear {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    font-size: 1rem;
    color: white;
    background: #c41212;
    padding: 10px 15px !important;
    margin-right: 10px;
    border-radius: 5px;
  }

  .btn-cart-clear:hover {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) !important;
  }

  .btn-cart-checkout {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    font-size: 1rem;
    color: #0b544b;
    background: #f9cd26;
    padding: 10px 15px !important;
  }

  .btn-cart-checkout:hover {
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) !important;
  }

  /*----------------------- CART --------------------------*/

  /*---------------------- FOOTER -------------------------*/
  .bg-footer {
    background: linear-gradient(270deg, rgba(11, 84, 75, 1) 0%, rgba(67, 153, 142, 1) 39%, rgba(67, 153, 142, 1) 59% 100%);
  }

  .img-footer {
    width: 300px;
  }

  /*---------------------- FOOTER -------------------------*/
</style>