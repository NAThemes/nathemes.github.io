jQuery(function($) {
"use strict";
  
    // Masonry grid
    if($('.grid_projects').length){
        $('.grid_projects').imagesLoaded( function() {
            $('.grid_projects').masonry({
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer',
                itemSelector: '.grid-projects-item',
                percentPosition: true
            });
        });
    }


    //About Page Video popup.
    if($('.venobox_video_link').length) {
        $('.venobox_video_link').venobox();
    }


    /* Menu Pop Search */
    if($('.menu_pop_search').length){
        $('.search_open_button').on('click',function(e){
            e.preventDefault();
            $('.pop_search_form_container').css('display','block');
        });
        $('.close_the_form').on('click',function(e){
            e.preventDefault();
            $('.pop_search_form_container').css('display','none');
        });
    }

    if($('.slider_class_guide').length){
        $('.slider_class_guide').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true,
            nextArrow: '.next_slide',
            prevArrow: '.previous_slide'
        });
    }
    if($('.about_slider').length){
        $('.about_slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true
          });
          $('.about_slider').on('init', function(event, slick){
            var currentIndex = $('.slick-current').data('slick-index') + 1;
            var slide_data = $('.slick-current .hidden_data').html();

            $('.current_slide').text(currentIndex);
            $('.partner_contents_data').html(slide_data);

        });


        $('.about_slider').on('afterChange', function(event, slick){

            var currentIndex = $('.about_slider').slick('slickCurrentSlide');
            var slide_data = $('.slick-current .hidden_data').html();

            $('.current_slide').text(currentIndex + 1);
            $('.partner_contents_data').html(slide_data);
        });
    }
    //Post Animation
    AOS.init();

    $('.wp-post-image').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
    });
});

const navSlide = () => {
    const burger = document.querySelector('.hamburger');
    const nav = document.querySelector('.main_menu');

    burger.addEventListener('click', () => {
    nav.classList.toggle('nav-active');
    burger.classList.toggle('toggle');
    });
}

navSlide();
