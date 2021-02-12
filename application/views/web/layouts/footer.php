<!-- footer -->
<footer>
      <div class="container py-4"  id="contactUsForm">
        <div class="row py-xl-5 py-sm-3">
          <div class="col-lg-6 map">
            <h2
              class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3"
            >
              our
              <span class="font-weight-bold">directions</span>
            </h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7161.098371062058!2d73.7054018!3d26.1788076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3969f6fc1e8cba67%3A0x6819243987d26573!2sBader%20Chowk%2C%20Bilara%2C%20Rajasthan%20342602!5e0!3m2!1sen!2sin!4v1613102276720!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="conta-posi-w3ls p-4 rounded">
              <h5 class="text-white font-weight-bold mb-3">Address</h5>
              <p>
               कार्यालय - श्री आईमाताजी मंदिर मार्ग, <span>बडेर चौक,,</span>  बिलाड़ा - जोधपुर (राज.),
              </p>
            </div>
          </div>
          <div class="col-lg-6 contact-agileits-w3layouts mt-lg-0 mt-4">
            <h4 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">
              Contact Us
            </h4>
            <p class="conta-para-style border-left pl-4">
              If you have any questions about the services we provide simply use
              the form below. We try and respond to all queries and comments
              within 24 hours.
            </p>
            <div class="subscribe-w3ls my-xl-5 my-4">
                <form id="contact_us_form" method="post" class="subscribe_form">
                    <div class="form-style-agile form-group">
                        <input class="form-control" type="text" name="name" placeholder="Enter your fullname..."/>
                    </div>
                    <div class="form-style-agile form-group">
                        <textarea class="form-control" name="query" value="" rows="3" placeholder="Enter your query..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                </form>
            </div>
            <p class="para-agileits-w3layouts text-white">
              <i class="fas fa-map-marker pr-3"></i>  कार्यालय - श्री आईमाताजी मंदिर मार्ग, <span>बडेर चौक,,</span>  बिलाड़ा - जोधपुर (राज.),
            </p>
            <p class="para-agileits-w3layouts text-white my-sm-3 my-2">
              <i class="fas fa-phone pr-3"></i>032 625 4592
            </p>
            <p class="para-agileits-w3layouts">
              <i class="far fa-envelope-open pr-2"></i>
              <a href="mailto:mail@example.com" class="text-white"
                >info@example.com</a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="copyright-agiles py-3">
        <div class="container">
          <div class="row">
            <p
              class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1"
            >
              © 2021 Seervi Gyankosh. All Rights Reserved.
            </p>
            <!-- social icons -->
            <div
              class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3"
            >
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
    </footer>
  <script src="<?php echo base_url('assets/front/js/jquery-2.2.3.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/bootstrap.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/mislider.js')?>"></script>
  <script>
  jQuery(function ($) {
    var slider = $(".mis-stage").miSlider({
      stageHeight: 320,
      slidesOnStage: false,
      slidePosition: "center",
      slideStart: "mid",
      slideScaling: 150,
      offsetV: -5,
      centerV: true,
      navButtonsOpacity: 1,
    });
  });
  </script>
  <script src="<?php echo base_url('assets/front/js/SmoothScroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/move-top.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/easing.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/edulearn.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/font_wosam.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/jquery.validate.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/jquery.validate.min.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/additional-methods.min.js') ;?>"></script>
  <script src="<?php echo base_url('assets/dist/js/bootstrap-notify.min.js') ?>"></script>

  <script>
    $(document).ready(function(){
        var validator = $("#contact_us_form").validate({
            rules: {
                name: {
                    required: true,
                },
                query : {
                    required:true
                },
            },
            messages: {
                name: {
                    required: "Please enter your name",
                }, 
                query: {
                    required: "Please enter your query",
                },
            },
            submitHandler:function(form){
                var url = "<?php echo base_url('contact-us');?>";
                var form_data = new FormData(form);
                console.log(form_data);
    
                $.ajax({
                    url: url,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: form_data,
                    //DataType:'json',
                    success: function(data){
                        var res = $.parseJSON(data);
                        var message = res.message;
                        //alert();
                        if(res.success == true){
                            $.notify({ message: message },{ type: 'success' });

                            document.getElementById("contact_us_form").reset();
                        }else{
                            $.notify({ message: message },{ type: 'danger' });
                        }
                    }
                });
            }
        });
    });
    </script>
</html>