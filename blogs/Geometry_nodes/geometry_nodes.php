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
     <title>Geometry Nodes in Blender</title>
     <link rel="icon" href="../../icon.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="In this Blog I have explained what are geometry nodes, where to find geometry nodes in blender, is it necessary to learn geometry nodes etc. I have also given geometry nodes list.">
    <meta name="author" content="REDMOON">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.redmoon3d.com/blogs/Geometry_nodes/geometry_nodes.php" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Geometry Nodes in Blender">
    <meta property="og:description" content="Learn the power of Blender's Geometry Nodes.">
    <meta property="og:image" content="https://www.redmoon3d.com/blogs/Geometry_nodes/images/geometry_nodes.webp">
    <meta property="og:url" content="https://www.redmoon3d.com/blogs/Geometry_nodes/geometry_nodes.php">
    <meta property="og:type" content="article">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Geometry Nodes in Blender">
    <meta name="twitter:description" content="Learn the power of Blender's Geometry Nodes.">
    <meta name="twitter:image" content="https://www.redmoon3d.com/blogs/Geometry_nodes/images/geometry_nodes.webp">

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
  <style>
    #nodeSearchInput:focus {
      box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
      background-color: #ffffff;
      transition: all 0.3s ease;
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
                    <input type="text" id="searchInput" style="height: auto; !important; max-width: 100%; !important" class="form-control search-input bg-secondary border-0 text-white ps-5 py-2 search-box shadow-lg" placeholder="Search 3d Models, Tutorial, HDRI’s etx.">
                  </div>
                </div>
              </div>
            </div>            
          </div>

           <div class="d-flex align-items-center">
              <?php if(isset($_SESSION['user_id'])):?>
                <a class="btn btn-red-outline py-2 d-none d-lg-block me-5" style="max-width: 150px !important;" href="Log_in_system/dashboard.php">Dashboard</a>';
                <a href="Log_in_system/dashboard.php" ><i class="bi bi-person-circle fs-3 text-light d-block d-lg-none me-3"></i></a>';
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
            <a class="nav-link text-white p-0" href="../../index.php">Home</a>
            <a class="nav-link text-white p-0" href="../../models.php">Models</a>
            <a class="nav-link text-white p-0" href="../../materials.php">Materials</a>
          </div>
          <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-lg-5 px-md-5 px-sm-2">
              <!-- <li class="nav-item"><a class="nav-link" href="#">New</a></li>                             -->
              <li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../../models.php">Models</a></li>
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
              <!-- <div class="col-12">
                <h1 class="text-white fw-bold" style="height: auto !important; max-width: 100% !important" >Geometry Nodes: A Beginner's Guide to Blender's Procedural Power</h1>
              </div> -->
              <div class="col-12">
                <img class="img-fluid py-3" style="height: auto !important; max-width: 100%;" src="images/geometry_nodes.webp" alt="Geometry Nodes in Blender">
              </div>
              <div class="col-12 mt-4">
                <p class="display-5 fw-bold">What are Geometry Nodes?</p>
              </div>  
              <div class="col-12">
                <p class="fs-5">Geometry Nodes in Blender are a powerful, node-based system that lets you create and control 3D geometry using a visual programming workflow. Instead of manually modeling objects, you can use Geometry Nodes to build complex shapes, patterns, and effects through a series of connected nodes. This system is perfect for procedural modeling, where changes can be made easily without starting over. Whether you're creating environments, animations, or visual effects, Blender Geometry Nodes give you full control and flexibility over your 3D scenes—all without writing a single line of code. It's ideal for artists who want to automate modeling tasks, create non-destructive workflows, and unlock creative possibilities in Blender. </p>
              </div>  
              <div class="col-12 mt-4">
                <p class="display-5 fw-bold">How do you find Geometry Nodes in Blender?</p>
                <ul class="fs-5">
                  <li>Open Blender and go to the Layout workspace or any 3D Viewport.</li>
                  <li>Select the object you want to apply geometry nodes to (or add a new one).</li>
                  <li>At the top-left, switch to the Geometry Nodes workspace (or create a new one via the “+” tab).</li>                  
                  <li>Click “New” in the Geometry Nodes Editor. This creates a Geometry Node Modifier for your selected object.</li>
                </ul>
                <p class="fs-5">You can also find and add Geometry Nodes from the Modifiers tab in the Properties Panel:</p>
                <ul class="fs-5">
                  <li>Go to the wrench icon → Add Modifier → Geometry Nodes.</li>
                </ul>
              </div>  
              <div class="col-12 mt-4">
                <p class="display-5 fw-bold">Is it Necessary to learn Geometry Nodes?</p>
                <p class="fs-5">No, it’s not strictly necessary, but learning Geometry Nodes can be a huge advantage depending on what you want to do in 3D.</p>
                <p class="fs-4 fw-bold mb-1">You should learn Geometry Nodes if you are:</p>
                <ul class="fs-5">
                  <li>A procedural artist – You want to create models that can be easily adjusted and reused with sliders or input values.</li>
                  <li>Into motion graphics or VFX – You need to build complex patterns, animations, or effects like scattering, cloning, and deformation.</li>
                  <li>A technical artist or tool developer – You want to create flexible tools or modifiers for yourself or a team.</li>                  
                  <li>Interested in automation – You want to avoid repetitive manual modeling and make your work non-destructive.</li>                  
                  <li>Creating generative or parametric assets – Like landscapes, buildings, cables, or sci-fi panels that need variation and control.</li>
                </ul>
                <p class="fs-4 fw-bold mt-3 mb-1">Who Might Not Need It (Right Away):</p>
                <ul class="fs-5">
                  <li>Absolute beginners still learning basic modeling, materials, and lighting.</li>
                  <li>Artists focused only on sculpting or character animation, where procedural modeling is less important.</li>
                </ul>
              </div>             
                <div class="text-center mt-5 pb-5">
                  <a href="https://www.blender.org/download/" target="_blank" class="btn btn-primary btn-lg">
                    Start Using Geometry Nodes Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr class="w-50 mx-auto"/>
          <!-- <div class="container my-4 d-flex justify-content-center">
            <div class="position-relative" style="width: 50%;">
              <input type="text" id="nodeSearchInput" class="form-control ps-5 py-3 rounded-pill shadow-sm border-0 w-100" placeholder="Search nodes..." style="background-color: #f1f3f5; color: black;">
              <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ps-3 text-secondary"></i>
            </div>
          </div> -->
          <div class="container">
            <div class="row">
              <div class="col-12 mt-4 text-center my-5">
                  <p class="display-5 fw-bold">Blender Geometry nodes list</p>
              </div>  
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5">
            <div class="row">                
                <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex  align-items-center">
                  <img src="images/Attribute/Attribute_Statistic.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Attribute Statistic Node"/>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                  <h1 class="mb-3 fw-bold">Attribute Statistic Node</h1>
                  <p>The Attribute Statistic node in Blender's Geometry Nodes calculates statistical data from a specified attribute across a selected geometry domain (points, edges, faces, etc.). It provides important metrics like the minimum, maximum, mean, median, range, standard deviation, and variance of the values in the attribute you select.</p>

                  <h3 class="fw-bold">Where is it Used?</h3>
                  <p>This node is useful in situations where you need to make decisions or drive effects based on the statistical properties of an attribute across geometry.</p>

                  <h3 class="fw-bold">Example Use</h3>
                  <p><strong>Texture Mapping</strong>: You might calculate the mean of the UV coordinates to adjust the tiling or scale of textures applied to the geometry based on its characteristics.</p>
                </div>
              </div>
            </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Attribute/Domain_Size.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Domain Size Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Domain Size Node</h1>
                <p>The Domain Size node in Blender's Geometry Nodes calculates the number of elements (such as points, edges, or faces) in a specified geometry domain. It returns an integer value corresponding to the size of the selected geometry domain.</p>
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is used when you need to know the number of elements in a geometry domain, which can be useful for creating effects that depend on geometry size, such as for procedural modeling or animation setups.</p>
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Geometry Density Adjustment</strong>: You might use this node to adjust parameters based on the density of points, such as scaling objects in a scene based on the number of vertices in the geometry.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Attribute/Blur_Attribute.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Blur Attribute Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Blur Attribute Node</h1>
                <p>The Blur Attribute node in Blender's Geometry Nodes smooths or blurs an attribute across the geometry, taking into account the values of neighboring elements. This is often used to create soft transitions or smooth variations in an attribute.</p>
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is useful in situations where you want to smooth out attribute values, such as when creating a more gradual transition between colors, scales, or other attributes across the geometry.</p>
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Soft Transitions</strong>: You might use this node to create smooth variations in the displacement of a surface, such as making the transition between two terrain heights smoother in a procedural landscape.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Attribute/Capture_Attribute.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Capture Attribute Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Capture Attribute Node</h1>
                <p>The Capture Attribute node in Blender's Geometry Nodes is used to transfer attribute values from one geometry domain to another. It allows you to capture attributes from points, edges, or faces and store them for further manipulation.</p>
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is used when you need to copy attributes from one domain and apply them to another, such as capturing vertex colors or displacement information from one mesh to another.</p>
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>UV Mapping Transfer</strong>: You could use this node to capture UV coordinates from one mesh and apply them to a new mesh, maintaining the texture mapping alignment between both objects.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Attribute/Remove_Named_Attribute.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Remove Named Attribute Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Remove Named Attribute Node</h1>
                <p>The Remove Named Attribute node in Blender's Geometry Nodes is used to delete a specified attribute from the geometry. This is useful for cleaning up data and removing unnecessary attributes from your nodes network.</p>
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is used when you want to remove an attribute that is no longer necessary, helping to keep the geometry data clean and optimize performance.</p>
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Optimizing Geometry</strong>: You could use this node to remove a temporary attribute that was used for procedural generation, such as a temporary normal or color value after you've finished manipulating the geometry.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Attribute/Store_Named_Attribute.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Store Named Attribute Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Store Named Attribute Node</h1>
                <p>The Store Named Attribute node in Blender's Geometry Nodes is used to save an attribute with a specified name to the geometry. This allows you to create custom attributes that can be used in later parts of your node tree.</p>
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is useful for creating and storing custom data that you want to pass along the node network, such as for specific procedural modeling effects or storing values for later use in other nodes.</p>
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Creating Custom Attributes</strong>: You might use this node to store a custom attribute like a specific displacement value or a color gradient, which you can later manipulate in your geometry node network.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Boolean.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Boolean Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Boolean Node</h1>
                <p>The Boolean node provides a constant true or false value in the geometry node tree. It is often used as a toggle to enable or disable operations or effects.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used for controlling conditions such as switches, muting certain parts of node trees, or branching logic based on true/false conditions.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Visibility Toggle</strong>: Control whether parts of geometry are included in the final output with a Boolean switch.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Color.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Color Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Color Node</h1>
                <p>The Color node provides a constant RGBA color value. It’s often used to assign base colors or as inputs to shaders or color-mapping nodes.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Useful when assigning flat colors to objects or driving color-based effects like gradients or masks.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Vertex Coloring</strong>: Apply a flat color to an entire mesh or drive color blending in shading.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Image.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Image Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Image Node</h1>
                <p>The Image node allows you to reference an image file within the node system. This image can then be sampled or used in various texture-based operations.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Often used in texture lookups, masking, and advanced procedural texturing techniques within Geometry Nodes or Shader workflows.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Texture Coordinates</strong>: Sample a specific texture to affect displacement or coloring of geometry.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Integer.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Integer Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Integer Node</h1>
                <p>The Integer node provides a fixed whole number input. It is often used for indexing, counts, or any case where an integer value is required.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Commonly used in loops, array manipulation, ID setting, and modular operations.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Grid Distribution</strong>: Use an integer to control the number of points or rows when distributing geometry.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Material.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Material Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Material Node</h1>
                <p>The Material node provides a reference to an existing material in the Blender file. It can be assigned or used in comparisons and filters.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used to apply materials to geometry procedurally or as filters to perform operations based on material properties.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Material Assignment</strong>: Assign different materials to parts of geometry based on conditions.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Rotation.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Rotation Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Rotation Node</h1>
                <p>The Rotation node provides a constant rotation value in Euler angles. This is useful for setting or controlling rotations of geometry.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used in transforming geometry, aligning instances, or driving rotation-based behavior.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Instancing</strong>: Apply consistent rotation to every instance generated on a mesh.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/String.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is String Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">String Node</h1>
                <p>The String node provides a constant text value. It's useful for labeling, tagging, or naming elements within procedural systems.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used in naming geometry, labeling instances, or driving logic in string-based operations like filtering or formatting.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Instance Labels</strong>: Use the string value to dynamically name or sort instances for output or debugging.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Constant/Vector.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Vector Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Vector Node</h1>
                <p>The Vector node gives a constant XYZ vector. It is used to define directions, positions, or any vector-based property in geometry nodes.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Commonly used in translation, scaling, directional effects, and vector math operations.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Directional Offset</strong>: Apply a directional shift to geometry by feeding the vector into a translate or offset node.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Group/Group_Input.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Group Input Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Group Input Node</h1>
                <p>The <strong>Group Input</strong> node in Blender's Geometry Nodes serves as the starting point for custom node groups. It exposes inputs defined at the group level so you can connect them within the node tree.</p>
                
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is essential when creating reusable node groups. It passes values from outside the group (like sliders or geometry inputs) into the group’s internal node network.</p>
                
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Reusable Setup</strong>: If you create a procedural object like a tree or fence, you can define parameters such as height, width, or count using the Group Input node, making the setup easily controllable and modular.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Object_Info.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Object Info Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Object Info Node</h1>
                <p>The <strong>Object Info</strong> node in Blender's Geometry Nodes provides data from another object in the scene, enabling dynamic interactions between objects within your node setup.</p>
                
                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is useful when you want one object’s transformation or geometry to influence another. It can pull in location, rotation, scale, and geometry from a referenced object.</p>
                
                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Interactive Effects</strong>: Use the Object Info node to make grass bend where a character walks or to control one object's behavior based on another's position or scale.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Scence_Time.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Scene Time Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Scene Time Node</h1>
                <p>The <strong>Scene Time</strong> node provides information about the current time in the animation. It outputs the current frame and time in seconds, which can be used to drive procedural animations.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is useful when animating geometry or effects procedurally based on the timeline, without using keyframes.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Looping Animations</strong>: Create oscillating or growing effects over time by connecting the Scene Time output to parameters like scale or offset in your node tree.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Self_Object.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Self Object Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Self Object Node</h1>
                <p>The <strong>Self Object</strong> node outputs a reference to the object that the Geometry Nodes modifier is applied to. It helps access the object’s own data inside the node tree.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This is especially useful when you need the object’s own transform or attributes, such as using its position to affect instances or geometry within itself.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Self-Referencing Effects</strong>: Use the Self Object node to make instances follow or orbit around the object they are part of, allowing self-contained dynamic behaviors.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Active_Camera.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Active Camera Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Active Camera Node</h1>
                <p>The <strong>Active Camera</strong> node provides a reference to the current active camera in the scene. It allows you to retrieve data such as the camera's position, rotation, or direction.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>This node is often used for effects that react to the camera, such as billboarding, depth-based effects, or aligning geometry relative to the viewer.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Camera-Aware Geometry</strong>: You can use the Active Camera node to rotate geometry to always face the camera, or to scale elements based on their screen distance.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Collection_Info.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Collection Info Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Collection Info Node</h1>
                <p>The <strong>Collection Info</strong> node brings all objects from a specified collection into your node tree as geometry, allowing you to instance or manipulate them together.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>It’s commonly used when you want to scatter or reference multiple objects (like rocks, trees, or assets) from a collection instead of individual objects.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Scattering Systems</strong>: Pull in a collection of rocks and scatter them on a landscape using the Collection Info node to randomize and instance them procedurally.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Image_Info.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Image Info Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Image Info Node</h1>
                <p>The <strong>Image Info</strong> node provides metadata about an image, such as its resolution (width and height) and color space. It is often used when mapping textures or controlling UVs.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Useful in texture-based geometry workflows, where knowing image dimensions or properties can help scale or align procedural elements accurately.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Texture Alignment</strong>: Retrieve image size to dynamically fit or tile geometry based on the actual resolution of a texture.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Input_Scene/Is_Viewport.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Is Viewport Node"/>
              </div>
              <div class="col-12 col-lg-6 p-4 rounded-4 shadow-sm text-white">
                <h1 class="mb-3 fw-bold">Is Viewport Node</h1>
                <p>The <strong>Is Viewport</strong> node outputs a boolean that tells whether the current evaluation is happening in the viewport or final render. This allows for performance optimization.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Use it when you want to show simplified geometry in the viewport for performance while keeping full detail in the final render.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Viewport Optimization</strong>: Display low-poly proxies or disable certain effects in the viewport while retaining the full version for renders using this node.</p>
              </div>
            </div>
          </div>
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Output/Group_Output.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="Group Output Node in Geometry Nodes"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Group Output Node</h1>
                <p>The <strong>Group Output</strong> node is the final output point of a node group. In Geometry Nodes, it defines what data (geometry, values, attributes) gets passed back to the modifier or calling context.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used at the end of a node group to send results—like modified geometry or custom attributes—out of the group for use in the main node tree or modifier stack.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Custom Node Groups:</strong> When creating reusable node groups (like scattering or mesh deformation tools), the final geometry or value flows through this node to make it usable elsewhere.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Output/Viewer.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Viewer Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Viewer Node</h1>
                <p>The <strong>Viewer Node</strong> is used for debugging and previewing geometry or data at any point in your node setup using the Spreadsheet and 3D viewport.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used during development to inspect geometry, attributes, or values at specific stages of the node network.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Attribute Debugging:</strong> Visualize the positions or instances mid-setup without affecting the final output.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/ID.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is ID Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">ID Node</h1>
                <p>The <strong>ID Node</strong> provides a unique identifier for each element (like instances), which stays consistent even after changes in topology.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Commonly used in randomization or selection when you want stable variation across elements like instances.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Stable Random Values:</strong> Combine the ID with a Random Value node to ensure each element keeps its randomized result across updates.</p>
              </div>
            </div>
          </div>
          
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/Index.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Index Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Index Node</h1>
                <p>The <strong>Index Node</strong> outputs the index number of each element in a geometry component (like points or faces).</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used to create gradients, filters, or custom selections across elements based on their order.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Index-Based Animation:</strong> Animate elements one after another by using their index as a time offset.</p>
              </div>
            </div>
          </div>
          
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/Named_Attribute.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Named Attribute Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Named Attribute Node</h1>
                <p>The <strong>Named Attribute Node</strong> allows you to access a custom attribute by name from the geometry data.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Useful when importing or referencing named data like UV maps, vertex colors, or external attributes.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>UV-Based Effects:</strong> Access a UV map by name to apply distortion or texture-based geometry effects.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/Normal.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Normal Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Normal Node</h1>
                <p>The <strong>Normal Node</strong> provides the surface normal direction at each point, often used for shading or directional effects.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used in aligning objects, directional distortion, or creating effects based on surface angle.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Face-Directed Instances:</strong> Align instances to the normal of each face or point for consistent orientation.</p>
              </div>
            </div>
          </div>
                    
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/Position.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Position Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Position Node</h1>
                <p>The <strong>Position Node</strong> gives you the 3D coordinates of each element in object or world space.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used for spatial effects, distance calculations, and procedural placement logic.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Position-Based Gradients:</strong> Color or scale elements based on their position in space.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Read/Radius.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Radius Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Radius Node</h1>
                <p>The <strong>Radius Node</strong> outputs the radius of each curve in a curve-based geometry setup.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used in procedural modeling and effects where curve thickness matters, like cables or hair strands.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Dynamic Thickness Control:</strong> Modify the radius along the length of a curve for tapering or stylized effects.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Sample/Geometry_Proximity.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Geometry Proximity Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Geometry Proximity Node</h1>
                <p>The <strong>Geometry Proximity Node</strong> calculates the distance and/or position from points in one geometry to the closest surface, edge, or point in another.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used to create effects based on spatial relationship, like mesh attraction or proximity-based materials.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Proximity Deformation:</strong> Move or color points based on how close they are to another object.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Sample/Index_of_Nearest.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Index of Nearest Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Index of Nearest Node</h1>
                <p>The <strong>Index of Nearest Node</strong> finds the index of the closest element (point, edge, face) from a source geometry to a target geometry.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used when you need to reference or sample data from a nearby element in another geometry.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Attribute Matching:</strong> Find and copy attributes from the closest point of another geometry.</p>
              </div>
            </div>
          </div>
          
          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Sample/Raycast.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Raycast Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Raycast Node</h1>
                <p>The <strong>Raycast Node</strong> casts rays from a point in a specified direction and returns data from the first hit on a target geometry.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used to sample data across surfaces, project attributes, or detect intersections for advanced effects.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Texture Projection:</strong> Project UVs or colors from one mesh onto another using ray directions.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Sample/Sample_Index.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Sample Index Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Sample Index Node</h1>
                <p>The <strong>Sample Index Node</strong> retrieves an attribute from another geometry based on a given index value.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Used when you've matched indices across geometries and want to fetch specific data from one onto another.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Indexed Color Transfer:</strong> Transfer color from one mesh to another by referencing point indices.</p>
              </div>
            </div>
          </div>

          <div class="container bg-dark-2 p-5 rounded-5 my-2">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 p-0 justify-content-center d-flex align-items-center">
                <img src="images/Geometry_Sample/Sample_Nearest.webp" width="100%" height="auto" class="img-fluid rounded-5" alt="What is Sample Nearest Node"/>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 p-4 rounded-4 shadow-sm">
                <h1 class="mb-3 fw-bold">Sample Nearest Node</h1>
                <p>The <strong>Sample Nearest Node</strong> gets attribute data from the nearest element in another geometry without needing an index match.</p>

                <h3 class="fw-bold">Where is it Used?</h3>
                <p>Ideal for smooth data transfers or when you need values from the closest point, like color blending or position matching.</p>

                <h3 class="fw-bold">Example Use</h3>
                <p><strong>Smooth Color Blending:</strong> Sample colors from the closest mesh surface for natural transitions.</p>
              </div>
            </div>
          </div>
          
          <hr class="w-50 mx-auto"/>
          <div class="container p-5">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>Comments</h1>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <?php include '../../comments/comments.php'; ?>
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

