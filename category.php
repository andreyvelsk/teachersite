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

             <?php
                if (!is_user_logged_in()) {
                    echo "sign in";
                    wp_login_form(array('echo' => true));
                    
                    wp_register();
                }
                else {

            ?>
            <!--content-->
            <div class="col-md-8">
                <div class="content-text">
                    <?php
                        global $wp_query;

                        $save_wpq = $wp_query;

                        $category = get_category( get_query_var( 'cat' ) );
                        $args = array(
                            'cat' => $category->cat_ID,
                            'paged' => get_query_var( 'paged' ),
                            'mid_size' => 1
                        );
                        // ваш запрос и код вывода с пагинацией
                        $wp_query = new WP_Query( $args );
                        if($wp_query->have_posts()){
                            while ( $wp_query->have_posts() ) {
                                $wp_query->the_post();                        
                                ?>
                                    <div class="post">
                                        <div class="post-info">
                                            <h4>
                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                            </h4>
                                            <div class="post-text">
                                                <?php
                                                    the_excerpt();
                                                ?>
                                            </div>
                                            <div class="post-meta">
                                                <a href="<?php the_permalink(); ?>">
                                                    <button class="button-main">
                                                        Подробнее
                                                    </button>
                                                </a>
                                                <span>
                                                    <?php the_date('d-m-Y H:i'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                            
                            the_posts_pagination();
                        }
                        else {
                            ?>
                            <div class="subinfo">
                                В данной категории нет записей
                            </div>
                            <?php
                        }
                        
                        // вернем global $wp_query
                        wp_reset_postdata();
                        $wp_query = $save_wpq;
                    ?>
                </div>
            </div>
            <!--/content-->

            <!--sidebar-->
            <div class="col-md-4">
                <?php get_sidebar("category");?>
            </div>
            <!--/sidebar-->

                <?php

                    }

                ?>
        </div>
    </div>

    <!--page-->

<?php get_footer(); ?>