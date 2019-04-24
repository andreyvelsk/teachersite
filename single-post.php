<?php get_header();  ?>

<div class="title">
    <div class="container">
        <div class="title-text">
            <h1>
                <?php single_post_title() ?>
            </h1>
        </div>
    </div>
</div>

<!--page-->
<section class="container content">
    <div class="row content-main justify-content-center">
        <?php
            $categories = get_the_category();
            $for_students = false;
            foreach ($categories as $category) {
                if($category->cat_ID == 2 || $category->category_parent == 2) {
                    $for_students = true;
                    break;
                }
            }

            if (!is_user_logged_in() && $for_students) {
                ?>
                    <div class="col-md-6">
                        <h3>Для просмотра необходима авторизация</h3>
                        <?php do_shortcode('[login_form_shortcode]'); ?>
                    </div>
                <?php
            }
            else {
        ?>
        <!--content-->
        <div class="col-md-8">
            <div class="content-text">
                <div class="post">
                    <article class="post-text">
                        <?php
                            if(have_posts()){
                                the_post();
                                the_content();
                            }
                        ?>
                    </article>
                    <div class="post-meta">
                        <span>
                            <?php the_date('d-m-Y H:i'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!--/content-->

        <!--sidebar-->
        <div class="col-md-4">
            <?php get_sidebar("single");?>
        </div>
        <!--/sidebar-->

            <?php
                }
            ?>
    </div>
    <!--/content-main-->
</section>

<?php get_footer(); ?>