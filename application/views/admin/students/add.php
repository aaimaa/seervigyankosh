<?php $this->load->view('admin/layouts/header');?>  
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title;?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/students'); ?>">Student</a></li>
            <li class="breadcrumb-item active">Add New</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title;?></h3>
            </div>
            <form role="form" name="add_student" id="add_student" method="post" enctype="multipart/form-data">

              <div class="card-body">
                <input type="hidden" name="id" id="id" value="">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter first name">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Last Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="last_name" value="" id="last_name" placeholder="Enter lastname">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Father's Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="fathers_name" id="fathers_name" value="" placeholder="Enter first name">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>City/Village <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="city" value="" id="city" placeholder="Enter city/village">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="email" id="email" value="" placeholder="Enter email address">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone Number<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Enter phone number">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="address" id="address" value="" placeholder="Enter address">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Graduation <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="graduation" id="graduation" value="" placeholder="Enter graduation">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Select Profile Image <span class="text-danger">*</span></label>
                      <input type="file" class="form-control" name="user_profile" id="user_profile" onchange="previewFile(this);" value="" placeholder="Select profile image">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="previewimg_Src">
                        <img id="previewImg" src="<?php echo base_url('assets/images/user_profile/user.png');?>" alt="Placeholder" style="height: 110px;width: 110px;border-radius: 50px">
                      </div>

                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Enter password">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Confirm Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control" name="c_password" id="c_password" value="" placeholder="Enter confirm password">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date <span class="text-danger">*</span></label>
                      <input type="date" class="form-control" name="date" value="" placeholder="Enter date">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Description<span class="text-danger">*</span></label>
                      <textarea class="form-control" name="description" value="" placeholder="Enter description"></textarea>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card-footer" style="text-align: center;">
                <div class="row">
                  <div class="form-group col-md-12">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
                </div>
              </div>
            </form>
            <div id="msg"></div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('admin/layouts/footer');?>
<script>
  function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];
    if(file){
      var reader = new FileReader();
      reader.onload = function(){
        $("#previewImg").attr("src", reader.result);
      }
      reader.readAsDataURL(file);
    }
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){

    var validator = $("#add_student").validate({
      rules: {
        name:{
          required: true
        },
        last_name:{
          required: true
        },
        fathers_name:{
          required: true
        },
        city:{
          required: true
        },
        email: {
          required: true,
          email: true,
          maxlength: 255,
        },
        phone: {
          required: true,
          number: true,
          minlength: 8,
          maxlength: 15
        },
        address:{
          required: true
        },
        graduation: {
          required: true
        },
        password : {
          required:true
        },
        c_password: {
          required:true,
          equalTo: "#password"
        },
        user_profile:{
          extension: "jpg|jpeg|png|JPG|JPEG|PNG"
        },
        date : {
          required:true
        },
        description : {
          required:true
        },
      },

      messages: {
        name:{
          required: "Please enter first name"
        },
        last_name:{
          required: "Please enter last name"
        },
        fathers_name:{
          required: "Please enter fathers name"
        },
        city:{
          required: "Please enter city/village"
        },
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address"
        }, 
        phone: {
          required: "Please enter mobile number",
          number: "Please enter a valid mobile number",
          minlength: "Mobile number must be atleast 10 digits",
          maxlength: "Mobile number should be less then or equels to 15 digits"
        },
        address:{
          required: "Please enter address"
        },
        graduation: {
          required: "Please enter graduation",
        },
        user_profile:{
          extension: "axtention jpg|jpeg|png|JPG|JPEG|PNG"
        },
        password: {
          required: "Please enter password",
        },
        c_password: {
          required: "Please enter confirm password",
          equalTo: "Enter confirm password same as password"
        },
        date: {
          required: "Please enter date",
        },
        description: {
          required: "Please enter description",
        },
      },    
      submitHandler:function(form){
        var form_data = new FormData(form);
        var url = "<?php echo base_url('admin/students/store')?>";
        var file_data = $("#user_profile").prop("files")[0];
        form_data.append("file", file_data);

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

              window.location.replace(SITEURL+'admin/students');
            }else{
              $.notify({ message: message },{ type: 'danger' });
            }
          }
        });
      }
    });
  })
</script>