<?php
session_start();
?>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/controller.php?mode=main">main</a>
    </li>                                                                                                                                                                                                      
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=hello">hello</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=serch">serch</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/controller.php?mode=slist">serch list</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/controller.php?mode=login">login</a>
    </li>
    <li class="nav-item">
      <?php 
        if(!isset($_SESSION['userid'])) {
          echo '<a class="nav-link" href="/controller.php?mode=login">로그인</a>';            
        } else {
          echo '<a class="nav-link" href="/controller.php?mode=logout">로그아웃</a>';            
        } 
      
      ?>
    </li>
    
  </ul>
</nav>