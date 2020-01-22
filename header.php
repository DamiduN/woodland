  <?php session_start(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="home.php">Home
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact us</a>
          </li>
          <?php if (isset($_SESSION['email'])) { ?>
              <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="cart.php">cart</a>
              </li>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.php?logout=1">Log Out</a>
          </li>
        <?php }else{ ?>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login.php">Login</a>
          </li>
        <?php } ?>
        </ul>
      </div>
  </div>
</nav>