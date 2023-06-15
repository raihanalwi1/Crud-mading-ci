<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <title>Mading Website</title>
  <link rel="stylesheet" href="<?= base_url('assets/style.css');?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="path-to-logo.png" alt="Logo" class="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
            <div class="navbar-nav">
              <form class="form-inline my-2 my-lg-0 mr-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
              </form>
              <a class="nav-link" href="<?= base_url('index.php/auth');?>">
                <i class="fas fa-user-circle"><img src="<?= base_url('assets/icon.jpg');?>" alt="" style="width: 25px; height: 30px;"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
      