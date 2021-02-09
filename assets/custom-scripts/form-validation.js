$(document).ready(function(){

  $.validator.addMethod("customemail",function (value, element) {
    return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
  });

  $.validator.addMethod('decimal', function (value, element) {
    return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
  }, "");

  $.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Please enter letters");   
});


//login form validation
$(document).ready(function(){

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var link = $('body').data('baseurl');

  /* For login-form */

  $("form[name='login-form']").validate({

    rules: {

      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 20
      }
    },

    messages: {

      email: {
        required: "Please enter an email",
        email: "Please enter valid email",
      },
      password: {
        required: "Please enter password",
        minlength: "Minimum password length 6",
        maxlength: "Maximim password length 20",
      },
    },
    submitHandler: function(form) {
      form.submit();
    },
    errorPlacement: function(error, element) { 
      error.appendTo(element.parent().next());
    } 
  });  

  /* For forgot-password */

  $("form[name='forgot-password']").validate({
    rules: {
      email: {
        required: true,
        email: true,
        remote: {
          type: 'post',
          url: SITEURL + '/admin/check-admin-email',
          data: {
            '_token': $("#_token").val(),
            'email': function () {
              return $('#email').val()
            },
          'tbl': 'users',
          'id': $('#id').val(),
          },
          dataType: 'json'
        }
      }
    },
    messages: {
      email: {
        required: "Please enter an email",
        email: "Please enter valid email",
        remote: "Oops! Looks like the email not registered"
      },
    },
    //submitHandler: function(form) {
      /*var form_data = new FormData(form);
      var url = SITEURL+'/admin/recover-password';

      $.ajax({
        url: url,
        type: 'POST',
        processData: false,
        contentType: false,
        data: form_data,
        dataType: 'json',
        success: function(result)
        {
          var res = $.parseJSON(result);
          var message = res.message;
          
          if(res.success == true){
            console.log(res);
            $.notify({
              message: message 
            },{
              type: 'success'
            });

            //window.location.replace(SITEURL+'/admin/users');
          }else{
            $.notify({
              message: message 
            },{
              type: 'danger'
            });
          }
        }
      });*/
   // },
    errorPlacement: function(error, element) { 
      error.appendTo(element.parent().next());
    } 
  });  


  /* For reset-forgot-password */
    $("form[name='reset-forgot-password']").validate({
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
/*      submitHandler: function(form) {
        var form_data = new FormData(form);
        var url = SITEURL+'/admin/reset-forgot-password';
          
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
      },*/
      errorPlacement: function(error, element) { 
        error.appendTo(element.parent().next());
      }
    });
/*
  $("form[name='reset-forgot-password']").validate({

    rules: {

      password: {
        required: true,
        minlength: 6,
        maxlength: 20
      },
      confirm_password: {
        required: true,
        minlength: 6,
        maxlength: 20,
        equalTo: "#password"
      }
    },

    messages: {

      password: {
        required: lang.PLEASE_ENTER_PASSWORD,
        minlength: lang.PASSWORD_MIN_LENGTH,
        maxlength: lang.PASSWORD_MAX_LENGTH,
      },
      confirm_password: {
        required: lang.PLEASE_ENTER_CONFIRM_PASSWORD,
        minlength: lang.CONFIRM_PASSWORD_MIN_LENGTH,
        maxlength: lang.CONFIRM_PASSWORD_MAX_LENGTH,
        equalTo: lang.CONFIRM_PASSWORD_SAME_AS_PASSWORD,
      },
    },

    submitHandler: function(form) {
      form.submit();
    }
  });*/

/************  For Admin Form Validation  ************/
  


});