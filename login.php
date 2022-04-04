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
  <h2>Login</h2>
  <form class="form-inline" action="/action_page.php">
    <label for="email2" class="mb-2 mr-sm-2">Email:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Enter email" name="email">
    <label for="pwd2" class="mb-2 mr-sm-2">Password:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter password" name="pswd">
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="remember"> Remember me
      </label>
    </div>    
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
</div>

</body>
</html>
