<?php get_header(); ?>
/* Template Name: Subject 2 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
<?php
if( have_posts() ):
while( have_posts() ): the_post();

        $dayRange = get_post_meta($post->ID, 'day_range', true);
        $timeRange = get_post_meta($post->ID, 'time_range', true);
        $sessions = get_post_meta($post->ID, 'sessions', true);
        $teacher = get_post_meta($post->ID, 'teacher', true);
        $sort_desc = get_post_meta($post->ID, 'sort_description', true);
        $learner_time = get_post_meta($post->ID, 'learners_time', true);
        $Subjects = wp_get_post_terms($post->ID, array('subjects') );
        $payment_link = get_post_meta($post->ID, 'payment_link', true);
        $LearnersTime = get_post_meta($post->ID, 'learners_time', true);
        $pricing = get_post_meta($post->ID, 'pricing', true);

?>
<section class="how-learn-maths subject-section">
    <div class="curved-in-shape"></div>
    <div class="learn-maths-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="learn-content">
                        <h1><span><?= strtoupper($Subjects[0]->name); ?></span></h1>
                        <h1><?php the_title(); ?></h1>
                        <p><?= $sort_desc; ?></p>
                        <a href="<?= $payment_link; ?>" class="btn btn-primary">Book & Pay Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="online-video" style="background-image:url('/wp-content/themes/edify/images/subject-banner-img.png')">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="alternate-boxes">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <?php the_content(); ?>
                <div class="subject-alternate-box">
                    <h4>
                        Learner’s Time
                    </h4>
                    <p><?= $LearnersTime; ?></p>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="alteration-box subject-alternate-box visible">
                    <div class="classname-box custom-classname-box">
                        <div class="class-name">
                            <img class="class-graphic" src="http://edify.loc/wp-content/themes/edify/images/english.svg" alt="English">
                            <h5><?= $Subjects[0]->name; ?> Class</h5>
                        </div>
                        <div class="price-for-class">
                            <?= $pricing; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="days-timing">
                    <div class="info-block">
                        <span class="icon-calendar"></span>
                        <label class="dayrange"><?=  $dayRange; ?></label>
                    </div>
                    <div class="info-block">
                        <span class="icon-clock"></span>
                        <label class="timerange"><?= $timeRange; ?></label>
                    </div>
                </div>
                <div class="booking-action-btn">
                    <a href="<?= $payment_link; ?>" class="btn btn-primary">Book & Pay Now</a>;
                </div>
            </div> 
        </div>
    </div>
</section>  
<?php
if(!empty($teacher)) {
    $teacherDetail = get_post($teacher);
    $teacherDescription = get_post_meta($teacherDetail->ID, 'teacher_description', true);
    $teacherImage = get_the_post_thumbnail_url($teacherDetail->ID);
?>
<section class="teacher-profile-box">
    <div class="inner-box">
        <div class="container teacher-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                    <div class="how-learn-maths subject-section">
                        <div class="learn-content">
                            <h1><span>Teacher</span></h1>
                            <h1><?= $teacherDetail->post_title; ?></h1>
                            <?= $teacherDescription; ?>
                        </div>
                        <div class="teacher-img" style="background-image:url('<?= $teacherImage; ?>')"></div>    
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>   
<?php } ?>
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
    <?php
endwhile;
endif;
?>
    <div class="student-text-container">
        <div id="text-carousel" class="owl-carousel carousel-size">
<?php
$query = new WP_Query(array(
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
<?php
$i++;
endwhile;
endif;
?>
        </div>
    </div>
</section>
<?php get_footer();
?>