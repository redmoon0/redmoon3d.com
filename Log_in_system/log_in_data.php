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
    <title>Log In</title>
    <link rel="icon" href="../icon.png" type="image/x-icon">
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
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=planet" />
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
                      <input type="text" id="searchInput" class="form-control search-input bg-secondary border-0 text-white ps-5 py-2 search-box shadow-lg" placeholder="Search 3d Models, Tutorial, HDRI’s etx.">
                    </div>
                  </div>
                </div>
              </div>            
            </div>
            <div class="d-flex align-items-center">
              <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="width: 120px !important;" href="log_in.php">Dashboard</a>
                <i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i>
              <?php else: ?>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="width: 120px !important;" href="sign_up_data.php">SignUp</a>
                <a href="sign_up_data.php" ><i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i></a>
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
              <a class="nav-link text-white p-0" href="../index.php">Home</a>
              <a class="nav-link text-white p-0" href="../models.php">Addons</a>
              <a class="nav-link text-white p-0" href="../materials.php">Materials</a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-lg-5 px-md-5 px-sm-2">
                <!-- <li class="nav-item"><a class="nav-link" href="#">New</a></li>                             -->
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../models.php">Addons</a></li>
                <li class="nav-item"><a class="nav-link" href="../materials.php">Materials</a></li>
                <li class="nav-item"><a class="nav-link" href="../tutorial.html">Tutorials</a></li>            
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-5">
                  <div class="card shadow-lg rounded-4">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Login</h2>                                            
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= htmlspecialchars($_GET['error']) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required />
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Log In</button>
                        </form>
                        <p class="mt-3 text-center">Don't have an account? <a href="sign_up_data.php">Sign up</a></p>
                    </div>
                  </div>
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
              window.location.href = `../tutorial.html?q=${encodeURIComponent(query)}`;
            }
          }
        });
      }
    </script>
  </body>
</html>



