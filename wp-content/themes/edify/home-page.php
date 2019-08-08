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
get_header();
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            $id = get_the_ID();
            $bannerImage = get_field('banner_image');
            $bannerImage2 = get_field('image2');
            $bannerImage3 = get_field('image_3');

            $bannerTitle = get_post_meta($id, 'banner_heading', true);
            $bannerTitle2 = get_post_meta($id, 'section2_heading', true);
            $bannerTitle3 = get_post_meta($id, 'section_heading3', true);

            $bannerDescription = get_post_meta($id, 'banner_description', true);
            $bannerDescription2 = get_post_meta($id, 'section2_description', true);
            $bannerDescription3 = get_post_meta($id, 'section_description3', true);
?>

    <section class="main-banner">
        <div class="curved-banner">
            <div class="full-banner shaded-content"
                 style="background-image:url('<?php echo $bannerImage['url']; ?>')">
                <div class="container">
                    <div class="banner-content">
                        <h1>
                            <?= $bannerTitle; ?>
                        </h1>
                        <p><?= $bannerDescription; ?></p>
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
                            <img src="<?php echo $bannerImage2['url']; ?>" alt="Graphic" />
                        </div>
                        <div class="content-graphic">
                            <h3 class="contentfont"><?= $bannerTitle2; ?></h3>
                            <p><?= $bannerDescription2; ?></p>
                        </div>
                    </div>
                    <div class="alteration-box">
                        <div class="content-graphic">
                            <h3 class="contentfont"><?= $bannerTitle3; ?></h3>
                            <p> <?= $bannerDescription3; ?> </p>
                        </div>
                        <div class="side-content">
                            <img src="<?php echo $bannerImage3['url']; ?>" alt="Graphic" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endwhile; endif; ?>
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
                                    <label class="abt-study"><?= $post->post_excerpt; ?></label>
                                    <div class="tag-container">
                                        <?php echo $post->post_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subject-classes text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="headingfont">Courses by Subject</h2>
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
    <section class="online-classes text-center">
        <div class="container video-container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="headingfont">How online classes work</h2>
                    <p>edify class connects motivated learners, parents, and teachers together
                        <br>to create great learning experiences</p>
                    <div class="online-video" style="background-image:url('http://edifyclass.com/wp-content/uploads/2019/08/video-homepage.jpg')">
                        <div class="shadelayer">
                            <a href="http://edifyclass.com/wp-content/uploads/2019/08/EdifyClass_Final.mp4" class="show-in-popup popup-youtube full-click"></a>
                            <div class="v-middle">
                                <span class="play-active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" alt="Play" />
                                </span>
                            </div>
                        </div>
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
                                <label><?php $val = get_the_excerpt(); echo strip_tags($val); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++;
                endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="faq-section yellow-slope" id="faq-section">
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
                                    'order' => 'ASC',
                                    );
                                    $posts = get_posts($args);
                                    foreach($posts as $k => $_post){ //echo '<pre>'; print_r($posts); die;
                                    ?>
                                    <li class="opened">
                                        <h4 class="question"><?php echo $_post->post_title; ?></h4>
                                        <div class="q-answer" <?php if($k == 0){ echo 'style="display:block;"';
                                    }else{ echo 'style="display:none"';
                                    } ?>>
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
                    <label>Join us as a teacher today</label>
                    <a class="btn btn-primary" href="/become-a-teacher">Join us</a>
                </div>
                <div class="action-box">
                    <label>Contact us if you have any query</label>
                    <a class="btn btn-primary" href="/contact-us">Contact now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
