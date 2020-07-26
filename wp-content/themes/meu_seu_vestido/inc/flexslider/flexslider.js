// Can also be used with $(document).ready()
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    touch: true,
    slideshow: true,
    slideshowSpeed: 7000,
    pauseOnHover	: true,
    directionNav : false
  });
});