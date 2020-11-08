<!DOCTYPE html>
<?php

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){
  if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

    //submit the form

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "bence.luo899@gmail.com";

    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "From: ".$userEmail. "\r\n";
    $body .= "From: ".$message. "\r\n";

    // mail($mailto,$messageSubject,$body);

    $message_sent = true;

  }

}

?>


<html lang="en">
  <head>
    <title>Endurance - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
      /*-------------------------
          CONTACT style
-------------------------*/
      ::-moz-placeholder,
      .form-control::-moz-placeholder {
        color: #5f5f5f;
      }

      .contact .form-item .form-control {
        border-bottom: 0px solid rgba(0, 0, 0, 0.08) !important;
        background: transparent;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 44px;
        font-size: 14px;
        position: relative;
        -webkit-transition: border 0.9s ease;
        transition: border 0.9s ease;
        padding: 1rem;
        border: none;
      }

      button,
      input {
        overflow: visible;
      }

      button,
      input,
      optgroup,
      select,
      textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
      }

      .contact .form-item .form-group {
        background-color: #f1f3f6;
        box-shadow: inset 3px 3px 3px #dadada, inset -3px -3px 3px #fafafa;
        -webkit-box-shadow: inset 3px 3px 3px #dadada,
          inset -3px -3px 3px #fafafa;
        -moz-box-shadow: inset 3px 3px 3px #dadada, inset -3px -3px 3px #fafafa;
        -o-box-shadow: inset 3px 3px 3px #dadada, inset -3px -3px 3px #fafafa;
        -ms-box-shadow: inset 3px 3px 3px #dadada, inset -3px -3px 3px #fafafa;
        border-radius: 1.25rem;
      }

      .contact-form textarea {
        min-height: 175px;
        resize: none;
      }

      .contact #message.toast {
        max-width: 500px;
        padding: 2px 0 1px;
        position: absolute;
        top: -2px;
        display: inline-block;
        left: 200px;
        border-radius: 1rem;
        color: #fafafa;
      }

      .contact .toast button span {
        position: relative;
        top: 8px;
      }

      .contact .contact-info ul li {
        margin-top: 1.5rem;
      }

      .contact .contact-info i {
        margin-right: 0.5rem;
      }

      .contact .contact-info img {
        width: 50px;
      }

      .contact .copy-right {
        position: relative;
        top: 5rem;
      }

      .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .size-md {
        font-size: 2.25rem !important;
      }

      .contact .contact-info i {
        margin-right: 0.5rem;
      }

      a:-webkit-any-link {
        cursor: pointer;
      }

      .pill-button {
        border-radius: 1rem;
        border: none;
        padding: 10px 30px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 16px;
        display: inline-block;
      }

      .pill-button,
      .pill-button.active,
      .pill-button:hover {
        color: #fafafa;
        color: #3c3c3c;
      }

      .contact {
        background-color: rgba(246, 246, 246, 0.7);
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      .button-border {
        background-color: transparent;
      }

      .dark .box-border,
      .dark .box-hover-border,
      .dark .button-border,
      .dark .image-border {
        background-color: #2c2d30;
        -webkit-box-shadow: 3px 3px 3px #202125, -3px -3px 3px #3e3e3e;
        box-shadow: 3px 3px 3px #202125, -3px -3px 3px #3e3e3e;
      }

      .button-border {
        background-color: #f1f3f6;
        border-radius: 1rem;
        -webkit-box-shadow: 3px 3px 3px #dadada, -3px -3px 3px #fafafa;
        box-shadow: 3px 3px 3px #dadada, -3px -3px 3px #fafafa;
        display: inline-block;
        padding: 5px;
      }
    </style>
  </head>

  <body>
    <div class="py-1 bg-black top" id="Contact">
      <div class="container">
        <div
          class="row no-gutters d-flex align-items-start align-items-center px-md-0"
        >
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div
                  class="icon mr-2 d-flex justify-content-center align-items-center"
                ></div>
              </div>

              <ul
                style="margin-left: 5em; opacity: 0%"
                class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
              >
                <li class="ftco-animate">
                  <a href="#"><span></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span></span></a>
                </li>
              </ul>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div
                  class="icon mr-2 d-flex justify-content-center align-items-center"
                ></div>
              </div>
              <div
                class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><span
            ><i class="left-bar"></i>Simone Gubernati<i
              class="right-bar"
            ></i></span
        ></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About Me</a>
            </li>
            <li class="nav-item">
              <a href="program.html" class="nav-link">Programs</a>
            </li>
            <li class="nav-item">
              <a href="tools.html" class="nav-link">Tools</a>
            </li>
            <li class="nav-item">
              <a href="recipes.html" class="nav-link">Recipes</a>
            </li>
            <!--<li class="nav-item">
              <a href="blog.html" class="nav-link">Blog</a>
            </li> -->
            <li class="nav-item active">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section
      class="hero-wrap js-fullheight"
      style="
        background-image: url('images/selfie.jpeg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      "
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        >
          <div class="col-md-9 ftco-animate text-center pt-5 mt-md-5">
            <h1 class="mb-3 bread">Get in touch</h1>
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.html">Home</a></span>
              <span>Contact</span>
            </p>
            <ul style="margin-right: 3em" class="ftco-footer-social">
              <li class="ftco-animate">
                <a href="#" style="background-color: #fcd307"
                  ><span class="icon-facebook" style="color: white"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="#" style="background-color: #fcd307"
                  ><span class="icon-instagram" style="color: white"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="#" style="background-color: #fcd307"
                  ><span class="icon-twitter" style="color: white"></span
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php

    if ($message_sent):
    ?>
    <h3></h3>

    <div class="text-center title" style="padding: 50px;
    margin: 50px;">
      <h2 class="text-dark">
        Thank you for your message,
      </h2>
      <p class="text-muted mb-5 max-width-450">
        I will be in touch shortly
      </p>
    </div>

    <?php
    else:
    ?>

    <!-- Contact Start -->
    <section id="contact" class="contact">
      <form action="contact.php" method="POST">
        <div class="display-table">
          <div class="display-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-center title">
                    <h2 class="text-dark">
                      Let's <span class="base-color">Connect</span>
                    </h2>
                    <p class="text-muted mb-5 max-width-450">
                      Let&#39;s talk, everyone got different needs, and I&#39;m
                      here to satisfy them, contact me by filling the module
                      below, on the socials or by email
                    </p>
                  </div>
                </div>
              </div>
              <div class="row contact-info">
                <div class="col-lg-4 mt-5">
                  <div class="text-center">
                    <div class="base-color">
                      <i class="fa fa-phone size-md"></i>
                    </div>
                    <div class="mt-3">
                      <h5 class="text-dark mb-0">Call me On</h5>
                      <small class="text-muted"
                        ><a href="#">+44 775-323-1812</a></small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt-5">
                  <div class="text-center">
                    <div class="base-color">
                      <i class="fa fa-instagram size-md"></i>
                    </div>
                    <div class="mt-3">
                      <h5 class="text-dark mb-0 contact_detail-title">
                        Folow me on Instagram
                      </h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt-5">
                  <div class="text-center">
                    <div class="base-color">
                      <i class="fa fa-envelope size-md"></i>
                    </div>
                    <div class="mt-3">
                      <h5 class="text-dark mb-0">
                        <a style="color: black">Email Me</a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mt-5 contact-form">
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-lg-6 form-item">
                        <div class="form-group">
                          <input
                            name="name"
                            id="name"
                            type="text"
                            class="form-control"
                            placeholder="*Your Name"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 form-item">
                        <div class="form-group">
                          <input
                            name="email"
                            id="email"
                            type="email"
                            class="form-control"
                            placeholder="*Your Email"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-12 form-item">
                        <div class="form-group">
                          <input
                            name="subject"
                            id="subject"
                            type="text"
                            class="form-control"
                            placeholder="*Your Subject"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-12 form-item">
                        <div class="form-group">
                          <textarea
                            name="message"
                            id="message"
                            rows="4"
                            class="form-control"
                            placeholder="*Your message... "
                            required
                          ></textarea>
                        </div>
                      </div>
                      <div
                        style="position: relative"
                        class="col-sm-12 mt-4 text-left"
                      >
                        <div style="margin: 20px" class="button-border">
                          <button
                            type="submit"
                            id="submit-btn"
                            name="submit"
                            class="pill-button"
                            style="color: black"
                          >
                            Send Message
                          </button>
                        </div>
                        <div
                          id="message"
                          class="toast"
                          role="alert"
                          aria-live="assertive"
                          aria-atomic="true"
                          data-delay="4000"
                        >
                          <div class="toast-body d-inline-block"></div>
                          <button
                            type="button"
                            class="pr-3 close"
                            data-dismiss="toast"
                            aria-label="Close"
                          >
                            <span
                              aria-hidden="true"
                              class="text-white fa fa-window-close size-xs"
                            ></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <?php
    endif;
    ?>
    <!--  Contact End  -->

    <footer class="footer-distributed">
      <div class="footer-left">
        <a href="index.html"><img src="images/logo.jpeg" /></a>
        <h3>Simone<span>Gubernati</span></h3>

        <p class="footer-links">
          <a href="index.html">Home</a>
          |
          <a href="about.html">About Me</a>
          |
          <a href="program.html">Programs</a>
          |
          <a href="tools.html">Tools</a>
          |
          <a href="recipes.html">Recipes</a>
          |
          <a class="js-scroll-trigger" href="#Contact">Contact</a>
        </p>
      </div>

      <div class="footer-center">
      <div>
      <i class="fa fa-map-marker"></i>
      <p><span>4 Bravingtons Walk,  N1 9GA</span>
					London
					
				</p>
    </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+44 747 909 1713</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p>
            <a href="mailto:simone.gubernati@gmail.com"
              >simone.gubernati@gmail.com</a
            >
          </p>
        </div>
      </div>
      <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        My mission is to teach anyone, anywhere how to respect the body that helps us live on. I will empower a
        healthier you through incorporating rigorous training and having healthier nutrition in your daily
        lifestyle.
      
    </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
        <a href="https://bence899.github.io">
				<p class="footer-company-name" style="padding: 2em 0em 0em 0em;">&copy; 2020 Created by Bence Luo</p>
			</a>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
