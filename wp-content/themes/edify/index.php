<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

        <section class="main-banner">
            <div class="curved-banner">
                <div class="full-banner shaded-content"
                     style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/banner.jpg')">
                    <div class="container">
                        <div class="banner-content">
                            <h1>
                                <span>India's Best Live</span>
                                Online Classroom
                            </h1>
                            <p>With Edify, master maths without resorting to rote learning or fall in love with reading English
                                and using perfect grammar.</p>
                            <a href="/book-course" class="btn btn-primary">Book Free Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="alternate-boxes">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="alteration-box">
							<div class="side-content">
								<img src="<?php echo get_template_directory_uri(); ?>/images/graphic2.svg" alt="Graphic" />
							</div>
							<div class="content-graphic">
								<h3 class="contentfont">Live Online Classes</h3>
								<p>Highly interactive sessions in small groups makes learning fun and ensures your child’s maximum attention </p>
								<p>Our teaching methods use pictoral representations and relate to real-life making learning intuitive</p>
							</div>
						</div>
						<div class="alteration-box">
							<div class="content-graphic">
								<h3 class="contentfont">Passionate <br/>Teachers</h3>
								<p>Our in-house teachers are highly qualified professionals from IITs & IIMs who have embraced teaching given their passion for education </p>
								<p>We have experienced teachers for Primary-Grade and High-School who are subject and teaching experts</p>
							</div>
							<div class="side-content">
								<img src="<?php echo get_template_directory_uri(); ?>/images/graphic3.svg" alt="Graphic" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="featured-teachers yellow-slope">
			<div class="curved-in-shape">
				<div class="teachers-boxes">
					<div class="container">
						<div class="row">
							<div class="col-md-12 bmargin20">
								<h2 class="secondary-font">Featured Teachers</h2>
								<p>Select our experienced teachers, who have taught more than <span>10000+ students</span></p>
							</div>
                            <?php
                            $query1 = new WP_Query( array(
                                    'post_type' => 'teacher',
                                    'numberposts' => -1,
                                    'posts_per_page' => 3
                                )
                            );

                            if ($query1->have_posts()):
                                while ($query1->have_posts()):
                                    $query1->the_post();
//                                echo '<pre>'; print_r($post); die;
                                    ?>
                                    <div class="col-md-4 t-margin30">
                                        <div class="aboutteacher-box">
                                            <div class="teacher-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                                            <div class="teacher-detail">
                                                <h4><?= $post->post_title; ?></h4>
                                                <label class="abt-study"><?=  $post->post_excerpt; ?></label>
                                                <div class="tag-container">
                                                    <?php echo  $post->post_content; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  endwhile;   endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="subject-classes text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="headingfont">Classes by Subject</h2>
						<div class="available-subjects">
							<div class="single-subject-box">
								<a href="/course?subject=maths&class=one" class="full-click"></a>
								<div class="v-middle">
									<img class="box-graphic" src="<?php echo get_template_directory_uri(); ?>/images/maths.svg" alt="Graphic" />
									<h4>Maths</h4>
									<a href="/course?subject=maths&class=one" class="btn btn-primary">Select</a>
								</div>
							</div>
							<div class="single-subject-box">
								<a href="/course?subject=english&class=one" class="full-click"></a>
								<div class="v-middle">
									<img class="box-graphic" src="<?php echo get_template_directory_uri(); ?>/images/english.svg" alt="Graphic" />
									<h4>English</h4>
									<a href="/course?subject=english&class=one" class="btn btn-primary">Select</a>
								</div>
							</div>
						</div>
						<p class="short-desc">Our expert faculty offers live tutor-led video streamed classes and dedicated mentors help track your progress</p>
					</div>
				</div>
			</div>
		</section>
		<section class="online-classes">
			<div class="container">
				<div class="online-video" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/video.jpg')">
					<div class="shadelayer">
						<a href="#" class="show-in-popup popup-youtube full-click"></a>
						<div class="v-middle">
							<span class="play-active">
								<img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" alt="Play" />
							</span>
							<label class="video-tagline">How Online Live Classes Work?</label>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="students-review">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="student-counts">
							<span>12500+</span> Students found happiness with us.
						</div>
					</div>
				</div>
			</div>
			<div class="student-text-container">
				<div id="text-carousel" class="owl-carousel carousel-size">
                    <?php
                    $query = new WP_Query( array(
                            'post_type' => 'testimonial',
                            'numberposts' => -1,
                            'posts_per_page' => 10
                        )
                    );

                    if ($query->have_posts()):
                    $i = 1;
                    while ($query->have_posts()):
                    $query->the_post();
                    $dayRange = get_post_meta($post->ID, 'day_range', true);
                    $timeRange = get_post_meta($post->ID, 'time_range', true);

                    ?>
                        <div class="item">
                            <div class="single-subject-box">
                                <span class="icon-quote"></span>
                                <p><?php the_content(); ?></p>
                                <div class="person-box">
                                    <span class="p-image" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')"></span>
                                    <div class="p-detailbox">
                                        <h5><?php the_title(); ?></h5>
                                        <label><?php the_excerpt(); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endwhile;   endif; ?>
				</div>
			</div>
		</section>
		<section class="faq-section yellow-slope">
			<div class="curved-in-shape">
				<div class="faq-straightbox">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="secondary-font">Important FAQs</h2>
								<div class="questions-container">
									<ul class="q-a-list">
                                        <?php
                                        $args = array(
                                            'post_type' => 'faq',
                                            'numberposts' => -1,
                                            'posts_per_page' => 20,
                                            'order'            => 'ASC',
                                        );
                                        $posts = get_posts($args);
                                        foreach($posts as $k=>$_post){ //echo '<pre>'; print_r($posts); die;
                                            ?>
                                            <li class="opened">
                                                <h4 class="question"><?php echo $_post->post_title; ?></h4>
                                                <div class="q-answer" <?php if($k == 0){ echo 'style="display:block;"'; }else{ echo 'style="display:none"';}?>>
                                                    <p><?= $_post->post_content; ?></p>
                                                </div>
                                            </li>
                                        <?php } ?>
									</ul>
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
<?php get_footer(); ?>
