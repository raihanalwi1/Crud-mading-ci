<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_admin.css');?>">
  </head>
  <body>
    <div class="content">
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                
            <img src="path-to-logo.png" alt="Logo" class="logo">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul>
                        <li><a href="<?= base_url('index.php/admin');?>">Dashboard</a></li>
                        <li><a href="<?= base_url('index.php/artikel');?>">Artikel</a></li>
                        <li><a href="<?= base_url('index.php/admin/komentar')?>">Komentar</a></li>
                        <li><a href="<?= base_url('index.php/admin/laporan')?>">Laporan</a></li>
                    </ul>
            </div>
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            <i class="fas fa-user-circle"><img src="<?= base_url('assets/icon.jpg');?>" alt="" style="width: 25px; height: 30px;"></i>
            </button>
            <ul class="dropdown-menu">
                <!-- <li><a class="dropdown-item" href="#"><?= $namauser;?></a></li> -->
                <li><a class="dropdown-item" href="<?= base_url('index.php/auth/logout');?>">Logout</a></li>
            </ul>
            </div>
            
            </a>
    </div>
        </nav>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
    <title><?= $title;?></title>
 
</head>
<body>
<div class="sidebar">
        <h1>Admin Dashboard</h1>
        <ul>
            <li><a href="<?= base_url('index.php/admin');?>">Dashboard</a></li>
            <li><a href="<?= base_url('index.php/artikel');?>">Artikel</a></li>
            <li><a href="#">Komentar</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?= base_url('index.php/auth/logout');?>">Logout</a></li>
        </ul>
</div>
<div class="content">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>

     -->
