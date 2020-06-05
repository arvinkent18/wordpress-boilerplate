<!-- Sidebar
    =========================================== -->
    <div class="sidebar nobottommargin col_last">
        <div class="sidebar-widgets-wrap">
            <?php

            if ( is_active_sidebar( 'akl_sidebar' ) ) {
                dynamic_sidebar( 'akl_sidebar' );
            }

            ?>
        </div>
    </div><!-- #sidebar end -->