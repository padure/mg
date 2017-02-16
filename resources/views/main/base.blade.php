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
    <body class="w3-light-grey">

<!-- Navigation Bar -->
<ul class="w3-navbar w3-white w3-large">
  <li><a href="#" class="w3-red"><i class="glyphicon glyphicon-home w3-margin-right"></i>Logo</a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-vk"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-odnoklassniki-square"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-instagram w3-hover-text-purple"></i></a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-facebook-official w3-hover-text-indigo"></i> 	</a></li>
  <li class="w3-right"><a href="#"><i class="fa fa-skype"></i></a></li>
</ul>

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col m6">
  <div class="w3-container w3-white w3-padding-0">
	<video width="100%" >
	  <source src="video/sp1.mp4" type="video/mp4">
	  <source src="mov_bbb.ogg" type="video/ogg">
	</video>
  </div>
  </div>
  <div class="w3-display-right w3-padding w3-col m4">
	<div class="w3-container w3-white">
      <h2><i class="glyphicon glyphicon-info-sign w3-margin-right"></i>Informatii</h2>
    </div>
    <div class="w3-container w3-red">
      <h2><i class="glyphicon glyphicon-earphone w3-margin-right"></i>Contactatine</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="form.asp" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
        </div>
      </form>
    </div>
  </div>
  
</header>
,.asasasasasasas
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
