<?php
/***
Template Name: Subjects
 ***/
get_header();



$query = new WP_Query( array(
          'post_type' => 'courses',
          'numberposts' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'subjects',
                'field' => 'slug',
                'terms' => $_GET['subject']
            ),
          array(
              'taxonomy' => 'classes',
              'field' => 'slug',
              'terms' => $_GET['class']
          )
          ),
          'posts_per_page' => 100
    )
);

?>
		<section class="how-learn-maths">
			<div class="curved-in-shape">
				<div class="learn-maths-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="learn-content">
									<h1>How do you learn <br/><span>Maths</span> with us</h1>
									<p>Children learn new concepts initially using concrete examples from daily life, then progress to pictorial representations, before finally using more abstract symbols in Maths.</p>
									<p>More than 50 million children have used this approach and ranked amongst the top 1% globally over the last decade.</p>
									<a href="#" class="btn btn-primary white-btn">Book Math Course Now</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="online-video" style="background-image:url('<?= get_template_directory_uri(); ?>/images/video.jpg')">
									<div class="shadelayer">
										<a href="#" class="show-in-popup popup-youtube full-click"></a>
										<div class="v-middle">
											<span class="play-active">
												<img src="<?= get_template_directory_uri(); ?>/images/play.svg" alt="Play" />
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="available-topics" id="gotoTopicslist">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 grade-selection">
						<h2 class="secondary-font">Select Topics for</h2>
                        <?php $classes = get_terms(
                            array(
                                'taxonomy' => 'classes',
                                'hide_empty' => false,
                            )
                        ); ?>
						<select class="form-control selectpicker" value="<?= $_GET["class"]; ?>" onchange="goToUrl('<?= $_GET["subject"] ?>','<?= get_site_url() ?>')" id="classlist">

                            <?php if ($classes) {
                            foreach ($classes as $_class) {
                                if($_class->slug == $_GET['class']){
                                    $classname = 'selected';
                                }else{
                                    $classname = '';
                                }
                                ?>
                                <option <?= $classname; ?> value="<?= $_class->slug; ?>"><a href="<?= '/classes?subject='.$_GET["subject"].'&class='.$_class->slug;  ?>"><?= $_class->name; ?></a></option>
                            <?php
                            }
                        } ?>
						</select>
					</div>
				</div>
				<div class="row">
                    <?php
                    if( $query->have_posts() ):
                        $i = 1;
                    while( $query->have_posts() ): $query->the_post();
                        $dayRange =  get_post_meta($post->ID, 'day_range', true);
                        $timeRange =  get_post_meta($post->ID, 'time_range', true);
                    ?>
                            <div class="col-md-4 card-holder" id="box-<?= $i; ?>" onclick="getDayRange(<?= $i; ?>);">
                                <div class="grade-card">
                                    <h5><?= the_title(); ?></h5>
                                    <?= the_content() ?>
                                    <input type="hidden" value="<?= $dayRange; ?>" id="day-<?= $i; ?>">
                                    <input type="hidden" value="<?= $timeRange; ?>" id="time-<?= $i; ?>">
                                </div>
                            </div>
                    <?php $i++; endwhile;   endif; ?>

                    <div class="col-md-12 col-sm-12">
                        <div class="days-timing">
                            <div class="info-block">
                                <span class="icon-calendar"></span>
                                <label class="dayrange"></label>
                            </div>
                            <div class="info-block">
                                <span class="icon-clock"></span>
                                <label class="timerange"></label>
                            </div>
                        </div>
                    </div>
					<div class="col-md-12 col-sm-12 booking-action-btn">
                        <a href="#" class="btn btn-primary">Book <span style="text-transform: capitalize;"><?= $_GET['subject']; ?></span> Course Now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="benefits-with-edify">
			<div class="light-gradient-shape">
				<div class="benefit-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="secondary-font">With Edify you get</h2>
							</div>
							<div class="col-md-4">
								<div class="benefit-block">
									<img src="<?= get_template_directory_uri(); ?>/images/icon1.svg" alt="Icon" />
									<h5>Small class sizes</h5>
									<p>Batch size of upto 15 for maximum attention</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="benefit-block">
									<img src="<?= get_template_directory_uri(); ?>/images/icon2.svg" alt="Icon" />
									<h5>Complete Access</h5>
									<p>Full access to Adaptive Practice Worksheets</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="benefit-block">
									<img src="<?= get_template_directory_uri(); ?>/images/icon3.svg" alt="Icon" />
									<h5>A Dedicated Mentor</h5>
									<p>Mentor Assigned to track your child’s progress throughout the year</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="two-actions no-top-space">
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
		<?php get_footer(); ?>
