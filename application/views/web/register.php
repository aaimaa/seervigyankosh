 <?php $this->load->view('web/layouts/header');?>
 <!-- breadcrumb -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url();?>">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
     <?php echo $title;?>
   </li>
 </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- admission form -->
<div class="form-w3l py-5">
  <div class="container py-xl-5 py-lg-3">
    <h3
    class="title text-capitalize font-weight-light text-dark text-center mb-5"
    >
    Admission
    <span class="font-weight-bold">form</span>
  </h3>
  <div class="register-form pt-md-4">
   <form role="form" class="text-center" method="post" id="register_form" name="register_form" style="color: #757575;" enctype="multipart/form-data">

    <div class="styled-input form-group">
     <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Frist Name" />
   </div>
   <div class="styled-input form-group">
     <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Last name (Gotra)" />
   </div>
   <div class="styled-input agile-styled-input-top form-group">
     <input type="email" id="email" name="email" class="form-control" placeholder="Enter E-mail"/>
   </div>
   <div class="styled-input form-group">
    <input type="text" id="phone" name="phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" placeholder="Enter Phone number" />
  </div>
  <div class="styled-input form-group">
    <input
    type="text"
    id="address" name="address"
    class="form-control"
    placeholder="Enter Address"
    />
  </div>
  <div class="styled-input agile-styled-input-top form-group">
    <input
    type="text"
    id="job" name="job"
    class="form-control" placeholder="Graduation"
    />
  </div>
  <div class="styled-input form-group">
    <!-- <div class="agileits_w3layouts_grid"> -->
     <input
     type="file"
     id="user_profile" name="user_profile[]"
     class="form-control"
     />
     <span>Select your Profile  (optional)</span>
     <!-- </div> -->
   </div>
   <div class="styled-input">

    <div class="form-group">
     <input
     type="password"
     id="password" name="password"
     class="form-control" placeholder="Password"
     aria-describedby="materialRegisterFormPasswordHelpBlock"
     />
   </div>
   <div class="form-group">
     <input
     type="password"
     id="c_password" name="c_password"
     class="form-control" placeholder="Confirm Password"
     aria-describedby="materialRegisterFormPasswordHelpBlock"
     />
   </div>
  <!--  <div class="form-group">
    <input
    type="checkbox"
    class="form-check-input"
    id="terms_c" name="terms_c[]" value="1"
    />
    <span>I Accept Terms & Condication</span>
  </div> -->

</div>
<input type="submit" id="submit_regiter" value="Submit" />
<div id="msg"></div>
</form>
</div>
</div>
</div>
<!-- admission form -->
<?php $this->load->view('web/layouts/footer');?>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>


<script type="text/javascript">
  $(document).ready(function(){
    
    var validator = $("#register_form").validate({
      rules: {
        firstName:{
          required: true,
        },
        lastName:{
          required: true,
        },  
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 15,
        },
        address:{
          required: true,
        },
        job: {
          required: true,
        },
        password : {
          required: true,
        },
        // 'user_profile[]':{
        //    required:true,
        //    extension: "jpg|jpeg|png|JPG|JPEG|PNG"
        // } ,   
        c_password: {
          required: true,
          equalTo: "#password"
        },
      },
      messages: {
        firstName:{
          required: "Please your enter first name",
        },
        lastName:{
          required: "Please enter your last name",
        },
        email: {
          required: "Please enter your email id",
        }, 
        phone: {
          required: "Please enter your phone number",
          //number: "Please enter a valid Phone number",
          minlength: "Phone number must be atleast 10 digits",
          maxlength: "Phone number should be less then or equels to 15 digits"
        },
        address:{
          required: "Please enter your address",
        },
        job:{
          required: "Please enter your graduation",
        },
        password: {
          required: "Please enter your password",
        },
        // 'user_profile':{
        //   required:"Profile is required",
        //    extension: "axtention jpg|jpeg|png|JPG|JPEG|PNG"
        // },       
        c_password: {
          required: "Please enter your confirm password",
          equalTo: "Enter enter confirm password same as password"
        },
      },
      submitHandler: function(form) {
        var form_data = new FormData(form);
        var url = "<?php echo base_url('post-register')?>";
        //var file_data = $("#customFile").prop("files")[0];   
        //form_data.append("file", file_data);
            
        $.ajax({
          url: url,
          type: 'POST',
          processData: false,
          contentType: false,
          data: form_data,
          success: function(result){

            var res = $.parseJSON(result);
            var message = res.message;

            if(res.success == true){
              $.notify({ message: message },{ type: 'success' });

              window.location.replace(SITEURL+'login');
            }else{
              $.notify({ message: message },{ type: 'danger' });
            }
          }
        });
      }    
    });
  })
</script>