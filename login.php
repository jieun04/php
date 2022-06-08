<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <title>로그인페이지</title>
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

<div class="container">
  <h2>Login</h2>
  <form class="form-inline" action="/login_proc.php" method='POST'>
    <label for="email2" class="mb-2 mr-sm-2">아이디:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Enter email" name="userid">
    <label for="pwd2" class="mb-2 mr-sm-2">비밀번호:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter password" name="userpw">
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="remember"> 아이디기억하기
      </label>
    </div>    
    <button type="submit" class="btn btn-primary mb-2">로그인</button>
  </form>
</div>

</body>
</html>
