<title>Perpus | Home</title>
<?php 
    include 'session_check.php';
    include 'template.php'; 
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Selamat datang di perpustakaan!</h1>
    <p class="lead">Halo <?= $ses_nama ?></p>
  </div>
</div>