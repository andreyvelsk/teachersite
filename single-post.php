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
<div class="container content">
    <div class="row content-main">
        <!--content-->
        <div class="col-md-8">
            <div class="content-text">
                <div class="post">
                    <div class="post-text">
                        <?php 
                            if(have_posts()){
                                the_post();
                                the_content();
                            }
                        ?>
                    </div>
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
    </div>
    <!--/content-main-->
</div>

<?php get_footer(); ?>