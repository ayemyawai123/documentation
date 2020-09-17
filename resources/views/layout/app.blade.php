<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">






  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" /> --}}
  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
 {{--  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header> --}}
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
 {{--  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Alex Smith</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section> --}}<!-- End Hero -->
  <div class="headerr">
    <img style="margin-left:90px;width:12%;" src="{{asset('images/chainer_red_h.png')}}">
    <p class="header-letter-first">
        <a href="{{url('/list')}}"> Top </a>
    </p>
    <p class="header-letter-second">
        <a href="#"> チュートリアル </a>
    </p>
    <div class="dropdown" style="margin:24px 45px;color:black;">
        <p class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
{{Auth()->user()->name}}
        </p>
        <div class="dropdown-menu logout" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
</div>
<body>
    <div class="container">
        <div class="aside-left">
            <p class="faq-logo">
                <a href="{{route('login')}}">Chainer Tutorial</a>
            </p>
           {{--  <div class="wy-side-scroll"> --}}
                <ol class="tree">
                    <!-- <label>準備編</label> -->
                    <li>

                        <label class="testlabel" id="first" style="padding:{{ (Request::segment(1) == 'php_basics1' || Request::segment(1) == 'php_basics2' || Request::segment(1) == 'php_basics3') ? '0px 0px 0px 27px' : ''}}"
                            for="menu-1">
                           PHP基礎
                            <input type="checkbox" checked id="menu-1"  onclick="togglediv('first')"/></label>
                        <ol id="first" style="display:{{ (Request::segment(1) == 'php_basics1' || Request::segment(1) == 'php_basics2' || Request::segment(1) == 'php_basics3')  ? 'block' : 'none'}}" class="TableBody">
                            <li style="background-color:#D1D0CE;"><a href="{{url('/php_basics1')}}"
                                    style="margin-left: 20px;">1.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('/php_basics2')}}"
                                    style="margin-left: 20px;">2.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('/php_basics3')}}"
                                    style="margin-left: 20px;">3.テスト</a></li>
                        </ol>
                    </li>
                    <li>

                        <label class="testlabel" id="second" style="padding:{{ (Request::segment(1) == 'laravel_basics1' || Request::segment(1) == 'laravel_basics2' || Request::segment(1) == 'laravel_basics3') ? '0px 0px 0px 27px' : ''}}"
                            for="menu-2">
                           Laravel基礎
                            <input type="checkbox" checked id="menu-2"  onclick="togglediv('second')"/></label>
                        <ol id="second" style="display:{{ (Request::segment(1) == 'laravel_basics1' || Request::segment(1) == 'laravel_basics2' || Request::segment(1) == 'laravel_basics3')  ? 'block' : 'none'}}" class="TableBody">
                            <li style="background-color:#D1D0CE;"><a href="{{url('/laravel_basics1')}}"
                                    style="margin-left: 20px;">1.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('/laravel_basics2')}}"
                                    style="margin-left: 20px;">2.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('/laravel_basics3')}}"
                                    style="margin-left: 20px;">3.テスト</a></li>
                        </ol>
                    </li>
                    <li>
                        <label class="testlabel"  id="third" style="padding:{{ Request::segment(1) == 'aws_basics1' || Request::segment(1) == 'aws_basics2' || Request::segment(1) == 'aws_basics3' ? '0px 0px 0px 27px' : ''}}" for="menu-3">
                            AWS基礎(サービス公開)</label>
                        <input type="checkbox" checked id="menu-3"  onclick="togglediv('third')"/>
                        <ol  id="third" style="display:{{ Request::segment(1) == 'aws_basics1' || Request::segment(1) == 'aws_basics2' || Request::segment(1) == 'aws_basics3'  ? 'block' : 'none'}}"  class="TableBody">
                            <li style="background-color:#D1D0CE;"><a href="{{url('aws_basics1')}}"
                                    style="margin-left: 20px;">1.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('aws_basics2')}}"
                                    style="margin-left: 20px;">2.テスト</a></li>
                            <li style="background-color:#D1D0CE;"><a href="{{url('aws_basics3')}}"
                                    style="margin-left: 20px;">3.テスト</a></li>
                        </ol>
                    </li>
                </ol>
            {{-- </div> --}}
        </div>


       @yield('content')


    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>


    </div>

</body>
<script>




    function togglediv(id) {
      document.querySelectorAll(".TableBody").forEach(function(ol) {


        if (ol.id == id) {

         //document.getElementById(id).classList.add('label2');
          //setTimeout(function(){
          // Toggle specified DIV
        // ol.li.style.padding="0px 0px 0px 30px";
            //    ol.style.display = ol.style.display == "none" ? "block" : "none";
            ol.style.display="block";
       // document.getElementById("test").style.backgroundColor  = "#ff0000";
        //}, 300);
       // exist();
        }
      else {

          // Hide other DIVs


          ol.style.display = "none";
       //   document.getElementById(ol.id).style.padding = "0px 0px 0px 5px";
        }
      });

      document.querySelectorAll(".testlabel").forEach(function(label) {
         /* alert(label.id);
        alert(id);  */
        if (label.id == id) {
          //alert('same');
         // label.style.backgroundColor="white";

          label.style.padding="0px 0px 0px 27px";

        }
        else{
        //  alert('diff');

       //label.style.backgroundColor="#ebecf0";
        label.style.padding = "0px 0px 0px 0px";

        }

     });
    }

        </script>
  <!-- ======= Footer ======= -->
  {{--  --}}<!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>





  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')"></script>

</body>

</html>
