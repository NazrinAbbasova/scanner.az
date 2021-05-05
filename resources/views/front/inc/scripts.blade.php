<!-- ========================= JS here ========================= -->
<script src="{{ asset('static/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('static/front/js/count-up.min.js') }}"></script>
<script src="{{ asset('static/front/js/wow.min.js') }}"></script>
<script src="{{ asset('static/front/js/tiny-slider.js') }}"></script>
<script src="{{ asset('static/front/js/glightbox.min.js') }}"></script>
<script src="{{ asset('static/front/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('static/front/js/isotope.min.js') }}"></script>
<script src="{{ asset('static/front/js/main.js') }}"></script>
  
<script type="text/javascript">
    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

    //======== Testimonial Slider
    var slider = new tns({
      container: '.testimonial-slider',
      slideBy: 'page',
      autoplay: false,
      mouseDrag: true,
      gutter: 0,
      items: 1,
      nav: true,
      controls: false,
      controlsText: [
        '<i class="lni lni-arrow-left prev"></i>',
        '<i class="lni lni-arrow-right next"></i>'
      ],
      responsive: {
        1200: {
          items: 1,
        },
        992: {
          items: 1,
        },
        0: {
          items: 1,
        }

      }
    });
</script>