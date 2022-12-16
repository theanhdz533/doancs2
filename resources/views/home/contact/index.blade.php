<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Car</title>

     <!-- Bootstrap core CSS -->
     <link href="{{ URL('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- Additional CSS Files -->
     <link rel="stylesheet" href="{{ URL('css/fontawesome.css') }}">
     <link rel="stylesheet" href="{{ URL('css/style.css') }}">
     <link rel="stylesheet" href="{{ URL('css/owl.css') }}">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
            
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    @include('nav')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Liên Hệ</h1>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Số điện thoại</h4>
              {{-- <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p> --}}
              <a href="#"><br>0961735552</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p></p>
              <a href="#"><br>anhvt.21it@vku.udn.vn</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Địa chỉ</h4>
          
              <a href="#">470 Trần Đại Nghĩa, Quận Ngũ Hành Sơn, TP Đà Nẵng</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Góp ý cho chúng tôi<em> ở đây nhé! </em></h2>
            
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="{{ route('reportMail') }}" method="get">
                @csrf
                <div class="row">
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Góp ý của bạn" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                        @if (Auth::user())
                        <input style="display: none;" type="text" value="{{Auth::user()->username}}" name="mail">
                        <button type="submit" id="form-submit" class="filled-button">Gửi Góp Ý</button>
                        @else
                        <a href="/login" id="form-submit" class="filled-button">Vui lòng đăng nhập</a>
                        @endif
                      
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map" style="margin-top: 50px;">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7470405883555!2d108.250090314724!3d15.974581146210923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421088e365cc75%3A0x6648fdda14970b2c!2zNDcwIMSQxrDhu51uZyBUcuG6p24gxJDhuqFpIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1670514168429!5m2!1svi!2s"  width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Footer Starts Here -->
    @include('footer')

     <!-- Bootstrap core JavaScript -->
   <script src="{{ URL('jquery/jquery.min.js') }}"></script>
   <script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

   <!-- Additional Scripts -->
   <script src=" {{ URL('js/custom.js') }}"></script>
   <script src=" {{ URL('js/owl.js') }} "></script>
   <script src=" {{ URL('js/slick.js') }}"></script>
   <script src="{{ URL('js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>