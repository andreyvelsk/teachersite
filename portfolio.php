<?php 
/*
Template Name: Изображения
*/
 ?>

<?php get_header();  ?>

<!--page-->
<section class="container content gallery">
    <div class="content-main">
        <!--content-->
        <div>
            <h1>
                <?php the_title(); ?>
            </h1>
        <div class="divider"></div>
            <?php
                $images = get_attached_media('image', get_the_ID());
                $videos = get_attached_media('video', get_the_ID());
                
                usort($images, function($a,$b){
                    return ($b->post_date > $a->post_date);
                });
                usort($videos, function($a,$b){
                    return ($b->post_date > $a->post_date);
                });
                //print_r($images);
                if ($images || $videos) {
                    ?>
                    <div class="subinfo">
                        <?php
                            if(have_posts()){
                                the_post();
                                the_content();
                            }
                        ?>
                    </div>
                    <div class="card-columns portfolioimages">
                    <?php
                        foreach ($images as $image) {
                            ?>
                                <div class="card">
                                    <div class="portfolioimage">
                                        <a href="<?=$image->guid?>" data-toggle="lightbox" data-gallery="image-gallery">
                                            <?= wp_get_attachment_image( $image->ID, 'large') ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    </div>
                    <?php
                    if($videos) {
                        ?>
                        <div class="portfoliovideos">
                            <?php
                                foreach ($videos as $video) {
                                    echo  "<video src=".$video->guid." controls width=100%></video>";
                                }
                            ?>
                        </div>

                        <?php

                    }
                    ?>
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
        <!--/content-->

    </div>
    <!--/content-main-->
</section>

<?php get_footer(); ?>