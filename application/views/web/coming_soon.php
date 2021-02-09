  <?php $this->load->view('web/layouts/header');?>
  <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
      </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->
    <!-- coming soon -->
    <div class="w3-main-coming py-5">
      <div class="container py-xl-5 py-lg-3">
        <h3
          class="title text-capitalize font-weight-light text-dark text-center mb-5"
        >
          Coming
          <span class="font-weight-bold">soon</span>
        </h3>
        <!-- content -->
        <div class="main-content-agile pt-md-4">
          <div class="w3l-agile-coming text-center">
            <h3 class="text-dark mb-4">we are coming soon</h3>
            <p>
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua.
            </p>
          </div>
          <!--timer-->
          <div class="examples">
            <div
              class="simply-countdown-losange"
              id="simply-countdown-losange"
            ></div>
            <div class="clear"></div>
          </div>
          <!--//timer-->
          <!-- newsletter -->
          <div class="sub-main-w3-2">
            <form action="#" method="post">
              <p class="text-dark mb-3 text-right">Notify me when it's ready</p>
              <div class="form-style-agile-2">
                <input
                  placeholder="Your Email Address......"
                  name="Name"
                  type="email"
                  required=""
                />
                <input type="submit" value="Submit" />
              </div>
            </form>
          </div>
          <!-- //newsletter -->
        </div>
        <!-- //content -->
      </div>
    </div>
    <!-- //coming soon -->
     <?php $this->load->view('web/layouts/footer');?>
