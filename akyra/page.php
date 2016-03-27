<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 */
get_header(); ?>
<!--end / page-title-->
<div class="mainblogwrapper">
    <div class="container">
        <div class="row">
            <div class="mainblogcontent">
              
                <div class="col-md-9">
                    <!-- *** Post loop starts *** -->

                    <!-- *** Post1 Starts *** -->
                    <?php if (have_posts()) while (have_posts()) : the_post(); ?> 
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="theme-page">
                                     <div class="headline"><h2><?php the_title(); ?></h2></div>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <div class="clearfix"></div>

                    <!-- *** Post1 Starts Ends *** -->
                    <!-- *** Post loop ends*** -->
                   
                    <!-- ***Comment Template *** -->
                    <?php comments_template(); ?>
                    <!-- ***Comment Template *** -->
                     <div class="clearfix"></div>
                </div>
                <!-- <div class="col-md-3"> -->
                    <!-- *** Sidebar Starts *** -->
                     <!-- php get_sidebar(); -->
                    <!-- *** Sidebar Ends *** -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
