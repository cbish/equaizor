// init
  var controller = new ScrollMagic.Controller();

  // define movement of panels
  var wipeAnimation = new TimelineMax()
      // animate to second panel
      .to("#slideContainer", 1,   {x: "-25%"})
      // animate to third panel
      .to("#slideContainer", 1,   {x: "-50%"})

  // create scene to pin and link animation
  var scene = new ScrollMagic.Scene({
    triggerElement: "#pinContainer",
    triggerHook: "onLeave",
    duration: "1000%" //scroll speed
  })
    .progress("50%")
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
    .addIndicators() // add indicators (requires plugin)
    .addTo(controller);


$(document).ready(function(){
    $('html, body').animate({
        scrollTop: 0
    }, 1);

    $('html, body').animate({
        scrollTop: 4670
    }, 2000);

    $('html, body').animate({
        scrollTop: $(document).height()
    }, 2000);

    $('html, body').animate({
        scrollTop: 4670
    }, 800);
});
