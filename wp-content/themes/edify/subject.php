<?php get_header(); ?>
/* Template Name: Subject 2 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
<section class="how-learn-maths subject-section">
    <div class="curved-in-shape"></div>
    <div class="learn-maths-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="learn-content">
                        <h1><span>MATH</span></h1>
                        <h1>Creative Writing: Character Building and Story </h1>
                        <p>An 8 week writing class that will teach the student how to create characters and develop a story.</p>
                        <a href="#" class="btn btn-primary">Book a Demo Now</a>
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
                <div class="alteration-box subject-alternate-box">
                    <h2>
                        Description
                    </h2>
                    <p>This course is meant for children aged 6-8, who are fluent with the basic sounds of alphabets and familiar with reading small words.  This course spans over 8-weeks (2 sessions per week). The course helps readers understand word patterns, pronunciation rules based on digraphs and blends. The course also introduces young readers to the basics of Grammar.</p>
                    <p>This course is meant for children aged 6-8, who are fluent with the basic sounds of alphabets and familiar with reading small words.  This course spans over 8-weeks (2 sessions per week). The course helps readers understand word patterns, pronunciation rules based on digraphs and blends. The course also introduces young readers to the basics of Grammar.</p>
                </div>
                <div class="subject-alternate-box">
                    <h3>
                        Reading Skills
                    </h3>
                    <p>Children will review phonic sounds and word families. They will also learn</p>
                    <ul class="listed-sessions">
                        <li>Digraphs and Blends (i.e. eau, oe, kn, ph, qu, ey sounds)</li>
                        <li>Pronunciation patterns such as silent ‘e’</li>
                        <li>Intonations (i.e. exclamations, commas, pauses</li>
                    </ul>
                </div>
                <div class="subject-alternate-box">
                    <h3>
                        Grammar Rules
                    </h3>
                    <p>Children will learn to recognize Nouns, Verbs, Pronouns</p>
                </div>
                <div class="subject-alternate-box">
                    <h3>
                        Creative Thinking Skills
                    </h3>
                    <p>Children will be encouraged to create characters and construct stories around them</p>
                </div>
                <div class="subject-alternate-box">
                    <h4>
                        Learner’s Time
                    </h4>
                    <p>1-2 hours per week</p>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="alteration-box subject-alternate-box visible">
                <div class="classname-box custom-classname-box">
									<div class="class-name">
										<img class="class-graphic" src="http://edify.loc/wp-content/themes/edify/images/english.svg" alt="English">
										<h5>Math Class</h5>
									</div>
									<div class="price-for-class">
										<h4 class="price-per-time"><sup class="font-rupee">`</sup> 10,000 <span class="per-time">/ annually</span></h4>
                                                                                <label class="note-text">*Includes audio files of Reading Passages</label>
										<h4 class="price-per-time"><sup class="font-rupee">`</sup> 3,000 <span class="per-time">/ annually</span></h4>
										<label class="note-text">*Includes audio files of Reading Passages</label>
									</div>
								</div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="days-timing">
                    <div class="info-block">
                        <span class="icon-calendar"></span>
                        <label class="dayrange">Mondays &amp; Wednesdays</label>
                    </div>
                    <div class="info-block">
                        <span class="icon-clock"></span>
                        <label class="timerange">6:00 pm to 6:45 pm</label>
                    </div>
                </div>
                <div class="booking-action-btn">
                    <a href="#" class="btn btn-primary">Book Math Course Now</a>
                </div>
            </div> 
        </div>
    </div>
</section>  
<section class="teacher-profile-box">
    <div class="inner-box">
        <div class="container teacher-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                    <div class="how-learn-maths subject-section">
                        <div class="learn-content">
                            <h1><span>Teacher</span></h1>
                            <h1>Sangeetha Saranathan</h1>
                            <p>I am MBA from IIM Indore. I used to work in Investment banking before realizing my true calling in Education. I have worked with children for almost 10 years. I have worked with playgroups, grade school  children and high school graduates. The best things about teaching to me are to ignite an interest of the world and develop a curious mind in my students.</p>
                            <p>I use a wide range of teaching technics for example;  discussions, essay writing, and research.</p>
                        </div>
                        <div class="teacher-img" style="background-image:url('/wp-content/themes/edify/images/teacher-img.jpg')"></div>    
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
                    <?php $i++;
                endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer();
?>