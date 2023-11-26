
$(document).ready(function(){
    $(".content").slice(0, 6).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content:hidden").slice(0, 3).slideDown();
      if($(".content:hidden").length == 0) {
        $("#loadMore").text("").addClass("noContent");
      }
    });
    
  })
  
          // toggle
          document.querySelector('.toggle_btn')
          .addEventListener('click', function() {
          this.classList.toggle('activate');
          });
      
          // monkey slider
          $(document).ready(function () {
          $(".monkey_carousel").owlCarousel(
          {
              items: 1,
              autoplayHoverPause: true,
              loop: true,
              autoplay: true,
              autoplayTimeout: 10000,
              smartSpeed: 1000,
              nav: true,
              navText: [
                  "<i class='fa-solid fa-angle-left'></i>",
                  "<i class='fa-solid fa-angle-right'></i>",
              ],
          }
      );
          });
          // video slider
          $(document).ready(function () {
              $(".service_carousel").owlCarousel(
                  {
                      items: 1,
                      autoplayHoverPause: true,
                      loop: true,
                      autoplay: true,
                      autoplayTimeout: 5000,
                      smartSpeed: 1000,
                      nav: false,
                      dots:true,
                      // navText: [
                      //     "<i class='fa-solid fa-angle-left'></i>",
                      //     "<i class='fa-solid fa-angle-right'></i>",
                      // ],
                  }
              );
          });
          // testimonial slider
          $(document).ready(function () {
              $(".whydo_slider").owlCarousel(
                  {
                      items: 1,
                      loop: true,
                      autoplayTimeout: 10000,
                      smartSpeed: 1000,
                      nav: true,
                      navText: [
                          "<i class='fa-solid fa-angle-left'></i>",
                          "<i class='fa-solid fa-angle-right'></i>",
                      ]
                  }
              );
          });
          // testimonial slider
          $(document).ready(function () {
              $(".test_slider").owlCarousel(
                  {
                      items: 1,
                      loop: true,
                      autoplayTimeout: 3000,
                      smartSpeed: 500,
                      nav: true,
                      navText: [
                          "<i class='fa-solid fa-angle-left'></i>",
                          "<i class='fa-solid fa-angle-right'></i>",
                      ],
                      responsive : {
                      768 : {
                          items: 3,
                      }
                  }
                  }
              );
          });
  
      // stckiy header
      $(function(){	
      var cubuk_seviye = $(document).scrollTop();
      var header_yuksekligi = $('.yapiskan').outerHeight();
  
      $(window).scroll(function() {
          var kaydirma_cubugu = $(document).scrollTop();
  
          if (kaydirma_cubugu > header_yuksekligi){$('.yapiskan').addClass('gizle');} 
          else {$('.yapiskan').removeClass('gizle');}
  
          if (kaydirma_cubugu > cubuk_seviye){$('.yapiskan').removeClass('sabit');} 
          else {$('.yapiskan').addClass('sabit');}				
      
  
          cubuk_seviye = $(document).scrollTop();	
       });
  });
  
  
  //  wow js
  new WOW().init();
  