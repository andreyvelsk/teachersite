<?php 
/*
Template Name: Изображения
*/
 ?>

<?php get_header();  ?>

<div class="title">
    <div class="container">
        <div class="title-text">
            <h1>
                <?php the_title(); ?>
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
                    $images = get_attached_media('image', get_the_ID());
                    if ($images){
                        ?>
                        <div class="card-columns portfolioimages">
                        <?php
                        foreach ($images as $image) {
                            ?>
                                <div class="card">
                                    <div class="portfolioimage">
                                        <a href="<?=$image->guid?>" data-toggle="lightbox" data-gallery="image-gallery">
                                            <?= wp_get_attachment_image( $image->ID, 'medium') ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                        ?>
                        </div>
                        <?php
                    }
                    else {
                        ?>
                        <div class="subinfo">
                            В данной категории нет записей
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <!--/content-->

        <!--sidebar-->
        <div class="col-md-4">
            <?php get_sidebar("portfolio");?>
        </div>
        <!--/sidebar-->
    </div>
    <!--/content-main-->
</div>

<?php get_footer(); ?>