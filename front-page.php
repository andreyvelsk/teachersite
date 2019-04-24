<?php 
/*
Template Name: Главная
*/
 ?>
<?php get_header();  ?>

<div class="main">
    <section class="main-photo col-md-12">
        <div class="container main-about">
            <div class="row">
                <div class="col-md-6">
                    <h1>Елена Деточенко</h1>
                    <div class="divider"></div>
                    <div class="subinfo">
                    <?php
                            if(have_posts()){
                                the_post();
                                the_content();
                            }
                    ?>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
</div>
<section class="achievement">
    <div class="container">
        <h2>
            Достижения
        </h2>
        <div class="divider"></div>
        <p class="subinfo">
            <?php
                echo get_field('advantages_desc');
            ?>
        </p>
        <div class="row section-content">
            <div class="col-md-4 achievement-block">
                <div class="achievement-icon">
                    <div class="achievement-icon_middle">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                </div>
                <p>
                    Более 1000 выпускников
                </p>
            </div>
            <div class="col-md-4 achievement-block">
                <div class="achievement-icon">
                    <div class="achievement-icon_middle">
                        <i class="far fa-thumbs-up"></i>
                    </div>
                </div>
                <p>
                    1000 отзывов
                </p>
            </div>
            <div class="col-md-4 achievement-block">
                <div class="achievement-icon">
                    <div class="achievement-icon_middle">
                        <i class="fas fa-certificate"></i>
                    </div>
                </div>
                <p>
                    Диплом специалиста
                </p>
            </div>
        </div>
    </div>
</section>

<section class="certificates sectionimages">
    <div class="container">
        <h2>Сертификаты</h2>
        <div class="divider"></div>
        <p class="subinfo">
            <?php
                echo get_field('certificates_desc');
            ?>
        </p>
        <div class="row section-content">
            <?php
                    $images = get_attached_media('image', 148);
                    
                    usort($images, function($a,$b){
                        return ($b->post_date > $a->post_date);
                    });
                    if ($images) {
                        ?>
                        <?php
                        $i=0;
                        foreach ($images as $image) {
                            ?>
                                <div class="col-md-3">
                                    <div class="sectionimages-item">
                                        <a href="<?=$image->guid?>" data-toggle="lightbox" data-gallery="image-gallery">
                                            <?= wp_get_attachment_image( $image->ID, 'medium') ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            if($i == 4) break;
                        }
                    }
                    else {
                        ?>
                        <p class="subinfo col-md-12">
                            В данной категории нет записей
                        </p>
                        <?php
                    }

            ?>
        </div>
        <div class="sectionimages-more">
            <a href="/сертификаты">
                <button class="button-main">
                    Посмотреть все
                </button>
            </a>
        </div>
    </div>
</section>

<section class="portfolio sectionimages">
    <div class="container">
        <h2>Мои работы</h2>
        <div class="divider"></div>
        <p class="subinfo">
            <?php
                echo get_field('works_desc');
            ?>
        </p>
        <div class="row section-content">
            <?php
                    $images = get_attached_media('image', 151);
                    
                    usort($images, function($a,$b){
                        return ($b->post_date > $a->post_date);
                    });
                    if ($images) {
                        ?>
                        <?php
                        $i=0;
                        foreach ($images as $image) {
                            ?>
                                <div class="col-md-3">
                                    <div class="sectionimages-item">
                                        <a href="<?=$image->guid?>" data-toggle="lightbox" data-gallery="image-gallery">
                                            <?= wp_get_attachment_image( $image->ID, 'medium') ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            if($i == 4) break;
                        }
                    }
                    else {
                        ?>
                        <p class="subinfo col-md-12">
                            В данной категории нет записей
                        </p>
                        <?php
                    }

            ?>
        </div>
        <div class="sectionimages-more">
            <a href="/портфолио">
                <button class="button-main">
                    Посмотреть все
                </button>
            </a>
        </div>
    </div>
</section>
<section class="response">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Обо мне говорят</h2>
                <div class="divider"></div>
                <p class="subinfo">
                    <?php
                        echo get_field('about-desc');
                    ?>
                </p>
            </div>
            <div class="col-md-6">
                <div class="response-items">
                    <?php   
                        global $wp_query;

                        $save_wpq = $wp_query;
                        $args = array(
                            'cat' => 23
                        );
                        // ваш запрос и код вывода с пагинацией
                        $wp_query = new WP_Query( $args );
                        if($wp_query->have_posts()){
                            while ( $wp_query->have_posts() ) {
                                $wp_query->the_post();                        
                    ?>
                        <div class="item">
                            <div class="item-body">
                                <div class="item-header">
                                    <h4><?php the_title();?></h4>
                                    <p>
                                        <?php
                                            echo get_field('person-activity');
                                        ?>
                                    </p>
                                </div>
                                <div class="item-text">
                                    <?php the_content();?>
                                </div>
                                <div class="item-bottom">
                                    <svg class="item-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                                        <g></g>
                                        <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                                        </svg>
                                </div>
                                <div class="item-img">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                        }
                                        else {
                                            ?>
                                                <img src="<?php bloginfo('template_directory'); ?>/img/person-default.png" alt="Отзыв">
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                            
                        <?php
                            }
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
        </div>
    </div>
</section>


<?php get_footer(); ?>