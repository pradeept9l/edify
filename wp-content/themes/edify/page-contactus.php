<?php

/* * *
  Template Name: Contact US
 * * */
get_header();
?>
<section class="form-section">
    <div class="two-curves in-single-format">
        <div class="container">
            <div class="row">
                <div class="col-md-6 getting-up">
                    <div class="abt-course">
                        <span class="b-crs">Contact Us</span>
                        <h1>Contact Us if you have any query</h1>
                        <p>We’re glad you found value in us. Get a chance to help your children better by requesting for a demo class below.</p>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <div class="movingform">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-box">
                        <h4 class="form-detailfont">Share your details for us to get in touch with you.</h4>
                        <div class="form-group">
                            <label>Your Name</label>
                            <input class="form-control" type="text" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" type="text" placeholder="" />
                        </div>
                        <div class="form-group error">
                            <label>Your Email-Id</label>
                            <input class="form-control" type="text" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary full-btn" type="submit" value="Submit" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="two-actions">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="action-box">
                    <label>Join Us as a teacher today</label>
                    <a class="btn btn-primary" href="#">Join Us</a>
                </div>
                <div class="action-box">
                    <label>Contact us if you have any query</label>
                    <a class="btn btn-primary" href="#">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="thankyou-modalbox" style="display:none;">
    <div class="thankyou-content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/thanku-tick.svg" />
        <h1>Thank you </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
 sed do eiusmod tempor incididunt</p>
        <a href="javascript:void(0)" class="btn btn-primary">Ok, Done</a>
    </div>
</div>

<?php get_footer(); ?>
