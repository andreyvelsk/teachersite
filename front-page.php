<?php 
/*
Template Name: Главная
*/
 ?>
<?php get_header();  ?>

<section class="main">
    <div class="container main-about">
        <div class="row">
            <div class="col-md-6">
                <h1>Имя Фамилия</h1>
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
        </div>
    </div>
</section>
<section class="achievement">
    <div class="container">
        <h2>
            Достижения
        </h2>
        <div class="divider"></div>
        <p class="subinfo">
            За более, чем 10 лет работы, я смогла добиться
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
            Я постоянно учусь, и совершенствую знания
        </p>
        <div class="row section-content">
            <div class="col-md-3 sectionimages-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/certificate.jpg" alt="">
            </div>
            <div class="col-md-3 sectionimages-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/certificate.jpg" alt="">
            </div>
            <div class="col-md-3 sectionimages-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/certificate.jpg" alt="">
            </div>
            <div class="col-md-3 sectionimages-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/certificate.jpg" alt="">
            </div>
        </div>
        <div class="sectionimages-more">
                <button class="button-main">
                        Посмотреть остальные
                </button>
        </div>
    </div>
</section>

<section class="portfolio sectionimages">
    <div class="container">
        <h2>Мои работы</h2>
        <div class="divider"></div>
        <p class="subinfo">
            Мои работы и работы моих учеников
        </p>
        <div class="row section-content">
            <div class="col-md-3">
                <div class="sectionimages-item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/main.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="sectionimages-item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/main.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="sectionimages-item">
                   <img src="<?php bloginfo('template_directory'); ?>/img/main.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="sectionimages-item">
                   <img src="<?php bloginfo('template_directory'); ?>/img/main.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="sectionimages-more">
            <button class="button-main">
                Посмотреть остальные
            </button>
        </div>
    </div>
</section>
<section class="response">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Обо мне говорят</h2>
                <div class="divider"></div>
                <p class="info">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur nobis labore dicta ex ratione ad assumenda delectus reprehenderit cupiditate odio.
                </p>
                <p class="subinfo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque eveniet tempore, provident, adipisci
                </p>
            </div>
            <div class="col-md-6">
                <div class="response-items">
                    <div class="item">
                        <div class="item-body">
                                <div class="item-header">
                                    <h4>Имя фамилия</h4>
                                    <p>Студент</p>
                                </div>
                                <div class="item-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident enim earum assumenda soluta eum itaque quibusdam impedit? Qui hic veniam ullam, libero cum
                                </div>
                                <div class="item-bottom">
                                    <svg class="item-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                                        <g></g>
                                        <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                                        </svg>
                                </div>
                                <div class="item-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/response-s.jpg" alt="">
                                </div>
                        </div>
                    </div>
                    <div class="item">
                            <div class="item-body">
                                    <div class="item-header">
                                        <h4>Имя фамилия</h4>
                                        <p>Студент</p>
                                    </div>
                                    <div class="item-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident enim earum assumenda soluta eum itaque quibusdam impedit? Qui hic veniam ullam, libero cum
                                    </div>
                                    <div class="item-bottom">
                                        <svg class="item-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                                            <g></g>
                                            <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                                            </svg>
                                    </div>
                                    <div class="item-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/response-s.jpg" alt="">
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>