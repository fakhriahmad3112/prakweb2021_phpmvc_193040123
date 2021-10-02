<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">PHP MVC</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
    </li>
  </ul>