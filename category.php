<?php get_header();  ?>

    <div class="title">
        <div class="container">
            <div class="title-text">
                <h1>
                    <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>
    </div>

    <!--page-->
    <div class="container content">
        <div class="row content-main">
            <!--content-->
            <div class="col-md-8">
                <div class="content-text">
                    <?php
                        global $wp_query;

                        $save_wpq = $wp_query;
                        
                        // ваш запрос и код вывода с пагинацией
                        $wp_query = new WP_Query( $args );
                        while ( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                        
                            echo 1;
                        }
                        
                        // пагинация
                        
                        // вернем global $wp_query
                        wp_reset_postdata();
                        $wp_query = $save_wpq;
                    ?>
                </div>
            </div>
            <!--/content-->

            <!--sidebar-->
            <div class="col-md-4">
                <?php get_sidebar();?>
            </div>
            <!--/sidebar-->
        </div>
    </div>

    <!--page-->

<?php get_footer(); ?>