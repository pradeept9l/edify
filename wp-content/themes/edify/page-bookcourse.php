<?php
/***
Template Name: Book Course
 ***/
get_header();
?>

<section class="form-section">
			<div class="two-curves">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="abt-course">
								<span class="b-crs">Book Course</span>
								<h1>You’re one step closer to your kid’s best learning</h1>
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
								<?= do_shortcode('[contact-form-7 id="8" title="Book Course"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>
