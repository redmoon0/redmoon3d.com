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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=planet" />
    <style>
      body {
        font-family: 'Inter', sans-serif;
        padding-top: 124px;
      }
      .navbar-top {
        height: 70px; /* adjust as needed */
      }

      .navbar-links {
        top: 70px; /* push below the top navbar */
        z-index: 1030;
      }

      .bg-dark{
        background-color: #1C1C1C !important;
      }
      .bg-dark-2
      {
        background-color: #171717 !important;
      }
      .bg-dark-3
      {
        background-color: #242424 !important;
      }
      .gradient-text{
        display: inline-block; /* Ensures background fits the element */
        background: linear-gradient(360deg, #ffffff, #696969);
        background-size: 100% 100%; /* Ensures full coverage */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text; 
        color: transparent;
      }
      .image-shadow {
        position: relative;
        height: 300px;
        border-radius: 0.5rem;
        overflow: hidden;
      }

      .image-shadow img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: inherit;
        display: block;
      }

      .image-shadow::after {
        content: "";
        position: absolute;
        inset: 0;
        box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.5);
        border-radius: inherit;
        pointer-events: none;
      }
      .btn-red{
        background-color: #B90000;
        border-radius: 15px;
        padding-left: 30px;
        padding-right: 30px;
        color: white;
      }
      .btn-red:hover{
        background-color: #9c0000;
        border-radius: 15px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .btn-red-outline{
        box-shadow: inset 0px 0px 0px 1px red;
        border-radius: 15px;
        padding-left: 30px;
        padding-right: 30px;
        color: red;
      }
      .btn-red-outline:hover{
        border-radius: 15px;
        box-shadow: inset 0px 0px 0px 1px #e09500;
        padding-left: 30px;
        padding-right: 30px;
        color: #e09500;
      }
      .text-red{
        color: red;
      }
      .search-box{
        background-color: #3E3E3E !important;
        color: #A2A2A2 !important;
        padding-top: 12px !important;
        padding-bottom: 12px !important;
        border-radius: 15px !important;
      }
      .search-box::placeholder {
        color: #A2A2A2 !important;
        opacity: 1;
      }
      .rounded-img{
        border-radius: 15px !important;
      }
    </style>
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
              <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="width: 120px !important;" href="log_in.php">Log In</a>
              <i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i>
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
              <a class="nav-link text-white p-0" href="addons.php">Addons</a>
              <a class="nav-link text-white p-0" href="materials.php">Materials</a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-lg-5 px-md-5 px-sm-2">
                <!-- <li class="nav-item"><a class="nav-link" href="#">New</a></li>                             -->
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="addons.php">Addons</a></li>
                <li class="nav-item"><a class="nav-link" href="materials.php">Materials</a></li>
                <li class="nav-item"><a class="nav-link" href="tutorial.html">Tutorials</a></li>            
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <main>

