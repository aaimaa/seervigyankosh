 <?php $this->load->view('web/layouts/header');?>

 <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Login Form</li>
      </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- login -->
    <div class="login-w3ls py-5">
      <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5"> Login<span class="font-weight-bold">now</span></h3>
        <!-- content -->
        <div class="sub-main-w3 pt-md-4">
          <form role="form" class="text-center" method="post" id="login_form" name="login_form">
            <div class="form-style-agile form-group">
              <label>Your Username<i class="fas fa-user"></i></label>
              <input type="text" id="email" name="email" class="form-control" />
            </div>
            <div class="form-style-agile form-group">
              <label> Your Password <i class="fas fa-unlock-alt"></i> </label>
              <input type="password" id="pass" name="pass" class="form-control" />
            </div>
            <!-- switch -->
            <ul class="list-unstyled list-login">
<!--               <li class="switch-agileits float-left">
                <label class="switch text-capitalize">
                  <input type="checkbox" />
                  <span class="slider-switch round"></span>
                  keep me signed in
                </label>
              </li> -->
              <li class="float-right">
                <a href="#" class="text-right text-white text-capitalize">forgot password?</a>
              </li>
            </ul>
            <!-- //switch -->
            <input type="submit" value="Log In" />
            <p class="text-center dont-do mt-4 text-white">
              Don't have an account?
              <a href="<?php echo base_url();?>register">Create New Account</a>
              
            </p>
  
          </form>
        </div>
                  <div id="msg" style="text-align: center;"></div> 
        <!-- //content -->
      </div>
    </div>
    <!-- //login -->
       <!--Footer-->
 <?php $this->load->view('web/layouts/footer');?>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>

   
<script type="text/javascript">
  $(document).ready(function(){

  var validator = $("#login_form").validate({
    rules: {
      email: {
        required: true,
      },
      pass : {
        required:true
      },
    },
    messages: {
      email: {
        required: "Please enter your username",
      }, 
      pass: {
        required: "Please enter your password",
      },
    },    

    submitHandler:function(form){
      var form_data = new FormData(form);
               
      $.ajax({
        url: SITEURL+'post-login',
        type: 'POST',
        processData: false,
        contentType: false,
        data: form_data,
        success: function(result){
          var res = $.parseJSON(result);
          var message = res.message;

          if(res.success == true){
            $.notify({ message: message },{ type: 'success' });

            window.location.replace(SITEURL);
          }else{
            $.notify({ message: message },{ type: 'danger' });
          }
        }
      });
    }
  });
});

</script>

