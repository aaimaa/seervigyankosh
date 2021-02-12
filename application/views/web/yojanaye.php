<?php $this->load->view('web/layouts/header');?>
<link rel="stylesheet" href="<?php echo base_url('assets/front/css/yojna.css'); ?>" />
     <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Yojanaye</li>
      </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->
    <!-- contact -->
    <div class="contact py-5">
      <div class="container py-xl-5 py-lg-3">
        <h3
          class="title text-capitalize font-weight-light text-dark text-center mb-5"
        >
          योजनाएं 
          <span class="font-weight-bold"></span>
        </h3>
        <!-- form -->
        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
          <div class="container">

            <!-- <div class="section-title">
              <h2 data-aos="fade-in">Features</h2>
              <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div> -->

            <div class="row content">
              <div class="col-md-5" data-aos="fade-right">
                <img src="assets/front/images/vidyarthi-mitra-yojna.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-4" data-aos="fade-left">
                <h3>सीरवी ज्ञानकोष विद्यार्थी मित्र टीम</h3>
                <!-- <p class="font-italic">
                  सीरवी शिक्षा हेतु सदैव तत्पर सभी विषयों की एक्सपर्ट टीम
                </p> -->
                <ul>
                <br>
                  <li><i class="icofont-check"></i> १. सीरवी शिक्षा हेतु सदैव तत्पर सभी विषयों की एक्सपर्ट टीम</li>
                  <li><i class="icofont-check"></i> २. सीरवी समाज के MBBS , इंजीनियर, CA, नर्स, आर्मी, फिटनेश, अध्यापक, कम्प्यूटर, आयुर्वेदिक डॉक्टर, LLB, मनोवैज्ञानिक, करियर काउंसलर सहित समस्त विषय विशेषज्ञों की संयुक्त टीम</li>
                  <li><i class="icofont-check"></i> ३. सीरवी समाज के विद्यार्थियों और अभ्यर्थियों के लिए 24×7 Whatsapp हेल्पलाइन</li>
                  <li><i class="icofont-check"></i> ४. विद्यार्थी/अभ्यर्थी को हो रही किसी भी शिक्षा समस्या का निःशुल्क समाधान</li>
                  <li><i class="icofont-check"></i> ५. विद्यालय स्तर से लेकर सभी प्रतियोगी परीक्षाओं के किसी भी विषय के किसी भी प्रश्न का बेहतरीन हल</li>
                </ul>
              </div>
            </div>

            <div class="row content">
              <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="assets/front/images/swasthya-mitra-yojna.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                <h3>सीरवी ज्ञानकोष स्वास्थ्य मित्र</h3>
                <p>
                <br>
                वैश्विक महामारी कोरोना को ध्यान में रखते हुए आपकी अपनी सामाजिक संस्था सीरवी ज्ञानकोष ने स्वास्थ्य मित्र सेवा की शुरुआत की हैं।
                </p>
                <p>
                <br>
                जिसमें समाज के ही विशेषज्ञ डॉक्टर घर बैठे आपकी स्वास्थ्य समस्या का निःशुल्क समाधान कर रहे हैं।।
                आप अपनी स्वास्थ्य समस्या की जानकारी हेल्पलाइन 89711 96710 पर 24×7  बात करके अथवा Whatsapp भेजकर निःशुल्क स्वास्थ्य सेवा से लाभ ले सकते हैं और निवेदन हैं कि अपने परिजन, परिचित और रिश्तेदारों को इस सेवा से अवगत करावें और लाभान्वित करावें।।
                </p>
              </div>
            </div>
          </div>
        </section><!-- End Features Section -->
        <!-- //form -->
      </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <?php $this->load->view('web/layouts/footer');?>
        <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
    