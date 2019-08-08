<?php 
// $id = get_the_ID();
//$ids = array("147", "44", "21");
//if (!in_array($id, $ids)) { ?>

<?php // } ?>
<footer>
    <div class="container">
        <div class="separator-box">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-5">
                    <div class="bottomcontent">
                        <img class="brandlogo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Brand Logo"><br/>
                        <p>Edify Class is an online learning community where inspiring teachers interact with young learners and ignite their imagination.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-xs-12 col-md-4">
                    <label class="list-label">Company</label>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-12 col-xs-12 col-md-4">
                    <label class="list-label">About</label>
                    <ul class="footer-links">
                        <li><a href="<?php echo get_site_url(); ?>/#faq-section">FAQs</a></li>
                        <li><a href="/contact-us">Ask us!</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-12 col-xs-12 col-md-4">
                    <label class="list-label">Reach Us</label>
                    <ul class="footer-links">
                        <li><a href="#"><span class="social-link icon-receiver"></span>+91 8287 200 400</a></li>
                        <li><a href="#"><span class="social-link icon-support"></span>hello@edify.com</a></li>
                        <li><a href="#"><span class="social-link icon-facebook"></span>Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rights-reserved">
            <label>© 2019 EdifyClass. All Rights Reserved.</label>
            <a href="#"><img class="t9l-brand" src="<?php echo get_template_directory_uri(); ?>/images/t9l-product-update.svg" /></a>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>

<script>

    $('.selectpicker').selectpicker({
        style: 'btn-dark',
        size: 4
    });
    $('.selectpicker').selectpicker('refresh');
    $(document).ready(function() {
var pageId = '<?php echo get_the_ID(); ?>';
 if(pageId == '21'){
 $('form.wpcf7-form').attr('action','/become-a-teacher/');
} else if(pageId == '44'){
 $('form.wpcf7-form').attr('action','/book-course/');
}else if(pageId == '147'){
 $('form.wpcf7-form').attr('action','/contact-us/');
}
   
        getDayRange(1);
        $('.selectpicker').selectpicker('refresh');
        $("#text-carousel").owlCarousel({

            navigation : false, // Show next and prev buttons
            slideSpeed : 100,
            paginationSpeed : 1000,
            singleItem:true,
            autoPlay:3000,
            pagination: false,
            stopOnHover:true
        });

        // accordian code
        $('.q-a-list > li .question').click(function(){
            $(this).parents('li').toggleClass('opened').siblings('li').removeClass('opened');
            $(this).parents('li').children('.q-answer').slideToggle(500).parents('li').siblings('li').children('.q-answer').slideUp(500);
        });

        // fadeIn effect on scroll
        $('.alteration-box').each(function(){
            if($(window).scrollTop() > $(this).offset().top - $(window).height() + 200){
                $(this).addClass('visible');
            }else{
                $(this).removeClass('visible');
            }
        });
        $(window).scroll(function(){
            $('.alteration-box').each(function(){
                if($(window).scrollTop() > $(this).offset().top - $(window).height() + 200){
                    $(this).addClass('visible');
                }
            });

        });
        
        var boxoffset = $('.movingform .form-box').offset().top;
					var boxheight = $('.form-box').outerHeight();
					var curveheight = $('.form-section .two-curves').outerHeight();
					var curveoffset = $('.form-section .two-curves').offset().top;
					var curveCount = curveoffset + curveheight;
					//alert(curveCount)
					
					$(window).scroll(function(){
						if($(this).scrollTop() > (boxoffset + boxheight) - curveCount + 150){
							$('.two-curves').addClass('move');
							$('.form-section .two-curves').css({
								top:boxheight - 230
							});
						}else{
							$('.two-curves').removeClass('move');
							$('.form-section .two-curves').css({
								top: curveoffset
							});
						}
						
					});
					
					//header mobile menu
					$('.drawer-lines').click(function(){
						$('.header-nav').toggleClass('open-menu');
						$(this).toggleClass('backshade');
					});
    });


</script>

<script>
    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            // disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false
        });

        //header mobile menu
        $('.drawer-lines').click(function(){
            $('.header-nav').toggleClass('open-menu');
            $(this).toggleClass('backshade');
        });

        // card select
        $('.grade-card').click(function(){
            $(this).addClass('selected').parents('.card-holder').siblings('.card-holder').children('.grade-card').removeClass('selected');
        });
    });
</script>
<script type="text/javascript">
        $(document).ready(function() {
            if (window.location.hash) {
                setTimeout(function() {
                    $('html, body').scrollTop(0).show();
                    $('html, body').animate({
                        scrollTop: $(window.location.hash).offset().top - 100
                        }, 500);
                }, 0);
            }
            else {
                $('html, body').show();
            }
        });
    </script>
</body>
</html>
