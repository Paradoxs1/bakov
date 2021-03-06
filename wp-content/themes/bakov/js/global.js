function slider_media(){
  jQuery(".slider-media").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 2e3,
    loop: !0,
    center: !0,
    autoWidth: !0,
    items: 3,
    margin: 10,
    dots: 0,
    nav: !0,
    navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.402 197.402" width="35px" height="70px"><g><g><g><polygon id="arrow" points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></g></g></g></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.413 223.413" width="35px" height="70px"><g><g><g><polygon id="arrow" points="57.179,223.413 51.224,217.276 159.925,111.71 51.224,6.127 57.179,0 172.189,111.71 "/></g></g></g></svg>'],
    navSpeed: 500,
    smartSpeed: 1500,
    video: !0,
    videoHeight: 500
  });
}
function sliderAffiliations(){
  jQuery(".slider-affiliation").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 1200,
    loop: !0,
    items: 1,
    dots: !1,
    margin: 10,
    nav: !0,
    navigation: 1,
    navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.402 197.402" width="35px" height="70px"><g><g><g><polygon id="arrow" points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></g></g></g></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.413 223.413" width="35px" height="70px"><g><g><g><polygon id="arrow" points="57.179,223.413 51.224,217.276 159.925,111.71 51.224,6.127 57.179,0 172.189,111.71 "/></g></g></g></svg>'],
    navSpeed: 200,
    smartSpeed: 1500,
    responsive: {
      320: {
        items: 1
      },
      600: {
        items: 2
      },
      900: {
        items: 3
      },
      1200: {
        items: 4
      },
      1600: {
        items: 5
      },
      1900: {
        items: 6
      }
    }
  })
}
function slider_testimonial(){
  jQuery(".slider-testimonials").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 8e3,
    loop: !0,
    center: !0,
    items: 1,
    margin: 0,
    nav: !0,
    navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.402 197.402" width="35px" height="70px"><g><g><g><polygon id="arrow" points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></g></g></g></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.413 223.413" width="35px" height="70px"><g><g><g><polygon id="arrow" points="57.179,223.413 51.224,217.276 159.925,111.71 51.224,6.127 57.179,0 172.189,111.71 "/></g></g></g></svg>'],
    navSpeed: 500,
    smartSpeed: 1500,
    video: !0,
    videoHeight: 500,
    video: !0,
    onchanged: function () {
      jQuery(".owl-item").find("video").each(function () {
        this.pause()
      })
    }
  });
}
function waypoint_animation(){
  
  var e = new Waypoint({
    element: document.getElementById("slider"),
    handler: function (e) {
      "down" === e ? jQuery(".header-middle-section").slideUp("slow") : jQuery(".header-middle-section").slideDown("fast")
    },
    offset: "0px"
  });
  
  jQuery(window).resize(function () {
    var i = jQuery(window).width();
    991 >= i ? (e.disable(), jQuery(".header-middle-section").show("blind")) : e.enable()
  }), jQuery(window).load(function () {
    var i = jQuery(window).width();
    991 >= i && (e.disable(), jQuery(".header-middle-section").show("blind"))
  });
}


function initPrevDef(e){
  jQuery(e).on("click", function(e) {
    e.preventDefault();
  })
}

function initSlider() {
  var e = jQuery(".slider");
  jQuery(e).owlCarousel({
    autoplay: !0,
    autoplayTimeout: 6e3,
    loop: !0,
    center: !0,
    items: 1,
    margin: 0,
    nav: !0,
    navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.402 197.402" width="35px" height="70px"><g><g><g><polygon id="arrow" points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></g></g></g></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.413 223.413" width="35px" height="70px"><g><g><g><polygon id="arrow" points="57.179,223.413 51.224,217.276 159.925,111.71 51.224,6.127 57.179,0 172.189,111.71 "/></g></g></g></svg>'],
    navSpeed: 500,
    smartSpeed: 1500,
    video: !0,
    videoHeight: 500
  }), e.trigger("initialize.owl.carousel")
}

function initTestimonailsSlider(e) {
  jQuery(".slider2").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 9e3,
    loop: !0,
    center: !0,
    items: 2,
    margin: 0,
    nav: !0,
    navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 29.4" width="10px" height="29.4px"><polygon id="arrow" points="10,29.4 10,23.2 4.2,14.7 10,6.2 10,0 0,14.7 "/></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 29.4" width="10px" height="29.4px"><polygon id="arrow" points="0,0 0,6.2 5.8,14.7 0,23.2 0,29.4 10,14.7 "/></svg>'],
    navSpeed: 500,
    smartSpeed: 1500,
    video: !0,
    videoHeight: 500
  });
}

jQuery(function(){
    var wrapper = jQuery( ".file_upload" ),
        inp = wrapper.find( "input" ),
        btn = wrapper.find( ".button" ),
        lbl = wrapper.find( "mark" );

    inp.focus(function(){
        wrapper.addClass( "focus" );
    }).blur(function(){
        wrapper.removeClass( "focus" );
    });

    var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

    inp.change(function(){
        var file_name;
        if( file_api && inp[ 0 ].files[ 0 ] ) file_name = inp[ 0 ].files[ 0 ].name;
        else file_name = inp.val().replace( "C:\\fakepath\\", '' );

        if( !file_name.length ) return;

        if( lbl.is( ":visible" ) ){lbl.text( file_name );}
        else btn.text( file_name );
        
    }).change();

});

jQuery("document").ready(function(){
  
  jQuery(".accordeon div, .accordeon-block div, .accordeon-big div").hide().prev().click(function() {
      jQuery(this).parent().find("div").not(this).slideUp().prev().removeClass("active");
      jQuery(this).next().not(":visible").slideDown().prev().addClass("active");
  });
  
  jQuery(".phone").inputmask('+9 (999) 999-99-99');
  
 
  if(".visible:visible"){
      jQuery("#nav-icon3").click(function(){
        jQuery(this).toggleClass("open").parents('header').find('.menu-container .ubermenu-responsive-toggle').click();
      });
  }
  
  jQuery(".get-social-mobile h4").click(function(){
      jQuery(this).toggleClass("rotated");
      jQuery(this).parents('.social').find('.hide-on-mibile').slideToggle();
  });
  
  
  jQuery('.gallery, .gallery-image').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300,
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
  
  jQuery('.inline-popups').magnificPopup({
	  delegate: 'a',
	  removalDelay: 500,
	  callbacks: {
	    beforeOpen: function() {
	       this.st.mainClass = this.st.el.attr('data-effect');
	    }
	  },
	  midClick: true
	});
  
  
  jQuery('.view-img>a').click(function(e){
    e.preventDefault();
    jQuery(this).toggleClass('active').next().slideToggle();
    if(jQuery(this).hasClass('active')){
      jQuery(this).find('span').text('Скрыть оригинал ');
    }else{
      jQuery(this).find('span').text('Смотреть оригинал');
    }
  });
  
 
 
 jQuery('.gallery-filter .submit').click(function(){
      jQuery(this).addClass('active').siblings().removeClass('active');
      jQuery.ajax({
            type: "POST",
            url: "page-gallery.php",
            data: jQuery(this).serialize()
        });
});
  
        
  
  
  jQuery("select").select2();
  
  jQuery(".file_upload input" ).triggerHandler("change");
  
  var e = jQuery(document).scrollTop();
  
  initPrevDef(), initSlider(), slider_testimonial(), slider_media(), sliderAffiliations(), waypoint_animation();
  
});

if(jQuery('.map-container').hasClass('clearfix')){
   ymaps.ready(function(){
      var Map = new ymaps.Map("map",{
              center: [55.761745, 37.617521],
              zoom: 12
          }, {
              searchControlProvider: 'yandex#search'
          });
      
       Map.geoObjects
         .add(new ymaps.Placemark([55.774907, 37.621597], {
              balloonContent: 'Медицинский центр <br>эстетической хирургии "Медланж"',
              hintContent: 'Медицинский центр <br>эстетической хирургии "Медланж"'
          }, {
              preset: 'islands#dotIcon',
              iconColor: '#ff3029'
          }))
         .add(new ymaps.Placemark([55.765529, 37.639195], {
              balloonContent: 'Медицинский центр <br>"ДокторПластик"',
              hintContent: 'Медицинский центр <br>"ДокторПластик"'
          }, {
              preset: 'islands#dotIcon',
              iconColor: '#ff3029'
          }))
           .add(new ymaps.Placemark([55.773905, 37.598339], {
              balloonContent: 'Клиник а пластической <br>хирургии и косметологии <br>"Арт-Клиник"',
              hintContent: 'Клиник а пластической <br>хирургии и косметологии <br>"Арт-Клиник"'
          }, {
              preset: 'islands#dotIcon',
              iconColor: '#ff3029'
          }))
         
  });
}
