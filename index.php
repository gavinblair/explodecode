<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <?php
                $menu_name = 'header-menu';

                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $c = 0;
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $c++;
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        if($c <= 3) {
                            $left_menu_list .= '<a href="' . $url . '">' . $title . '</a>';
                        } else {
                            $right_menu_list .= '<a href="' . $url . '">' . $title . '</a>';
                        }
                    }
                }
            ?>
            <nav>
                <?php echo $left_menu_list; ?>
                <h1><a href="<?php echo bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" /></a></h1>
                <?php echo $right_menu_list; ?>
            </nav>
            <div class="container content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="row">
                        <div class="span8 offset2">
                            <?php the_content(); ?>
                        </div>
                        <!--div class="span3 offset1">
                            <p>
                                <a class='btn btn-info btn-large' href="http://twitter.com/explodecode">twitter</a>
                            </p>
                            <p>
                                <a class='btn btn-success btn-large' href="http://twitter.com/explodecode">facebook</a>
                            </p>
                        </div-->
                    </div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>