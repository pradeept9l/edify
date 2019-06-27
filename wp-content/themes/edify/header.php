<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9" lang="en"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,initial-scale=1">
    <title>Edify</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/magnific-popup.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <!-- Internet Explorer Conditional Comments -->
    <!--Bootstrap Fallback for IE7 Support-->
    <!--[if lt IE 8]>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-ie7.css" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE6-8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie7.css" media="all">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
    <![endif]-->
<!--    --><?php //wp_head();  ?>
    <script>
        function getDayRange(id) { console.log(id);
            var dayrange = $('#day-'+id).val();
            var timerange = $('#time-'+id).val();
            $('.dayrange').html(dayrange);
            $('.timerange').html(timerange);
        }
        function goToUrl(subject,url) {
            var classsulg = $('#classlist').val();
            var redirectUrl = url+'/course?subject='+subject+'&class='+classsulg+'#gotoTopicslist';
            window.location.href = redirectUrl;
        }
    </script>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a href="/"><img class="brandlogo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
                                 alt="Brand Logo"/></a>
            </div>
            <div class="col-sm-9">
                <span class="drawer-lines"></span>
                <ul class="header-nav">
                    <li>
                        <a href="javascript:void(0);">Classes <span class="icon-down-arrow"></span></a>
                        <?php $terms = get_terms(
                            array(
                                'taxonomy' => 'subjects',
                                'hide_empty' => false,
                            )
                        );
                        $classes = get_terms(
                            array(
                                'taxonomy' => 'classes',
                                'hide_empty' => false,
                            )
                        );
                        //                        echo '<pre>'; print_r($terms); die;
                        ?>
                        <ul class="innerlist">
                            <?php if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) { ?>
                                    <li><a href="javascript:void(0)"><?= $term->name; ?></a>
                                        <ul class="innerlist">
                                            <?php
                                            if ($classes) {
                                                foreach ($classes as $_class) {

                                                    ?>
                                                    <li><a href="<?= '/course?subject='.$term->slug.'&class='.$_class->slug;  ?>"><?= $_class->name; ?></a></li>
                                                    <?php
                                                }
                                            } ?>
                                        </ul>
                                    </li>
                                <?php }
                            } ?>

                        </ul>
                    </li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/become-a-teacher">Become a Teacher</a></li>
                    <li><a href="/book-free-demo">Book Free Demo</a></li>
                    <li class="active"><a href="/ask-us">Ask Us!</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

