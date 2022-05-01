<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>헬로 페이지</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h3>my site</h3>
</div>

<?php
include 'menu.php';
?>

<br>
  
<div class="내 사이트">
  <h3>사이트</h3>
  <?php
  for($i=0; $i<=100; $i=$i+10)
  {
      echo "hello world <br />";
  }
  ?>
</div>

</body>
</html>

