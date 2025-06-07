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
    <title>REDMOON</title>
    <link rel="icon" href="icon.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=planet" />
  </head>

  <body>
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
                      <input type="text" id="searchInput" class="form-control search-input bg-secondary border-0 text-white ps-5 py-2 search-box shadow-lg" placeholder="Search 3d Models, Tutorial, HDRI’s etx.">
                    </div>                                       
                  </div>
                </div>
              </div>            
            </div>



            <div class="d-flex align-items-center">
              <?php
                  // echo "<h1 style='font-size: 100px'>" . $_SESSION['email'] . "</h1>";
                  // echo $_SESSION['name'];
              ?>
              <?php if(isset($_SESSION['user_id'])):?>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="max-width: 150px !important;" href="Log_in_system/dashboard.php">Dashboard</a>
                <a href="Log_in_system/dashboard.php" ><i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i></a>
              <?php elseif(!isset($_SESSION['user_id'])): ?>                
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-2" style="width: 130px !important;" href="Log_in_system/sign_up_data.php">Sign Up</a>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="width: 120px !important;" href="Log_in_system/log_in_data.php">Log In</a>
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
              <a class="nav-link text-white p-0" href="index.php">Home</a>
              <a class="nav-link text-white p-0" href="models.php">Models</a>
              <a class="nav-link text-white p-0" href="materials.php">Materials</a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-lg-5 px-md-5 px-sm-2">
                <!-- <li class="nav-item"><a class="nav-link" href="#">New</a></li>                             -->
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="models.php">Models</a></li>
                <li class="nav-item"><a class="nav-link" href="materials.php">Materials</a></li>
                <li class="nav-item"><a class="nav-link" href="tutorial.html">Tutorials</a></li>            
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <main>
    <div class="container-fluid py-3 px-lg-5 bg-dark-2 text-white">
      <div class="row align-items-center px-lg-2">
        <div class="col-lg-4 col-md-12 col-sm-12 text-center text-md-start py-5 mx-auto">
          <h1 class="display-1 fw-bold gradient-text">Everything 3D You Need</h1>
          <p class="lead">Shape Your World with Blender Tools, Textures & Tips — Everything You Need to Create, Learn, and Elevate Your 3D Art.</p>
          <a href="tutorial.html" class="btn btn-red btn-lg">Start Now!</a>
          <a href="Log_in_system/log_in_data.php" class="btn btn-red-outline btn-lg">Log In</a>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 text-center mx-auto">
          <img src="images/vision_1.webp" class="img-fluid rounded-img shadow" alt="3D Art Example">
        </div>
      </div>
    </div>
    
    <div class="container-fluid p-lg-5 py-5 bg-dark-3">
      <div class="container-fluid p-lg-5">
        <div class="row g-4">
          <div class="col-lg-4 col-md-12 col-sm-12 text-center text-white">
              <h1 class="mb-3 fw-bold display-3 gradient-text">Addons</h1>
              <p class="text-secondary mb-4 fs-5">Explore our latest addon on buildings</p>
              <div class="image-shadow">
                <img src="images/building.webp" class="img-fluid w-100" alt="Explore our latest addon on buildings" loading="lazy">
              </div>              
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 text-center text-white">
              <h1 class="mb-3 fw-bold display-3 gradient-text">Materials</h1>
              <p class="text-secondary mb-4 fs-5">Best quality fully procedural materials</p>
              <div class="image-shadow">
                <img src="images/diamond.webp" class="img-fluid w-100" alt="Best quality fully procedural materials" loading="lazy">
              </div>              
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 text-center text-white">
              <h1 class="mb-3 fw-bold display-3 gradient-text">Tutorials</h1>
              <p class="text-secondary mb-4 fs-5">Easy to follow tutorials with file</p>
              <div class="image-shadow">
                <img src="images/tutorial.webp" class="img-fluid w-100" alt="Easy to follow tutorials with file" loading="lazy">
              </div>              
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-lg-5 py-5 bg-dark-2">
      <div class="row ps-lg-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-white">
          <h1 class="fw-bold display-3 gradient-text">Get Inspired. <span class="p-0 m-0 fs-5 text-secondary"> Other have already done it.</span></h1>
        </div>
      </div>
    </div>

    <div class="container-fluid px-lg-5 py-5 pt-0 bg-dark-2">
      <div class="row p-lg-5 pt-lg-0">
        <div class="container-fluid mb-4">
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div style="height: 500px; overflow: hidden; border-radius: 15px;">
                <img src="images/vision_1.webp" class="img-fluid rounded-img w-100" style="height: 100%; object-fit: cover;" alt="3d Model Of Vision Pro" loading="lazy"/>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div style="height: 500px; overflow: hidden; border-radius: 15px;">
                <img src="images/vision_2.webp" class="img-fluid rounded-img w-100" style="height: 100%; object-fit: cover;" alt="3d Model Of Vision Pro" loading="lazy"/>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div style="height: 500px; overflow: hidden; border-radius: 15px;">
                <img src="images/vision_3.webp" class="img-fluid rounded-img w-100" style="height: 100%; object-fit: cover;" alt="3d Model Of Vision Pro" loading="lazy"/>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div style="height: 500px; overflow: hidden; border-radius: 15px;">
                <img src="images/watch_2.webp" class="img-fluid rounded-img w-100" style="height: 100%; object-fit: cover;" alt="3d Model Of Rolex" loading="lazy"/>
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
              <div style="height: 500px; overflow: hidden; border-radius: 15px;">
                <img src="images/watch_1.webp" class="img-fluid w-100" style="height: 100%; object-fit: cover;" alt="3d Model Of Rolex" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 1: Three equal images -->


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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script>
      const searchInput = document.getElementById('searchInput');
      if (searchInput) {
        searchInput.addEventListener('keydown', function(e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            const query = searchInput.value.trim();
            if (query !== '') {
              window.location.href = `tutorial.html?q=${encodeURIComponent(query)}`;
            }
          }
        });
      }
    </script>

  </body>
</html>



