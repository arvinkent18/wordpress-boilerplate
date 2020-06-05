<!-- Single Post
    ======================================== -->
    <div class="postcontent nobottommargin clearfix">

        <?php if ( have_posts() ): ?>

            <?php 
                
                while ( have_posts() ) {
                    the_post();
                }

                global $post;
                
                $author_ID  = $post->post_author;
                $author_URL = get_author_posts_url( $author_ID ); 
 
            ?>   
            
            <div class="single-post">

            <!-- Entry Title
                ======================================== -->
                <div class="entry-title">
                    <h2><?php the_title(); ?></h2>
                </div><!-- .entry-title end -->    

            <!-- Entry Meta
                ======================================== -->
                <ul class="entry-meta clearfix">
                    <li>
                        <i class="icon-calendar"></i>
                        <?php echo get_the_date(); ?>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-user"></i>
                            <?php the_author(); ?>
                        </a>
                    </li>
                    <li>
                        <i class="icon-category"></i>
                        <?php echo the_category(); ?>
                    </li>
                    <li>
                        <i class="icon-comments"></i>
                        <?php comments_number(); ?>
                    </li><!-- .entry-meta end -->  
                </ul>

            <!-- Entry Image
                ======================================== -->
                <div class="entry-image">
                    <?php if ( has_post_thumbnail() ): ?>
                    <a href="#">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </a>
                    <?php endif; ?>
                </div>

            </div>

        <?php endif; ?>
    </div><!-- #singlePost end -->