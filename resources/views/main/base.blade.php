<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magazin</title>
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
        
        <link href="{{ asset("css/style_products.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/responsive.css") }}" rel="stylesheet" >
        
        <link href="{{ asset("css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/w3_1.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/fonts.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/font-awesome.css") }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--Icons -->
        <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
        <!-- token-->
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <script type="text/javascript">
        $.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        </script>
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    </head>
    <body>

<!-- Navigation Bar -->
<ul class="w3-navbar w3-white w3-large">
  <li><a href="{{URL("/")}}" class="w3-red"><i class="glyphicon glyphicon-home w3-margin-right"></i>Logo</a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-vk"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-odnoklassniki-square"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-instagram w3-hover-text-purple"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-facebook-official w3-hover-text-indigo"></i> 	</a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-skype"></i></a></li>
</ul>

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/sac.jpg" alt="The Hotel" style="min-width:100px" width="100%" height="500">
  <div class="w3-display-left w3-col m6">
  <div class="w3-container w3-white w3-padding-0">
	<video width="100%" >
	  <source src="video/sp1.mp4" type="video/mp4">
	  <source src="mov_bbb.ogg" type="video/ogg">
	</video>
  </div>
  </div>
  <div class="w3-display-right w3-col m4">
	<div class="w3-container w3-white">
            <h2><i class="glyphicon glyphicon-info-sign w3-margin-right"></i>Informatii</h2>
        </div>
        <div class="w3-container w3-red">
            <h2>+373-79-123-321</h2>
        </div>
      <div class="w3-container w3-white w3-padding-16">
      <form action="form.asp" target="_blank">
        <div class="w3-row-padding">
          <div class="w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Telefon</label>
            <input class="w3-input w3-border" type="text" placeholder="Telefon" name="CheckIn" required>
          </div>
        </div>
        <div class="w3-row-padding">
          <div class="w3-margin-bottom">
            <label><i class="fa fa-male"></i> E - mail</label>
            <input class="w3-input w3-border" type="e-mail"  name="e-mail" placeholder="E - mail">
          </div>
        </div>
      </form>
    </div>
        <div class="w3-container w3-white contactare">
              <button class="telefon btn btn btn-primary"><i class="glyphicon glyphicon-earphone w3-margin-right"></i>Telefona-ti!</button>
        </div>
  </div>
  
</header>
<!-- Page content -->
<section class="product_area section-padding">
    <!--Un produs -->
    @for($i=1;$i<=3;$i++)
    <div class="col-md-12">
        <div class="row">
            <div class="padding_right main_single_product">
                <div class="single_product">
                    <div class="product_img">
                        <img src="{{asset('images/sac1.jpg')}}" class="img-responsive img-rounded ">
                        <div class="product_color">
                            <div class="materiale">
                                <div class="color materie-1">
                                </div>
                                <div class="color materie-2">
                                </div>
                                <div class="color materie-3">
                                </div>
                                <div class="color materie-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding_left main_single_product">
                <div class="single_product single_product_two">
                    <div class="product_img">
                        <img src="{{asset('images/sac1.jpg')}}" class="img-responsive img-rounded ">
                    </div>
                    <div class="product_text_two product_text">
                        <h1>Product {{$i}}</h1>
                        <p>100% COMBED COTTON</p>
                        <p>COLOR: DARK BLUE</p>
                        <p>ROUND NECK & HALF SLEEVES</p>
                        <p>Classic fit, slightly long</p>
                        <p>GSM: 180</p>
                        <p>PRICE: $ 21.99</p>
                        <a class="shop_now_btn" href="#">Cumpara acum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End produs -->
    @endfor
</section>



<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
    <i class="fa fa-instagram w3-hover-text-purple"></i>
    <i class="fa fa-snapchat w3-hover-text-yellow"></i>
    <i class="fa fa-pinterest-p w3-hover-text-red"></i>
    <i class="fa fa-twitter w3-hover-text-light-blue"></i>
    <i class="fa fa-linkedin w3-hover-text-indigo"></i>
  </div>	
</footer>
</body>
</html>
