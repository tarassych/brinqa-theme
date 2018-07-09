jQuery(function ($) {

    new WOW().init({mobile: false});

    //  MAIN OWL SLIDER
    if ( $(".main-slider").length > 0 )
    {
        var main_slider = $(".main-slider")
        main_slider.owlCarousel({
            loop:true,
            autoplay: true,
            autoplayTimeout: 10000,
            items: 1,
            nav: true,
            dots: true
        });
        main_slider.on('translate.owl.carousel', function(event) {
            var this_slide = $(this);
            $(".slide-text", this_slide).animate({opacity: 0}, 100);
        });
        main_slider.on('translated.owl.carousel', function(event) {
            var this_slide = $(this);
            $(".slide-text", this_slide).animate({opacity: 1}, 500);
        });
    }


    // CLIENTS OWL SLIDER
    if ( $(".clients-slider").length > 0 )
    {
        $(".clients-slider").owlCarousel({
            loop:true,
            autoWidth: true,
            nav: false,
            dots: false,
            autoplay: true,
            responsive:{
                0:{
                    items:3,
                    margin:10,
                    autoplay: false,
                },
                544:{
                    items:3,
                    margin:20,
                },
                992:{
                    items:5,
                    margin:50
                }
            }
        });
    }

    // CUSTOM SLIDER FOR PRODUCTS
    if ( $(".products-slider").length > 0 )
    {
        function active_product_image(product)
        {
            var slider = product.closest(".products-slider");
            var selected_product_img = $(".product-image-selected", slider);

            $(".icon-link.active", slider).removeClass('active');
            $(".icon-link", product).addClass('active');

            var active_slide_img = $(".product-image", product);
            var big_image = $("<img/>").attr('src', active_slide_img.attr('src')).addClass('wow').addClass('bounceInRight');
            selected_product_img.empty().append(big_image);
        }

        // process click on product
        $(".products-slider .icon-link").click(function(){
            active_product_image($(this).closest('.one-product-desc'));
            return false;
        });

        // make first product active
        active_product_image($(".products-slider .one-product-desc").first());

    }

    // PLAY VIDEO IN MODAL
    if ( $('#video-modal').length > 0 )
    {
        $(".watch-link").click(function(){
            var youtube_url = $(this).attr('data-youtube');
            $("#video-modal iframe").attr("src", youtube_url);
            // $("#video-modal").show();

            // return false;
            return true;
        });

        $('#video-modal').on('hidden.bs.modal', function () {
            $("#video-modal iframe").attr("src", $("#video-modal iframe").attr("src"));
        });
    }

    // TWITTER OWL SLIDER
    if ( $(".twitter-slider").length > 0 )
    {
        $(".ctf-tweets").owlCarousel({
            nav: true,
            dots: false,
            items:1,
            autoplay: false,
        });
    }

    // VACATIONS PAGE ONLY
    if ( $(".jobs").length > 0 )
    {
        $(".job-read-more-btn").click(function(){
            var one_job = $(this).closest(".one-job");
            $(this).hide();

            $(".hidden-job-content", one_job).slideDown(500);

            return false;
        });
    }

    // RESOURCES PAGE ONLY
    if ( $(".custom-cat-link").length > 0 )
    {
        // event fired when back button in browser clicked or any of resources categories links clicked
        window.onhashchange = function() {
            var hash = location.hash.substr(1);

            if ( $('#custom-cat-'+hash).length > 0 )
            {
                var cat_link = $('#custom-cat-'+hash);
                var second_nav = cat_link.closest('.second-nav-section');

                $("li.active", second_nav).removeClass('active');
                cat_link.closest('li').addClass('active');


                new WOW({boxClass: 'wowResource'}).init();

                var category_to_show = cat_link.attr('data-cat-slug');
                if ( category_to_show == 'all' )
                {
                    $(".cat-element").show();
                }
                else
                {
                    $(".cat-element").hide();
                    $(".cat-"+category_to_show).show();
                }
            }
        }

        // load preselected resource category by hashtag, happens on page just loaded or refreshed
        var hash = location.hash.substr(1);
        if ( $('#custom-cat-'+hash).length > 0 )
        {
            window.onhashchange();
        }
        else
        {
            window.location.hash = $(".second-nav:first-child li:first-child .custom-cat-link").attr('href');
        }
    }


    // flip CLIENTS
    var cards_to_show = 6;
    if($(document).width() <= 480){
      $('.single-client:nth-child(5), .single-client:nth-child(6)').addClass('hidden');
      cards_to_show = 4;
    }
    $('.single-client').flip({
			trigger: 'manual',
			speed: 300
		});
		var old_tile = 0;
		var new_tile = 0;
		var clients_count = $('.single-client').length;
		setTimeout(function(){
			setInterval(function(){
				new_tile = Math.floor(Math.random() * cards_to_show) + 1;
				while(old_tile == new_tile){
					var new_tile = Math.floor(Math.random() * cards_to_show) + 1;
				}
				old_tile = new_tile;
				var new_client_number = Math.floor(Math.random() * (clients_count - cards_to_show)) + cards_to_show + 1;
				var new_logo = $('.single-client:nth-child(' + new_client_number + ') .front img').attr('src');
				var old_logo = $('.single-client:nth-child(' + new_tile + ') .front img').attr('src');
				$('.single-client:nth-child(' + new_client_number + ') .front img').attr('src', old_logo);
				$('.single-client:nth-child(' + new_client_number + ') .back img').attr('src', old_logo);
				$('.single-client:nth-child(' + new_tile + ')').flip('toggle');
				$('.single-client:nth-child(' + new_tile + ') .front img').attr('src', new_logo);
				$('.single-client:nth-child(' + new_tile + ') .back img').attr('src', new_logo);
			},2000);
		}, 5000);
});
