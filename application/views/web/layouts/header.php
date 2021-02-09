<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Seervi Gyankosh</title>
<style>
ul.login_ul {
 list-style-type: none;
    margin: 11px 20px;
    display: -webkit-inline-box;
    padding: 0;
}
ul.login_ul li{
  border: none;
}

ul.login_ul li a{
  display: inline;
  margin: 0px 10px;
}
.error{
      color: red !important;
}
.dropdown_item_active {
    background: linear-gradient(to left, #42a5f5, #86c9ff);
}
</style>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="keywords" content="Seervi Gyankosh | Seervi Gyankosh Shiksha Seva Sanstha"/>
    <script>
      addEventListener(
        "load",
        function () {
          setTimeout(hideURLbar, 0);
        },
        false
      );

      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/bootstrap.css');?>" />
    <link href="<?php echo base_url('assets/dist/css/Elibrary.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/dist/css/mislider.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/dist/css/mislider-custom.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/style.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/fontawesome-all.css');?>" />
    <link href="<?php echo base_url('assets/front/css/font_face1.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/front/css/font_face2.css');?>" rel="stylesheet" />
   <script>
    var SITEURL = "<?php echo base_url('')?>";
  </script>
  </head>

  <body>
    <!-- header -->
    <header>

      <!-- top header -->
      <div class="top-head-w3ls py-2 bg-dark">
        <div class="container">
          <div class="row">
            <h1 class="text-capitalize text-white col-7">
              <i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3" ></i>seervi gyankosh
            </h1>
            <!-- social icons -->
            <div class="social-icons text-right col-5">
              <ul class="list-unstyled">
                <li>
                  <a
                    href="#"
                    class="fab fa-facebook-f icon-border facebook rounded-circle"
                  >
                  </a>
                </li>
                <li class="mx-2">
                  <a
                    href="#"
                    class="fab fa-twitter icon-border twitter rounded-circle"
                  >
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="fab fa-google-plus-g icon-border googleplus rounded-circle"
                  >
                  </a>
                </li>
                <li class="ml-2">
                  <a href="#" class="fas fa-rss icon-border rss rounded-circle">
                  </a>
                </li>
              </ul>
            </div>
            <!-- //social icons -->
          </div>
        </div>
      </div>
      <!-- //top header -->
      <!-- middle header -->
      <div class="middle-w3ls-nav py-2">
        <div class="container">
          <div class="row">
            <a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="<?php echo base_url();?>">Seervi Gyankosh</a>
            <div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
              <div class="row">
                <div class="col-sm-4 nav-middle">
                  <i
                    class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"
                  ></i>
                  <div class="agile-addresmk">
                    <p>
                      <span class="font-weight-bold text-dark">Mail Us</span>
                      <a href="mailto:mail@example.com">info@example.com</a>
                    </p>
                  </div>
                </div>
                <div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
                  <i
                    class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"
                  ></i>
                  <div class="agile-addresmk">
                    <p>
                      <span class="font-weight-bold text-dark">Call Us</span>
                      +1234-567-890
                    </p>
                  </div>
                </div>
                <div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2">
                  <ul class="login_ul">
                          
            <?php if($this->session->userdata("is_user_in")){ ?>
              <li class="nav-item">
              <a  class="nav-link border border-light rounded waves-effect waves-light <?php if($this->uri->segment(1) == 'user-profile'){ echo 'active'; }?>" href="<?php echo base_url('user-profile');?>">
                <i class="fas fa-user-alt mr-2"></i>MY PROFILE
              </a>
            </li>
            <li class="nav-item">
              <a  class="nav-link border border-light rounded waves-effect waves-light <?php if($this->uri->segment(1) == 'logout'){ echo 'active'; }?>" href="<?php echo base_url('logout');?>">
                <i class="fas fa-sign-out-alt mr-2"></i>LOG OUT
              </a>
            </li>
            <?php }else{?>
              <li class="nav-item">
              <a class="nav-link border border-light rounded waves-effect waves-light <?php if($this->uri->segment(1) == 'login'){ echo 'active'; }?>" href="<?php echo base_url('login');?>">
                <i class="fas fa-sign-in-alt mr-2"></i>LOGIN
              </a>
            </li>
            <li class="nav-item ">
              <a  class="nav-link border border-light rounded waves-effect waves-light <?php if($this->uri->segment(1) == 'register'){ echo 'active'; }?>" href="<?php echo base_url('register');?>">
                <i class="fab fa-github mr-2"></i>REGISTR
              </a>
            </li>
            <?php }?>
          </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //middle header -->
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner-agile-2">
      <!-- navigation -->
      <div class="navigation-w3ls">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
          <button
            class="navbar-toggler mx-auto"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse text-center"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav justify-content-center">
                          <ul class="navbar-nav justify-content-center">

              <li class="nav-item <?php if($this->uri->segment(1) == ''){ echo 'active'; }?>">
                <a class="nav-link text-white" href="<?php echo base_url();?>"
                  >Home
                </a>
              </li>

              <li class="nav-item <?php if($this->uri->segment(1) == 'yojanaye'){ echo 'active'; }?>">
                <a class="nav-link text-white" href="<?php echo base_url('yojanaye');?>"
                  >योजना
                </a>
              </li>

              <li class="nav-item <?php if($this->uri->segment(1) == 'bhamashah'){ echo 'active'; }?>">
                <a class="nav-link text-white" href="<?php echo base_url('bhamashah');?>"
                  >भामाशाह
                </a>
              </li>

              <li class="nav-item <?php if($this->uri->segment(1) == 'padaadhikari'){ echo 'active'; }?>">
                <a class="nav-link text-white" href="<?php echo base_url('padaadhikari');?>"
                  >पदाधिकारी
                </a>
              </li>   

              <li class="nav-item <?php if($this->uri->segment(1) == 'labharthi'){ echo 'active'; }?>">
                <a class="nav-link text-white" href="<?php echo base_url('labharthi');?>"
                  >लाभार्
                </a>
              </li>   

              <li class="nav-item <?php if($this->uri->segment(1) == 'contact-us'){ echo 'active'; }?>">
                <a class="nav-link text-white" href="#contactUsForm">Contact Us</a>
              </li>
            </ul>
            </ul>
          </div>
        </nav>
      </div>
            <div class="banner-text-whtree">
          <a href="<?php echo base_url('library');?>" class="button-agiles text-capitalize text-white mt-sm-5 mt-4">E - Library</a>
        </div>
      <!-- //navigation -->
    </div>

