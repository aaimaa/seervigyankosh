 <?php $this->load->view('web/layouts/header');?>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url('home');?>">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
  </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- history -->
<div class="container">
  <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5" >
          <?php echo $title;?>
          <span class="font-weight-bold"></span>
        </h3>
  <div class="main-body">
    <!-- Breadcrumb -->
    <!-- /Breadcrumb -->

    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <?php if(!empty($result->profile_image)){?>
              <img src="<?php echo base_url('/').$result->profile_image;?>" alt="User Profile" class="rounded-circle" width="150"/>
            <?php } else{ ?>
              <img src="<?php echo base_url('assets/images/user_profile/user.png')?>" alt="User Profile" class="rounded-circle" width="150"/>
            <?php } ?>
              <div class="mt-3">
                <h4><?php echo ucwords($result->first_name.' '.$result->last_name);?></h4>
                <p class="text-secondary mb-1"><?php echo $result->graduation;?></p>
                <p class="text-muted font-size-sm"><?php echo $result->city;?></p>
              </div>
            </div>
          </div>
        </div>
</div>
<div class="col-md-8">
  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Full Name</h6>
        </div>
        <div class="col-sm-9 text-secondary"><?php echo ucwords($result->first_name.' '.$result->last_name); ?></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-secondary"><?php echo $result->email;?></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Phone</h6>
        </div>
        <div class="col-sm-9 text-secondary"><?php echo $result->phone;?></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Mobile</h6>
        </div>
        <div class="col-sm-9 text-secondary"><?php echo $result->phone;?></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Address</h6>
        </div>
        <div class="col-sm-9 text-secondary"><?php echo $result->address;?></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('web/layouts/footer');?>