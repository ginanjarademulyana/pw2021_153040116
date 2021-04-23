<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Ginanjar Ade Mulyana</title>
</head>

<body>
  <!-- ***** NAV ***** -->
  <nav>
    <div class="nav-left">
      <ul>
        <a href="index.php">
          <li class="nav_js">Home</li>
        </a>
        <a href="about.php">
          <li class="active nav_js">About</li>
        </a>
        <a href="contact.php">
          <li class="nav_js">Contact</li>
        </a>
        <li class="nav_js"><i class="fas fa-search"></i></li>
      </ul>
    </div>
    <div class="nav-right nav_js">
    </div>
  </nav>

  <!-- ***** Side Bar ****** -->
  <div class="sideBar">
    <div class="logo sideBar_js">
      <a href=""><img src="assets/img/logo.png" alt="" /></a>
    </div>

    <div class="pagination sideBar_js">
      <a href="index.php"><span></span></a>
      <span class="active"></span>
      <a href="contact.php"><span></span></a>
    </div>

    <div class="scroll sideBar_js">
      <p>SCROLL</p>
      <div class="svg">
        <img src="assets/svg/down-arrow.svg" alt="" />
      </div>
    </div>
  </div>

  <!-- ***** Contents ***** -->
  <div class="contents">
    <div class="contents_wrapper">
      <!-- Title -->
      <div class="title">
        <h1 class="content1">Ginanjar Ade Mulyana</h1>
        <h1 class="content1">Teknik Informatika</h1>
        <h1 class="content1">Universitas Pasundan Bandung</h1>
      </div>

      <!-- Description -->
      <div class="description content1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
        error, explicabo non similique labore sapiente numquam consequatur
        molestiae. Eaque, provident sit doloribus beatae nulla inventore!
      </div>

      <!-- Button -->
      <button class="content1">
        Learn More
        <div class="svg">
          <img src="assets/svg/down-arrow.svg" alt="" />
        </div>
      </button>

      <!-- Features -->
      <div class="features">
        <div class="features_content content1">
          <h3>Features</h3>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="features_content content1">
          <h3>Albums</h3>
          <p>Lorem ipsum dolor sit</p>
        </div>
      </div>
    </div>

    <!-- Social ICONS -->
    <div class="social">
      <i class="fab fa-facebook-f i_js"><span>facebook</span></i>
      <i class="fab fa-instagram i_js"><span>instagram</span></i>
      <i class="fab fa-twitter i_js"><span>twitter</span></i>
      <i class="fab fa-youtube i_js"><span>youtube</span></i>
      <i class="fab fa-discord i_js"><span>discord</span></i>
    </div>
  </div>

  <!-- ***** BG IMAGE ***** -->
  <div class="image">
    <img src="assets/img/cover.png" alt="" />
  </div>

  <!-- ***** OverLay ****** -->
  <div class="black"></div>
  <div class="red"></div>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>