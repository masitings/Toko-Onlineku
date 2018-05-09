<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Glade - Responsive Admin Dashboard Template </title>
    <meta charset="utf-8">
    <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/view/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/assets/admin/css/icons.css">
    <link rel="stylesheet" href="/view/assets/admin/css/main.css">
    <link rel="stylesheet" href="/view/assets/admin/css/responsive.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=dz7810a2fqvvl22kdrxq8qpum7fbofb62miwhr830gt0ksa6"></script>
    <script type="text/javascript">
      tinymce.init({
      selector: 'textarea',
      height: 200,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
      ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
    });
    </script>
</head>
<body>
<header class="simple-normal">
     <div class="top-bar">
          <div class="logo">
               <a href="index.html" title=""><i class="fa fa-bullseye"></i> Glade</a>
          </div>
          <div class="menu-options"><span class="menu-action"><i></i></span></div>
          <div class="top-bar-quick-sec">
               <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt"></i></span>
               <div class="name-area">
                    <a href="javascript:void(0)" title=""><img src="http://placehold.it/100x100" alt="" /> <strong>John Doe</strong></a>
               </div>
          </div>
     </div><!-- Top Bar -->
     <div class="side-menu-sec" id="header-scroll">
          <div class="quick-report-side">
               <span>TODAY REPORT</span>
               <ul>
                    <li><div><strong>456</strong><span>Sales</span></div></li>
                    <li><div><strong>115</strong><span>Orders</span></div></li>
                    <li><div><strong>$120</strong><span>Earn</span></div></li>
               </ul>
          </div>
          <div class="side-menus">
               <span>MAIN LINKS</span>
               <nav>
                    <ul class="parent-menu">
                         <li>
                              <a title="" href="/admin/dashboard"><i class="ti-desktop"></i><span>Dashboard</span></a>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-rocket"></i><span>Produk</span></a>
                              <ul>
                                   <li><a href="/admin/list">List Produk</a></li>
                                   <li><a href="/admin/tambah">Tambah Produk</a></li>
                                   <li><a href="/admin/kategori">Kategori Produk</a></li>
                              </ul>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-money"></i><span>Penjualan</span></a>
                              <ul>
                                   <li><a href="/admin/list">Invoice</a></li>
                                   <li><a href="/admin/tambah">Order</a></li>
                                   <li><a href="/admin/kategori">Konfirmasi</a></li>
                              </ul>
                         </li>
                         <li>
                              <a href="widgets.html" title=""><i class="ti-bolt"></i><span>Website Setting</span></a>
                         </li>
                         <li>
                              <a href="/logout"><i class="ti-lock"></i><span> Logout</span></a>
                         </li>
                    </ul>
               </nav>
                <span class="footer-line">2017 Copyright Glade by <a title="" href="http://themeforest.net/user/bitlers/portfolio?ref=bitlers">bitlers</a></span>
          </div>
     </div>
</header>