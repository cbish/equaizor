<!DOCTYPE html>
<html lang="en"  class="full-screen">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 
   <title>Equalizor</title>

   <!-- Bootstrap CSS-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom Site CSS -->
   <link href="css/global.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!-- jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- GreenStock -->
   <script src="js/greenstock/TweenMax.min.js"></script>
   <!-- ScrollMagic -->
   <script src="js/scrollmagic/ScrollMagic.min.js"></script>
   <script src="js/scrollmagic/plugins/animation.gsap.min.js"></script>
   <script src="js/scrollmagic/plugins/debug.addIndicators.min.js"></script>

</head>
<body class="full-screen">

   <main class="full-screen" role="main">

      <div class="full-screen" id="pinContainer">
         <div class="full-screen" id="slideContainer">
            <section class="pane side-pane full-screen blue" id="left-pane">
               <b>ONE</b>
            </section>
            <section class="pane center-pane full-screen red" id="center-pane">
               <b>TWO</b>
            </section>
            <section class="pane side-pane full-screen orange">
               <b>THREE</b>
            </section>
<!--             <section class="pane full-screen yellow">
               <b>FOUR</b>
            </section> -->
         </div>
      </div>

   </main>

   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Custom Site JS -->
   <script src="js/global.js"></script>
</body>
</html>