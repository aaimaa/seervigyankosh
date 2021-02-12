<?php $this->load->view('admin/layouts/header'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img src="<?php echo base_url('assets/images/sample-profile.png');?>" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center"><span id="authName"><?php echo $result[0]->name; ?></span></h3>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right"><span id="authEmail"><?php echo $result[0]->email; ?></span></a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="float-right"><span id="authMobile"><?php echo $result[0]->mobile_number; ?></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#updateProfile" data-toggle="tab">Update Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#changePass" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="updateProfile">
                    <form class="form-horizontal" name="update-profile" id="update-profile">
                      <input type="hidden" name="id" value="<?php echo $result[0]->id; ?>" id="id">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="<?php echo $result[0]->name; ?>" class="form-control" id="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="<?php echo $result[0]->email?>" class="form-control" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mobile Number <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" name="mobile_number" value="<?php echo $result[0]->mobile_number; ?>" class="form-control" id="mobile_number" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="changePass">
                    <form class="form-horizontal" name="change-password">
                      <input type="hidden" name="id" value="<?php echo $result[0]->id; ?>">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<?php $this->load->view('admin/layouts/footer'); ?>
<script type="text/javascript">
  $(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "Please enter alphabetic characters only!");
    $("form[name='update-profile']").validate({
      rules: {
        name: {
          required: true,
          lettersonly:true,
          minlength: 3
        },
        email: {
          required: true,
          email: true
        },
        mobile_number: {
          required: true,
          number: true,
          minlength: 8,
          maxlength: 15
        },
      },
      messages: {
        name: {
          required: "Please enter your name",
          minlength: "Name should be atleast 3 character in length",
        },
        email: {
          required: "Please enter answer",
          minlength: "Please enter a valid email address"
        },
        mobile_number: {
          required: "Please enter mobile number",
          minlength: "Please enter a valid mobile number",
          minlength: "Mobile number must be atleast 8 digits",
          maxlength: "Mobile number should be less then or equels to 15 digits"
        },
      },
      submitHandler: function(form) {
        var form_data = new FormData(form);
        var url = SITEURL+'admin/update-profile';
        $.ajax({
          url: url,
          type: 'POST',
          processData: false,
          contentType: false,
          data: form_data,
          success: function(result){
            var res = $.parseJSON(result);
            var message = res.message;
            $("#authName").html($("#name").val());
            $("#authEmail").html($("#email").val());
            $("#authMobile").html($("#mobile_number").val());
            if(res.success == true){
              $.notify({
                message: message 
              },{
                type: 'success'
              });
            }else{
              $.notify({
                message: message 
              },{
                type: 'danger'
              });
            }
          }
        });
      }
    });
    $("form[name='change-password']").validate({
      rules: {
        password: {
          required: true,
          maxlength: 25,
          minlength: 6
        },
        confirm_password: {
          required: true,
          maxlength: 25,
          minlength: 6,
          equalTo: "#password"
        },
      },
      messages: {
        password: {
          required: "Please enter password",
          minlength: "Password should be atleast 6 character",
          maxlength: "Password should be less than or equal to 25 character",
        },
        confirm_password: {
          required: "Please enter confirm password",
          minlength: "Confirm password should be atleast 6 character",
          maxlength: "Confirm password should be less than or equal to 25 character",
          equalTo: "Confirm password and confirm password do not match.",
        },
      },
      submitHandler: function(form) {
        var form_data = new FormData(form);
        var url = SITEURL+'admin/update-password';
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
              $.notify({
                message: message 
              },{
                type: 'success'
              });
            }else{
              $.notify({
                message: message 
              },{
                type: 'danger'
              });
            }
          }
        });
      }
    });
  });
</script>