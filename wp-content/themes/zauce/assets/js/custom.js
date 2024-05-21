$(document).ready(function() {


    // $('.successmessage').html('<p>this is testing text</p>');
    // setTimeout(function(){
    // $('.successmessage').html('<p>this is testing text</p>').hide();
    // },3000);

    $('#joinzauceteam').validate({
        rules: {
            first_name: {
              required: true,
              minlength: 3
            },
            last_name: {
              required: true,
              minlength: 3
            },
            country: {
              required: false,
              minlength: 3
    
            },
            city: {
              required: false,
             minlength:3
            },
            role: {
              required: false,
            },
            dob:{
                required:false,
            },
            link1:{
                required:false,
                url: true,
                
            },
            link2:{
                required:false,
                url:true,
               
            },
            link3:{
                required:false,
                url:true,
               
            }
    
        },
        messages: {
            first_name: {
                required: 'Please enter first name.',
                minlength: "Name should be at least 3 characters"
            },
            last_name: {
                required: 'Please enter last name.',
                minlength: "Name should be at least 3 characters"
            },
            country: {
              
            },
            city: {
              
            },
            role: {
              
            },
            dob:
            {
               
            },
            link1 :
            {
                // url: "Please enter a valid URL."
            },
            link2 :
            {
                // url: "Please enter a valid URL."
            },
            link3 :
            {
                // url: "Please enter a valid URL."
            }
        },
        submitHandler: function (form,e) {
            e.preventDefault(); 
            var formData = $(form).serialize();
            $("span").addClass("spinner");
    
            $.ajax({
                type: 'POST',
                url: ajaxurl, // Use the AJAX URL provided by WordPress
                dataType: 'json',
                data: {
                    action: 'join_zauce_team', // Replace with your AJAX action name
                    data: formData
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    console.log(response.message);
                     $("#joinzauceteam")[0].reset();
                     $("span").removeClass("spinner");
                      // Display the message
        $('.successmessage').text('Form submitted successfully!').fadeIn().delay(3000).fadeOut();
                }
            });
    
        }
    });
    

    // Become Partner

    $('#becomezauce').validate({
        
        rules: {
            name: {
              required: true,
              minlength: 3
            },           
            phone: {
              required: true,
              minlength: 14, // Change this value as per your requirements

            },
            email: {
                required: true,
                email: true
              },
            business: {
              required: false
            },
            url: {
                required:false,
                url: true // Ensures the field contains a valid URL
            },
            fileurl :
            {
                required:false,
            }
        },
        messages: {
            name: {
                required: 'Please enter name.',
                minlength: "Name should be at least 3 characters"
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Phone number must be at least 10 digits long",
            },
            email: {
              required: 'Please enter email address.',
              email: 'Please enter a valid email address.',
            },
            business: {
              required: 'Please enter your business detail.',
            },
            url:{
                url: "Please enter a valid URL." // Custom message for invalid URL
            },
            fileurl: {
                
            }

        },
        submitHandler: function (form,e) {
            e.preventDefault(); 
            var formData = $(form).serialize();
            // const sbtn = document.getElementById('sbtn');
            // sbtn.classList.add('processing');

            // setTimeout(function()
            // {
            //         setTimeout.classList.remove('processing');
            // },2000);
            
            $("span").addClass("spinner");
      
            $.ajax({
                type: 'POST',
                url: ajaxurl, // Use the AJAX URL provided by WordPress
                dataType: 'json',
                data: {
                    action: 'become_affiliatzauce', // Replace with your AJAX action name
                    data: formData
                },
                success: function(response) {           
                    // Handle the response from the server
                    $("#becomezauce")[0].reset();
                  
                        $("span").removeClass("spinner");
                        $('.successmessage').html('<p>'+response.message+'</p>'); // Clear any previous error message
                        setTimeout(function(){
                            $('.successmessage').html('<p>'+response.message+'</p>').hide();// Clear any previous error message
                        },3000);
                    console.log(response);
                    console.log(response.message);
                }
            });

        }
    });

    // Logo Upload 

    $('body').on('change', '#uploadFile', function() {
        $this = $(this);
        file_data = $(this).prop('files')[0];
        form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('action', 'file_upload');
        form_data.append('security', blog.security);
 
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            success: function (response) {
                $this.val('');
                // alert('File uploaded successfully.');
                $('#fileurl').val(response.cxc_image_url);
            }
        });
    });

    


    if ($('body.homePage').length) {

        $('.app-screenshot-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 2000,
            autoplay: true,
            autoplaySpeed: 1000,
            //cssEase: 'linear',
            pauseOnHover: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]
        });


        $('.app-screenshot-slider').slick('slickPause');



        $(window).scroll(function(e) {
            var scrollPos = $(document).scrollTop();
            var appScreenshotPo = $('#app-screenshot').offset().top - 80;
            var appScreenshotBtm = Number($('#app-screenshot').offset().top) + Number($('#app-screenshot').height());

           if (appScreenshotPo == scrollPos || (appScreenshotPo < scrollPos && appScreenshotBtm > scrollPos)) {
              appScreenshot();
            }
        });


        function appScreenshot() {

            if (appScreenshot.added) {
                return;
            }

            $('.app-screenshot-slider').slick('slickPlay');
            appScreenshot.added = true;
        }

    }



    // scroll hide and show

    $('.navbar-nav li a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("no-scroll");
    });

    $(".header-menu ul li a").click(function() {
        $("body").removeClass("no-scroll");
    });

    // sidebar hide and show js

    $(".findmore-click").click(function() {
        $("#findout_info").toggleClass("open");
        $("#become_ap_form").toggleClass("close");
        $("#sidebar_form_info").scrollTop(0);
    });

    $("#affiliate .btn-close").click(function() {
        $("#findout_info").removeClass("open");
        $("#become_ap_form").removeClass("close");
    });

    // top nav header scroll active class add start

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header-main").addClass("active");
        } else {
            $(".header-main").removeClass("active");
        }
    });
    // top nav header scroll active class add end


    // scroll to add class js end

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('#menu-center li.nav-item a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            
            //console.table(refElement.position().top, scrollPos, refElement.position().top + refElement.height(), scrollPos);

            if (refElement.position().top - 50 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center li.nav-item a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }

    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50
        }, 500, 'swing', function() {
            //window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });


    

    // $(".features-slider").slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     infinite: false,
    //     autoplay: false,
    //     autoplaySpeed: 1500,
    //     arrows: false,
    //     dots: false,
    //     vertical: true,
    //     swipe: true,
    //     touchMove: true,
    //     verticalScrolling: true,
    //     pauseOnHover: false
    // });

});



// const slider = $(".features-slider");

// slider.on("wheel", function (e) {
//   var slideCount = $(this)[0].slick["slideCount"];
//   var currentIndex = $(this).slick("slickCurrentSlide");
//   var totalSildeToShow = $(this)[0].slick.options["slidesToShow"];

//   if (e.originalEvent.deltaY < 0) {
//     e.preventDefault();
//     $(this).slick("slickPrev");
//   } else {
//     if (slideCount - totalSildeToShow === currentIndex) return;
//     e.preventDefault();
//     $(this).slick("slickNext");
//   }



// });





$(window).on('load',function(){
    setTimeout(function(){ 
    $('.page-loader').fadeOut('slow');
    });
});




$(document).ready(function() {


    if ($('body.homePage').length) {

        const slider = $('.features-slider');

        function onSliderAfterChange(event, slick, currentSlide) {
            $(event.target).data('current-slide', currentSlide);
        }

        function onSliderWheel(e) {
            var deltaY = e.originalEvent.deltaY,
                $currentSlider = $(e.currentTarget),
                currentSlickIndex = $currentSlider.data('current-slide') || 0;

            if (
                (deltaY < 0 && currentSlickIndex == 0) ||
                (deltaY > 0 && currentSlickIndex == $currentSlider.data('slider-length') - 1)
            ) {
                return;
            }
            e.preventDefault();
            if (e.originalEvent.deltaY < 0) {
                $currentSlider.slick('slickPrev');
            } else {
                $currentSlider.slick('slickNext');
            }
        }

        slider.each(function(index, element) {
                var $element = $(element);
                $element.data('slider-length', $element.children().length);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                vertical: true,
                swipe: true,
                touchMove: true,
                verticalScrolling: true,
                pauseOnHover: false
            })
            .on('afterChange', onSliderAfterChange)
            .on('wheel', onSliderWheel);
            

        $('.features-slider').slick('slickPause');


        
            var hold = false;
            
            $('.features-slider').slick(function() {
              slider.slick("slickSetOption", "accessibility", hold);
              slider.slick("slickSetOption", "draggable", hold);
              slider.slick("slickSetOption", "swipe", hold);
              slider.slick("slickSetOption", "touchMove", hold);
              
              hold = !hold;
              
              $(this).toggleClass("disabled");
            });



        $(window).scroll(function(e) {
            var scrollPos = $(document).scrollTop();
            var featuresPo = $('#Features').offset().top - 0;
            var featuresBtm = Number($('#Features').offset().top) + Number($('#Features').height());

            if (featuresPo == scrollPos || (featuresPo < scrollPos && featuresBtm > scrollPos)) {
                features();
            }
        });


        function features() {

            if (features.added) {
                return;
            }

            $('.features-slider').slick('slickPlay');
            features.added = false;
        }

    }



});


