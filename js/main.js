$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});
// Carosel


// MOBILE MENU
		$('.navbar-nav .nav-item a').on('click', function(e) {
			$(this).parent().children('.navbar-nav .dropdown-menu, .navbar-nav .sub-dropdown-menu').slideToggle(300);
			return true;
	  	});
		
		// TREE MENU
		$('.sandwich-menu .nav-menu li a').on('click', function(e) {
	  	$(this).parent().children('.sandwich-menu .dropdown').slideToggle(300);
        return true;
		  });
		  

var $slider = $(".slider"), $bullets = $(".bullets");
		function calculateHeight(){
			var height = $(".slide.active").outerHeight();
			$slider.height(height);
		}

		$(window).resize(function() {
			calculateHeight();
		    clearTimeout($.data(this, 'resizeTimer'));
		});
		
		function resetSlides(){
			$(".slide.inactive").removeClass("inactiveRight").removeClass("inactiveLeft");
		}

		function gotoSlide($activeSlide, $slide, className){
			 $activeSlide.removeClass("active").addClass("inactive "+className);
			 $slide.removeClass("inactive").addClass("active");
			 calculateHeight();
			 resetBullets();
			 setTimeout(resetSlides, 300);
		}

		$(".next").on("click", function(){
			 var $activeSlide = $(".slide.active"),
				 $nextSlide = $activeSlide.next(".slide").length != 0 ? $activeSlide.next(".slide") : $(".slide:first-child");
				 console.log($nextSlide);
				 gotoSlide($activeSlide, $nextSlide, "inactiveLeft");
		});
		$(".previous").on("click",  function(){
			 var $activeSlide = $(".slide.active"),
				 $prevSlide = $activeSlide.prev(".slide").length != 0 ? $activeSlide.prev(".slide") : $(".slide:last-child");

				 gotoSlide($activeSlide, $prevSlide, "inactiveRight");
		});
		$(document).on("click", ".bullet", function(){
			if($(this).hasClass("active")){
				return;
			}
			var $activeSlide = $(".slide.active");
			var currentIndex = $activeSlide.index();
			var targetIndex = $(this).index();
			console.log(currentIndex, targetIndex);
			var $theSlide = $(".slide:nth-child("+(targetIndex+1)+")");
			gotoSlide($activeSlide, $theSlide, currentIndex > targetIndex ? "inactiveRight" : "inactiveLeft");
		})
		function addBullets(){
			var total = $(".slide").length, index = $(".slide.active").index();
			for (var i=0; i < total; i++){
				var $bullet = $("<div>").addClass("bullet");
				if(i==index){
					$bullet.addClass("active");	
				}
				$bullets.append($bullet);
			}
		}
		function resetBullets(){
			$(".bullet.active").removeClass("active");
			var index = $(".slide.active").index()+1;
			console.log(index);
			$(".bullet:nth-child("+index+")").addClass("active");
		}
		addBullets();
		calculateHeight();	
		
		
		
		
		
		
		
		// SANDWICH BUTTON
		$('.sandwich-btn').on('click', function(e) {
			$(this).toggleClass("open")
			$(".sandwich-menu").toggleClass("open")
			});


			  /// some script

    // jquery ready start
    $(document).ready(function () {
		// jQuery code
  
		//////////////////////// Prevent closing from click inside dropdown
		$(document).on('click', '.dropdown-menu', function (e) {
		  e.stopPropagation();
		});
  
  
	  }); // jquery end



	  var swiper = new Swiper('.swiper-container', {
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: {
		  delay: 2500,
		  disableOnInteraction: false,
		},
		// pagination: {
		//   el: '.swiper-pagination',
		//   clickable: false,
		// },
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	  });

	  $(document).ready(function(){
		$(".owl-carousel").owlCarousel();

			//default settings:
			autoplay:false
			autoplayTimeout:5000
			autoplayHoverPause:false

			
	  });

	  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:5,
    loop:true,
    margin:100,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});		

// counter js

$('.counter').counterUp({
          
});

// Industries We Impact jquery

$(document).ready(function(){
	$('.industries_wrap > div > div > div >.img-1').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/travel.jpg',
			'alt':'Travel & Hospitality'
		});
	});

	$('.industries_wrap > div > div > div > .img-2').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/E-commerce.jpg',
			'alt':'Retail & Ecommerce'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-3').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/online.jpg',
			'alt':'Education'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-4').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/healthcare.jpg',
			'alt':'Healthcare'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-5').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/digital.jpg',
			'alt':'Digital Marketing'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-6').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/solution.jpg',
			'alt':'On-Demand Solutions'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-7').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/construction.jpg',
			'alt':'Construction'
		});
	});
	
	$('.industries_wrap > div > div > div > .img-8').click(function(){
		$('.industries-img > img').attr({
			'src':'images/Industries/food-tech.jpg',
			'alt':'Food Tech'
		});
	});
	
	
});