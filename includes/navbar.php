<div class="container">
  <!-- Navbar Top Right -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand d=block d-sm-none d-md-none" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar Links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active customfont" aria-current="page" href="index.php" style="color:blue">Home</a>
        </li>
        <li class="nav-item text-center customfont">
          <a class="nav-link" href="#" style="color:blue; white-space:nowrap">About Us</a>
        </li>

        <?php if(isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown customfont">
          <a class="nav-link dropdown-toggle" style="color:blue" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          <ul class="dropdown-menu customfont" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item customfont" href="#">My Profile</a></li>
            <li>
              <form action="allcode.php" method="post">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>

        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link customfont" href="login.php" style="color:blue">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link customfont" href="register.php" style="color:blue">Register</a>
        </li>

        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<!-- XU Logo -->
  <a class="navbar-brand" href="index.php">
    <img src="assets/images/XU_LOGO.png" alt="Logo" style="width: 20%;">
  </a>
  
</div>

<div class="container">
  
  
  <!-- Search Bar -->
  <form class="d-flex justify-content-center">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </form>
  
</div>



<!-- Nav Center -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">PROJECTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">ARTICLES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">REGISTRAR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">GALLERY</a>
  </li>
</ul>
