<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Nining Parwati</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/pwl_vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>assets/pwl_vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/pwl_css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Nining Parwati</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <a class="nav-link" href="<?php base_url()?>index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>foto">Foto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>komen">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://spacenews.com/wp-content/uploads/2018/01/worldview-stratollite-oct17.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Give me a comment</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <form id="formKomentar" action="<?php echo base_url()?>/c_PWL1/komentar" method="POST">
      <div class="row">
        Masukan komentar : 
        <textarea class="formKomentar" name="komentar" rows="10" placeholder="Komentar"></textarea>
      </div>
      <div class="row">
        <input type="submit" name="submit" value="SUBMIT">
      </div>
    </form>
    </div>

    <?php if(isset($input)) 
        echo $input;
    ?>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/pwl_vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/pwl_vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url()?>assets/pwl_js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url()?>assets/pwl_js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/pwl_js/clean-blog.min.js"></script>

  </body>

</html>
