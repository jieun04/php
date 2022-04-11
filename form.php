<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">my project</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">main</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/hello.php">hello word</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">main</a>
        <a class="dropdown-item" href="/login.php">Login</a>
        <a class="dropdown-item" href="/form.php">serch</a>
      </div>
    </li>
  </ul>
</nav>
<br>

<div class="container">
  <h2>검색어</h2>
  <form class="form-inline" action="/action.php" method="get">
    <label for="keyword">검색어:</label>
    <input type="keyword" class="form-control" id="keyword" placeholder="검색하기" name="keyword">
    <button type="submit" class="btn btn-primary">검색</button>
  </form>
  </div>


</body>
</html>
