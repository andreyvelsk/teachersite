
<?php 
/*
Template Name: Колледж
*/
 ?>
<?php get_header();  ?>

<div class="title">
    <div class="container">
        <div class="title-text">
            <h1>
                <?php 
                    the_title();                
                ?>
            </h1>
        </div>
    </div>
</div>

<!--page-->
<section class="container content">
    <div class="row content-main">
        <!--content-->
        <div class="col-md-8">
            <div class="content-text">
                <?php
                    if(have_posts()){
                        the_post();
                        the_content();
                    }
                ?>
            </div>
        </div>
        <!--/content-->

        <!--sidebar-->
        <div class="col-md-4">
            <?php get_sidebar("college");?>
        </div>
        <!--/sidebar-->
    </div>
    <!--/content-main-->
</section>

<?php get_footer(); ?>