<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RumahCG | Home</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/cg.jpeg"/>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/owl.carousel.css" rel="stylesheet">
  <!-- <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"> -->

  <link href="assets/css/magnific-popup.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/js/jquery-3.1.1.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <script src="assets/js/script.js"></script>
  <!--   <script src="https://use.fontawesome.com/55b73bf748.js"></script> -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <script type="text/javascript">
         (function(){
          emailjs.init("user_Mot9UNOnlHjAN5n4UyP9x");
        })();
      </script>

      <script type="text/javascript">
        var myform = $("form#myform");
        myform.submit(function(event){
          event.preventDefault();

          var params = myform.serializeArray().reduce(function(obj, item) {
           obj[item.name] = item.value;
           return obj;
         }, {});

  // Change to your service ID, or keep using the default service
  var service_id = "default_service";
  var template_id = "template_qXF3WXBC";

  myform.find("button").text("Sending...");
  emailjs.sendForm(service_id,template_id, params,"myform")
  .then(function(){ 
    alert("Data anda telah kami terima, CS Kami akan segera menghubungi anda Via Email, Terima kasih. Best Regard GTech Indonesia");
    myform.find("button").text("Send");
  }, function(err) {
   alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
   myform.find("button").text("Send");
 });
  return false;
});
</script>
</head>
<body>
  <div id="menu-item" class="menu-item hide-menu">
    <div class="container">
      <ul>
        <a href="index.html"><li>home</li></a>
        <a href="#about"><li>about</li></a>
        <a href="#expertise"><li>expertise</li></a>
        <a href="#team"><li>team</li></a>
        <a href="#contact"><li>contact</li></a>
      </ul>
    </div>
  </div>
  <div class="main">
    <header class="bg-img header">
      <nav class="navbar navbar-default navbar-vira">
        <div class="container">
          <div class="navigation-bar">
            <div class="row">
              <div class="col-xs-6">
                <div class="logo">
                  <a class="navbar-brand" href="#page-top"><img src="assets/images/cg2.png" class="img-responsive hidden-xs" width=30%; style="margin: -15px;"></a>
                  <a class="navbar-brand" href="#page-top"><img src="assets/images/cg2.png" class="img-responsive hidden-lg hidden-md hidden-sm" width="30%;" style="margin-top: -55px;"></a>

                </div>
              </div>
              <div class="col-xs-6 text-right">
                <div class="menu m">
                  <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="intro-box">
            <div class="intro">
              <h1>Rumah Cipta Generasi</h1>
              <p>
                Do you have the staff to handle your critical initiatives?
              </p>
              <a class="btn vira-btn" href="#contact">Join us</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="about" class="about section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="subtitle">About Company</h2>
            <h3>
              <img class="quote" src="assets/images/quote.png">
              <font color="#fff"> RumahCG.com adalah partner yang memberikan solusi IT sesuai kebutuhan anda. konsep layanan kami adalah layanan IT yang terpadu, dimana kami menyediakan layanan secara lengkap untuk hampir semua kebutuhan IT</font>
            </h3>
            <!-- <img src="assets/images/signature.png"> -->
            <!-- <span>Adi Supriadi-CEO</span> -->
          </div>
        </div>
      </div>
    </section>
    <section id="expertise" class="expert">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 bg-img">
            <div></div>
          </div>
          <div class="col-sm-5 section">
            <div id="expert-slider" class="owl-carousel">
              <div class="item">
                <h2 class="title">IT Consult</h2>
                <h4>
                  Anda dapat berkonsultasi dengan kami tentang masalah IT pada bisnis Anda untuk kemajuan bisnis yang sedang anda jalanin maupun yang sedang anda pikirkan.
                </h4>
              </div>
              <div class="item">
                <h2 class="title">Network & Server</h2>
                <h4>
                 Kami mampu membangun sebuah kerangka kerja dan satuan Server seperti, server proxy, layanan email, dll.
               </h4>
             </div>
             <div class="item">
              <h2 class="title">Web services</h2>
              <h4>
                Sebuah layanan web adalah setiap bagian dari perangkat lunak yang membuat sendiri tersedia melalui internet dan menggunakan sistem pesan XML standar. XML digunakan untuk mengkodekan semua komunikasi ke layanan web.
              </h4>
            </div>
            <div class="item">
              <h2 class="title">Mobile Application</h2>
              <h4>
                kami membawa yang terbaik dari solusi mobilitas termasuk pengembangan aplikasi mobile dan  kita mempelajari model bisnis klien dan mengusulkan fitur canggih untuk mengambil interaksi pengguna ke tingkat berikutnya.
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="purpose section">
    <div class="container">
      <h2 class="title">PORTTOFOLIO</h2>
      <div class="row">
        <div class="col-sm-3">
          <div class="vira-card">
           <a href="detail.html"> 
            <div class="vira-card-header">
              <div class="card-icon">
                <span class="ion ion-usb" aria-hidden="true"></span>
              </div>
            </div>
          </a>
          <div class="vira-card-content">
            <h3>(I.A.S)</h3>
           <!--  <p>
             Aplikasi Sistem terpadu (I.A.S) adalah aplikasi dari produk kami yang dapat membantu dalam sistem manajemen di perusahaan Anda
           </p> -->
         </div>
       </div>
     </div>
     <div class="col-sm-3">
      <div class="vira-card">
       <a href="detail2.html"> 
        <div class="vira-card-header">
          <div class="card-icon">
            <span class="ion ion-laptop" aria-hidden="true"></span>
          </div>
        </div>
      </a>
      <div class="vira-card-content">
        <h3>Responsive Design</h3>
        <!-- <p>
          Halaman web dapat dilihat dengan menggunakan berbagai perangkat yang berbeda: desktop, tablet, dan ponsel. Halaman web Anda harus terlihat baik, dan mudah digunakan.
        </p> -->
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="vira-card">
     <a href="detail3.html"> 
      <div class="vira-card-header">
        <div class="card-icon">
          <span class="ion ion-mic-a" aria-hidden="true"></span>
        </div>
      </div>
    </a>
    <div class="vira-card-content">
      <h3>Radio Online</h3>
      <!-- <p>
        Radio Online saluran berita dunia layanan. berita internasional, analisis dan informasi dari RO World Service. berita yang mendalam dan olahraga dengan audio, video dan forum.
      </p> -->
    </div>
  </div>
</div>
<div class="col-sm-3">
  <div class="vira-card">
   <a href="detail4.html"> 
    <div class="vira-card-header">
      <div class="card-icon">
        <span class="ion ion-cube" aria-hidden="true"></span>
      </div>
    </div>
  </a>
  <div class="vira-card-content">
  <h3>CARD-US</h3>
 <!--    <p>
     Apakah itu membantu Anda dengan transportasi, pergudangan atau logistik, layanan pelanggan yang handal kami adalah apa yang membuat perusahaan kami khusus.
   </p> -->
 </div>
</div>
</div>
</div>
</div>
</section>

<section class="vira-quote section bg-img">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img class="quote" src="assets/images/quote.png">
        <p>
          One of the key strengths of T.I. The solution lies in giving the possibility of implementation and post sales support strongest. Our main international technical staff are trained and certified in their area of ​​expertise. In I.T.Solutions we are trying to build long-term sustainable with our customers and suppliers.
        </p>
        <!-- <p class="author">Bopas</p> -->
        <img src="assets/images/mouse.png">
      </div>
    </div>
  </div>
</section>

<!-- <section class="watch bg-img">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Watch showreel</span>

                <span>with us</span>
            </div>
        </div>
    </div>
  </section> -->
  <section id="team" class="team section">
    <div class="container">
      <h2 class="title">Our team members</h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="vira-card">
            <div class="vira-card-header">
              <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/adi.jpeg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
              </div>
            </div>
            <div class="vira-card-content">
              <h3>Adi Supriadi</h3>
              <p>
               CEO 
             </p>
             <div class="social-icons">
              <ul>
                <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                <a href="#"><li><span class="ion-social-twitter"></span></li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="vira-card">
          <div class="vira-card-header">
            <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/uta.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
              <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
            </div>
          </div>
          <div class="vira-card-content">
            <h3>Ade Rahman Saputra</h3>
            <p>
              Programer
            </p>
            <div class="social-icons">
              <ul>
                <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                <a href="#"><li><span class="ion-social-twitter"></span></li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="vira-card">
          <div class="vira-card-header">
            <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/asep.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
              <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
            </div>
          </div>
          <div class="vira-card-content">
            <h3>Asep Saefudin</h3>
            <p>
             Programer
           </p>
           <div class="social-icons">
            <ul>
              <a href="#"><li><span class="ion-social-facebook"></span></li></a>
              <a href="#"><li><span class="ion-social-twitter"></span></li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <div class="vira-card">
        <div class="vira-card-header">
          <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/sona.jpeg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
          </div>
        </div>
        <div class="vira-card-content">
          <h3>Sona Setiana</h3>
          <p>
            Software Enginer
          </p>
          <div class="social-icons">
            <ul>
              <a href="#"><li><span class="ion-social-facebook"></span></li></a>
              <a href="#"><li><span class="ion-social-twitter"></span></li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="vira-card">
        <div class="vira-card-header">
          <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/nazih.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
          </div>
        </div>
        <div class="vira-card-content">
          <h3>Moch Nazih</h3>
          <p>
            UI & UX Designer
          </p>
          <div class="social-icons">
            <ul>
              <a href="#"><li><span class="ion-social-facebook"></span></li></a>
              <a href="#"><li><span class="ion-social-twitter"></span></li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="vira-card">
        <div class="vira-card-header">
          <div class="member-photo" style="height: 330px; min-height: 100px;  background-image: url(&quot;assets/images/dewo.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <img class="img-responsive" src="assets/images/profile.png" alt="" style="display: none;">            
          </div>
        </div>
        <div class="vira-card-content">
          <h3>Dewo Sardju</h3>
          <p>
           UI & UX Designer
         </p>
         <div class="social-icons">
          <ul>
            <a href="#"><li><span class="ion-social-facebook"></span></li></a>
            <a href="#"><li><span class="ion-social-twitter"></span></li></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</section>
<section class="subscribe section bg-img">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p>Send Your Request Or Complaint</p>
        <form method="post" class="form" id="myform" method="post" role="form">
          <center>
           <div class="row">
            <div class="col-xs-12 col-md-12 form-group">
              <input class="form-control" id="name" name="from_name" placeholder="Name" type="text" required />
            </div>
            <div class="col-xs-12 col-md-12 form-group">
              <input class="form-control" id="email" name="to_name" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message_html" placeholder="Message" rows="5"></textarea>
          <br/>
        </center>
        <button type="submit" class="btn vira-btn">Send me</button>
      </form>
    </div>
  </div>
</div>
</section>
<section id="contact" class="contact section">
  <div class="container">
    <h2 class="title">Drop us a line</h2>
    <div class="row">
      <div class="col-sm-4">
        <div class="vira-card">
          <div class="vira-card-header">
            <span class="ion ion-map" aria-hidden="true"></span>
          </div>
          <div class="vira-card-content">
            <h3>Address</h3>
            <p>
              Depok , JL.Raya Sawangan
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="vira-card">
          <div class="vira-card-header">
            <span class="ion ion-android-call" aria-hidden="true"></span>
          </div>
          <div class="vira-card-content">
            <h3>Phone</h3>
            <p>
              +62 857-1080-7393
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="vira-card">
          <div class="vira-card-header">
            <span class="ion ion-paper-airplane" aria-hidden="true"></span>
          </div>
          <div class="vira-card-content">
            <h3>Email</h3>
            <p>
             Support@rumahcg.com
           </p>
         </div>
       </div>
     </div>
     <div class="col-sm-12">
      <div class="social-icons">
        <ul>
          <a href="#"><li><span class="ion-social-facebook"></span></li></a>
          <a href="#"><li><span class="ion-social-twitter"></span></li></a>
          <a href="#"><li><span class="ion-social-pinterest"></span></li></a>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p> 2016. Design by <span class="ion ion-home"></span> <a href="">RumahCG</a></p>
      </div>
    </div>
  </div>
</footer>
</div>
<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>

</body>
<script>

  $(function(){

    $(document).on( 'scroll', function(){

      if ($(window).scrollTop() > 100) {
        $('.scroll-top-wrapper').addClass('show');
      } else {
        $('.scroll-top-wrapper').removeClass('show');
      }
    });
  });
</script>
<script>

  $(function(){

    $(document).on( 'scroll', function(){

      if ($(window).scrollTop() > 100) {
        $('.scroll-top-wrapper').addClass('show');
      } else {
        $('.scroll-top-wrapper').removeClass('show');
      }
    });

    $('.scroll-top-wrapper').on('click', scrollToTop);
  });

  function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 800, 'linear');
  }
</script>

</html>