
<?php get_header(); ?>

<!-- Content
    ======================================== -->
    <section id="content">

    <!-- Posts
        ======================================== -->
        <div id="posts">
            
            <?php 
            
            if ( have_posts() ) {
                while( have_posts() ) {
                    the_post();

                    get_template_part( 'partials/posts/content-excerpt' );
                }
            }
            
            ?>

            <!-- Pagination
                ======================================== -->
                <div class="pager">
                    <div class="row mb-3">
                        <div class="col-12">
                            <?php 
                            
                            next_posts_link( '&larr; Older' );

                            previous_post_link( 'Newer &rarr;' );

                            ?>
                        </div>
                    </div>
                </div><!-- .pager end -->


        </div><!-- #posts end -->

    </section><!-- #contend end -->

<?php get_footer(); ?>