<?php
/***
Template Name: Become-a-teacher
 ***/
get_header(); ?>
		<section class="form-section">
			<div class="two-curves">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="abt-course">
								<span class="b-crs">Become a Teacher</span>
								<h1>Join our inspired community of teachers</h1>
								<p>Edify Community is always open to enthusiastic teachers who believe in involving the students deeply and personally for maximum learning.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-12"></div>
					</div>
				</div>
			</div>
			<div class="movingform">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12"></div>
						<div class="col-md-6 col-sm-12">
                            <?= do_shortcode('[contact-form-7 id="91" title="Become a Teacher"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>
