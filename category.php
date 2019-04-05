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
                    
                        global $post;
                        $category = get_category( get_query_var( 'cat' ) );
                        $args = array( 'posts_per_page' => 2, 'offset'=> 0, 'category' => $category->cat_ID );
                        $myposts = get_posts( $args );
                        if (count($myposts)){
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <div class="post">
                                        <div class="post-image">
                                            <img src="img/main.jpg" alt="">
                                        </div>
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
                                    <!--end post -->
                            <?php endforeach; 
                        }
                        else{
                        ?>
                            <div class="subinfo">
                                В данной категории нет записей
                            </div>
                        <?php
                        }
                    wp_reset_postdata();?>
                    
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