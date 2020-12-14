<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>CretechBD</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- Place favicon.ico in the root directory -->

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- BootStrap CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">



  <meta name="theme-color" content="#fafafa">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" />



  <script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function () {
      // jQuery code

      //////////////////////// Prevent closing from click inside dropdown
      $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
      });


    }); // jquery end
  </script>

  <style type="text/css">
    @media all and (min-width: 992px) {
      .navbar {
        padding-top: 0;
        padding-bottom: 0;
      }

      .navbar .has-megamenu {
        position: static !important;
      }

      .navbar .megamenu {
        left: 0;
        right: 0;
        width: 100%;
        padding: 20px;
      }

      .navbar .nav-link {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }
    }
  </style>
</head>

<body>

  <div id="wrapper">
    <!-- Header begin -->
    <header>
      <div class=" text-dark top_wrapper d-flex justify-content-center align-items-center">
        <!-- Top header Begin -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="top_header d-flex justify-content-end">
                <div class="mail d-flex justify-content-center align-items-center">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                  </svg>
                  <p class="pr-4 pl-2">info@cretechbd.com</p>
                </div>
                <div class="mobile d-flex justify-content-center align-items-center">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-phone-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                  </svg>
                  <p class="pr-4 pl-2">+88 01711119651 </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Top header End -->

      <!-- //////////////////////////// -->

      <!-- navbar begin -->
      <div class=" navbar_wrapper ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Logo begin -->
                <div id="logo">
                  <a class="navbar-brand" href="#">
                    <img class="w-100" src="images/logo/logo.png" alt="">
                  </a>
                </div>
                <!-- Logo end -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse custom_nav_css" id="navbarNavAltMarkup">
                    <ul class="navbar-nav text-dark">
                      <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
                      <li class="nav-item"><a class="nav-link" href="#">About US</a></li>
                      <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Services </a>
                        <div class="dropdown-menu megamenu" role="menu">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">WEB DESIGN & DEVELOPMENT</a></li>
                                  <li><a href="#">Ecomerce Development </a></li>
                                  <li><a href="#">Informational Websites</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">SOFTWARE DEVELOPMENT</a></li>
                                  <li><a href="#">MOBILE APPS DEVELOPMENT</a></li>
                                  <li><a href="#">Digital Markting</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">Graphics Design</a></li>
                                  <li><a href="#">BROCHURE DESIGN</a></li>
                                  <li><a href="#">IMAGE PROCESSING</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">SEO</a></li>
                                  <li><a href="#">OFF Page SEO</a></li>
                                  <li><a href="#">On Page SEO</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                          </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                      </li>
                      <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Mega menu</a>
                        <div class="dropdown-menu megamenu" role="menu">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">Inventory Management</a></li>
                                  <li><a href="#">Pharmachy Management</a></li>
                                  <li><a href="#">Lubricant Management</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">Point of sell</a></li>
                                  <li><a href="#">Restaurant Management</a></li>
                                  <li><a href="#">School Management</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">Super shop Management</a></li>
                                  <li><a href="#">HR & Payroll Software</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-3">
                              <div class="col-megamenu">
                                <ul class="list-unstyled">
                                  <li><a href="#">NGO Management</a></li>
                                  <li><a href="#">Bike Showroom Management</a></li>
                                </ul>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                          </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="#">Our Team</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Contact US</a></li>
                    </ul>
                  </div> <!-- navbar-collapse.// -->
              </nav>
            </div>
          </div>
          </nav>
          <!-- navbar begin -->
        </div>

      </div>
  </div>
  </div>

  </header>
  <!-- Header End -->