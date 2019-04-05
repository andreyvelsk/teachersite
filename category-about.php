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

            </div>
        </div>
        <!--/content-->

        <!--sidebar-->
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
        <!--/sidebar-->
    </div>
    <!--/content-main-->
</div>

<?php get_footer(); ?>