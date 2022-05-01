<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>검색페이지</title>
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
  
<body>

<div class="container">
  <h2>검색어</h2>
  <form class="form-inline" action="/action_page.php" method="POST">
    <label for="keyword">검색어:</label>
    <input type="keyword" class="form-control" id="keyword" placeholder="검색하기" name="keyword">
    <button type="submit" class="btn btn-primary">검색</button>
  </form>
</div>
</body>
</html>
