<!-- Top Left Logo -->
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="assets/images/XU_LOGO.png" alt="Logo" class="w-100" size="10%">
      </div>
      <div class="col-md-9">

      </div>
    </div>
  </div>
</div>
<!-- Navbar Top Right -->
<nav class="navbar navbar-expand-lg bg-primary shadow">
  <div class="container">
    <a class="navbar-brand d=block d-sm-none d-md-none" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="color:white">About Us</a>
        </li>

        <?php if(isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li>
              <form action="allcode.php" method="post">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>

        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link" href="login.php"style="color:white">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"style="color:white">Register</a>
        </li>

        <?php endif; ?>
      </ul>
      
    </div>
    
  </div>
</nav>

<!-- Nav Center -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>