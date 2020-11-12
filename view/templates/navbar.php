<body>

  <!-- START NAV -->
  <nav class="navbar is-white">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="#">
          Bulma <?php echo ($_SESSION['level']) ?>
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="#">
            Home
          </a>
          <a class="navbar-item" href="#">
            Orders
          </a>
          <a class="navbar-item" action="logout.php" href="logout.php">
            Sign Out
          </a>
        </div>

      </div>
    </div>
  </nav>
  <!-- END NAV -->