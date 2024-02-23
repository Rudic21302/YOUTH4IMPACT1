<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>YOUTH4IMPACT</title>
    <!-- Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="../styles/styles.css">
    <!--Fonts -->
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../styles/fontawesome6/css/all.min.css">
    <!--PAGE SPECIFIC CUSTOM CSS -->
    <link rel="stylesheet" href="../styles/contact.css">
</head>
<body class="just-page">
        <!-- Navbar -->
        <nav id="navbar_top" class="navbar navbar-expand-lg" role="navigation">
          <a class="navbar-brand navbar-brand-logo " href=""><img src="../img/logo100x100.png"></img></a>
            <div class="collapse navbar-collapse justify-content-end" >
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link"  href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-project.html">YOUTH4IMPACT projekat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aiesec.html">AIESEC organizacija</a>
                </li>
                <li class="nav-item active current-page">
                  <a class="nav-link" href="">Kontakt</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">Tim 2</a>
                </li>
                <a id="mode-switch"><i class="fa-solid fa-moon light-dark-switch light-mode"></i></a>
              </ul>
              
            </div>
        </nav>
        <!-- Navbar -->
        <!--ADD SOCIALS IN HEAD -->
        <section class="socials">
          <div class="container">
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <ul class="list-group list-group-flush">
                  <li><a class="socials-list-item list-group-item" href=""><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                  <li><a class="socials-list-item list-group-item" href=""><i class="fa-brands fa-square-facebook"></i>Facebook</a></li>
                  <li><a class="socials-list-item list-group-item" href=""><i class="fa-brands fa-square-twitter"></i>Twitter</a></li>
                  <li><a class="socials-list-item list-group-item" href=""><i class="fa-solid fa-envelope"></i>info@youth4impact.com</a></li>
                  <li><a class="socials-list-item list-group-item" href="tel:+024 555 666"><i class="fa-solid fa-mobile-retro"></i>024 555 666</a></li>
                </ul>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </section>
        
        <section class="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-2"></div>

             
              <div class="col-sm-8">
                <?php
                  if (isset($_GET["m"]) && $_GET['m'] != "") {
                      echo "<h2>" . $_GET["m"] . "</h2>";
                  }
                ?>
                    
                <form method="post" action="contactLogic.php" class="contact-form-input">
                    <div class="form-group">
                      <label for="name">Ime</label>
                      <input class="form-control" type="text"  id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input class="form-control" type="text"  id="email">
                    </div>
                    <div class="form-group">
                      <label for="message">Poruka</label>
                      <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg contact-submit">Pošalji</button>
                  </form>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </section>
        

<!--JS for Navbar scroll -->
<script src="../scripts/navbar-scroll.js"></script>
<!--Light/Dark mode -->
<script src="../scripts/light-dark-mode.js"></script>
<!--Bootstrap JS CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>