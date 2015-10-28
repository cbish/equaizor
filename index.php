<!DOCTYPE html>
<html lang="en">
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
   <!-- ScrollMagic -->
   <script src="js/scrollmagic/ScrollMagic.min.js"></script>
   <script src="js/scrollmagic/plugins/animation.gsap.min.js"></script>
   <script src="js/scrollmagic/plugins/debug.addIndicators.min.js"></script>
   <!-- GreenStock -->
   <script src="js/greenstock/TweenMax.min.js"></script>

</head>
<body>

  

<style type="text/css">
   #pinContainer {
      width: 100%;
      height: 100%;
      overflow: hidden;
      -webkit-perspective: 1000;
              perspective: 1000;
   }
   #slideContainer {
      width: 400%; /* to contain 4 panels, each with 100% of window width */
      height: 100%;
   }
   .panel {
      height: 100%;
      width: 25%; /* relative to parent -> 25% of 400% = 100% of window width */
      float: left;
   }
</style>
<div id="pinContainer">
   <div id="slideContainer">
      <section class="panel blue">
         <b>ONE</b>
      </section>
      <section class="panel turqoise">
         <b>TWO</b>
      </section>
      <section class="panel green">
         <b>THREE</b>
      </section>
      <section class="panel bordeaux">
         <b>FOUR</b>
      </section>
   </div>
</div>
<script>
   $(function () { // wait for document ready
      // init
      var controller = new ScrollMagic.Controller();

      // define movement of panels
      var wipeAnimation = new TimelineMax()
         // animate to second panel
         .to("#slideContainer", 0.5, {z: -150})    // move back in 3D space
         .to("#slideContainer", 1,   {x: "-25%"})  // move in to first panel
         .to("#slideContainer", 0.5, {z: 0})          // move back to origin in 3D space
         // animate to third panel
         .to("#slideContainer", 0.5, {z: -150, delay: 1})
         .to("#slideContainer", 1,   {x: "-50%"})
         .to("#slideContainer", 0.5, {z: 0})
         // animate to forth panel
         .to("#slideContainer", 0.5, {z: -150, delay: 1})
         .to("#slideContainer", 1,   {x: "-75%"})
         .to("#slideContainer", 0.5, {z: 0});

      // create scene to pin and link animation
      new ScrollMagic.Scene({
            triggerElement: "#pinContainer",
            triggerHook: "onLeave",
            duration: "500%"
         })
         .setPin("#pinContainer")
         .setTween(wipeAnimation)
         .addIndicators() // add indicators (requires plugin)
         .addTo(controller);
   });
</script>


   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Custom Site JS -->
   <script src="js/global.js"></script>
</body>
</html>