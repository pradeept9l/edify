<?php
/***
 Template Name: Pricing
 ***/
get_header(); ?>
<?php
if (have_posts()):

while (have_posts()): the_post();
?>

		<section class="how-learn-maths pricing-box">
			<div class="curved-in-shape">
				<div class="learn-maths-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="learn-content">
									<h1><?php the_title(); ?></h1>
									<!--    <p>Edify aims to involve the students deeply and personally for maximum learning. <br/>We unlock the creative potential in progressive learning. </p>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="price-holding-boxes">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="classes-block">
								<div class="classname-box static-box">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php
endwhile;

endif;
?>

		<?php get_footer(); ?>
