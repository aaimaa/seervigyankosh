<?php $this->load->view('web/layouts/header');?>

    <div class="row">
      <!-- <div class="col-md-1"></div> -->
      <div class="col-md-12">
        <!-- Navbar section -->
        <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor">
            <ul class="navbar-nav">
              <li class="nav-item rounded bg-light search-nav-item">
                <input type="text" id="search" class="bg-light" placeholder="Search Keyword"/><span class="fa fa-search text-muted"></span>
              </li>
            </ul>
          </div>
        </nav>
        <!-- <div class="filter"></div> -->
        <!-- Sidebar filter section -->
      <!--   <section id="sidebar">
          <div class="border-bottom pb-2 ml-2">
            <h4 id="burgundy">Filters</h4>
          </div>
          <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Categories</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
              <div class="form-group">
                <input type="checkbox" id="healthy" />
                <label for="healthy">Current News Related </label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="artisan" />
                <label for="artisan">Management (MBA)</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="breakfast" />
                <label for="breakfast"> Art's</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="healthy" />
                <label for="healthy">Commerce</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="healthy" />
                <label for="healthy">General</label>
              </div>
            </form>
          </div>
          <div class="py-2 ml-3">
            <h6 class="font-weight-bold">Class Wise</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
              <div class="form-group">
                <input type="checkbox" id="25off" />
                <label for="25">10th(RBSC)</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="5off" />
                <label for="5off" id="off">12th(RBSC)</label>
              </div>
            </form>
          </div>
        </section> -->

        <section id="products">
          <div class="container">
            <div class="d-flex flex-row">
              <div class="text-muted m-2" id="res">Showing <?php echo count($result);?> results</div>
              <!-- <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1">
                  <span class="text-muted">Sort by</span>
                  <select name="sort" id="sort">
                    <option value="popularity"><b></b>Most Popular</option>
                    <option value="prcie"><b>Recent Uploaded</b></option>
                  </select>
                </div>
              </div> -->
            </div>
            <div class="row">
              <?php if(!empty($result)){?>
                <?php foreach($result as $each){?>
              <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/why-c.jpg')?>" />
                  <div class="card-body">
                    <h5><b><?php echo $each->name; ?></b></h5>
                    <div class="d-flex flex-row my-2">
                      <div class="text-muted"><b>Author </b>: denish Rich</div>
                    </div>
                    <a href="<?php echo $each->link;?>" target="_blank"><button class="btn w-100 rounded my-2">
                      Read More/ Download
                    </button></a>
                  </div>
                </div>
              </div>
            <?php }?>
            <?php }?>
            
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-2"></div>
    </div>
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
              <li class="nav-item active">
                <a class="nav-link text-white" href="index.html"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="about.html">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  E-Library Courses
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="language.html">Language</a>
                  <a class="dropdown-item" href="communication.html"
                    >Communication</a
                  >
                  <a class="dropdown-item" href="business.html">Business</a>
                  <a class="dropdown-item" href="software.html">Software</a>
                  <a class="dropdown-item" href="social_media.html"
                    >Social Media</a
                  >
                  <a class="dropdown-item" href="photography.html"
                    >Photography</a
                  >
                  <a class="dropdown-item" href="course_details.html"
                    >Course Details</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="form.html">Apply Now</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="contact.html"
                  >संपर्क करें</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="yojana.html">योजना</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="bhamasha.html">भामाशाह</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="contact.html">पदाधिकारी</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="labharthi.html"
                  >लाभार्थी</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="meeting.html">मीटिंग</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- //navigation -->
    </div>

 <?php $this->load->view('web/layouts/footer');?>
