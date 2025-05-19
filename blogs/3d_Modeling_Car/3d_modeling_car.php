<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
   <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D0QKYRT3F8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-D0QKYRT3F8');
    </script>
     <title>Car modeling in blender</title>
     <link rel="icon" href="../../icon.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tesla Model X Blueprints, Learn how to 3d model a car in a free software called blender.">
    <meta name="author" content="REDMOON">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://redmoon3d.com/blogs/3d_modeling_car.php" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="3d Modeling Car in Blender - Beginner's Modeling Guide">
    <meta property="og:description" content="Master 3d Modeling a car in blender from scratch.">
    <meta property="og:image" content="https://redmoon3d.com/blogs/images/tesla_blueprint.webp">
    <meta property="og:url" content="https://redmoon3d.com/blogs/3d_modeling_car.php">
    <meta property="og:type" content="article">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Master 3d Modeling a car in blender from scratch.">
    <meta name="twitter:description" content="Learn how to 3d model a car in a free software called blender. It is free.">
    <meta name="twitter:image" content="https://redmoon3d.com/blogs/3d_modeling_car.php">

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=planet" />
  <style>
    .card {
      background-color: #171717;
      color: white;
      border-radius: 15px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
      
    }
    .card-img-top {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    
  </style>
  </head>

  <body class="bg-dark">
    <header>      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-navbar border-bottom border-secondary fixed-top navbar-top">
        <div class="container-fluid px-lg-5 px-sm-0 d-flex justify-content-between align-items-center">          
          <div class="d-flex align-items-center px-lg-5 px-md-5 px-sm-2">         
            <span class="material-symbols-outlined fs-1 text-red pe-2">
              planet
              </span>
            <span class="text-red fs-3 d-none d-lg-inline fw-bold">REDMOON</span>
          </div>
          <div class="search-container position-relative mx-auto w-75">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6">
                  <div class="search-container position-relative">
                    <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-white fs-4 "></i>
                    <input type="text" id="searchInput" style="height: auto !important; max-width: 100% !important" class="form-control search-input bg-secondary border-0 text-white ps-5 py-2 search-box shadow-lg" placeholder="Search 3d Models, Tutorial, HDRI’s etx.">
                  </div>
                </div>
              </div>
            </div>            
          </div>

           <div class="d-flex align-items-center">
              <?php if(isset($_SESSION['user_id'])):?>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="max-width: 150px !important;" href="../../Log_in_system/dashboard.php">Dashboard</a>';
                <a href="Log_in_system/dashboard.php" ><i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i></a>';
              <?php elseif(!isset($_SESSION['user_id'])): ?>                
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-2" style="width: 130px !important;" href="../Log_in_system/sign_up_data.php">Sign Up</a>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="width: 120px !important;" href="../Log_in_system/log_in_data.php">Log In</a>
                <a href="Log_in_system/sign_up_data.php" ><i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i></a>
              <?php endif; ?>
            </div>
        </div>
      </nav>
      <!-- Bottom Navbar (Navigation links) -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 shadow fixed-top navbar-links">
        <div class="container-fluid px-lg-5 px-sm-0 px-md-5">
          <button class="navbar-toggler border-0" type="button" id="navbarToggler" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-lg-none d-flex gap-2 me-auto px-2" id="collapseLinks">
            <a class="nav-link text-white p-0" href="../../index.php">Home</a>
            <a class="nav-link text-white p-0" href="../../models.php">Addons</a>
            <a class="nav-link text-white p-0" href="../../materials.php">Materials</a>
          </div>
          <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-lg-5 px-md-5 px-sm-2">
              <!-- <li class="nav-item"><a class="nav-link" href="#">New</a></li>                             -->
              <li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../../models.php">Addons</a></li>
              <li class="nav-item"><a class="nav-link" href="../../materials.php">Materials</a></li>
              <li class="nav-item"><a class="nav-link" href="../../tutorial.html">Tutorials</a></li>            
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="text-white">
      <div class="container px-lg-1 pt-5">
        <div class="row px-lg-5">
          <div class="col-12">
            <h1 class="text-white fw-bold" style="height: auto !important; max-width: 100% !important">
              3d Modeling Car in blender.
            </h1>
          </div>
        </div>
      </div>
      <div class="container text-center mb-5 px-5">
        <div class="row mt-4">
          <div class="col-lg-6 col-md-6 col-sm-12 bg-dark-2 p-5">
            <div class="ratio ratio-16x9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/eodl3VXD9Sw?si=TMnAjT9CcGXbXpGT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 bg-dark-2 d-flex flex-column justify-content-center align-items-center text-center p-4">
              <h2 class="text-white mb-3">Tesla Blueprints</h2>

              <!-- Thumbnail version of the image -->
              <img class="img-fluid mb-3" style="max-width: 50%; height: auto;" src="images/tesla_blueprints.webp" alt="Tesla Blueprints">

              <!-- Download button linking to full-resolution image -->
              <?php if(isset($_SESSION['user_id'])):?>
                <a href="images/tesla_blueprints.png" download class="btn btn-primary">
                    Download Full Resolution Blueprints
                </a>
              <?php elseif(!isset($_SESSION['user_id'])): ?>
                <a href="../../Log_in_system/sign_up_data.php?redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>" class="btn btn-primary">
                    Download Full Resolution Blueprintss
                </a>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="text-center mt-5 pb-5">
        <a href="https://www.blender.org/download/" target="_blank" class="btn btn-primary btn-lg">
          Start Using Blender Now
        </a>
      </div>

      <hr class="w-50 mx-auto"/>
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- <h1>Comments</h1> -->
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <?php /* include '../../comments/comments.php'; */ ?>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

