<?php 
/*
Template Name: Контакты
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
    <section class="container content">
        <div class="row content-main">
            <!--content-->
            <div class="col-md-8">
                <div class="content-text">
                    <div class="post">
                        <h2>
                            Свяжитесь со мной
                        </h2>
                        <div class="divider"></div>
                        <p class="subinfo">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam perspiciatis corporis consequatur laborum pariatur magnam, sint asperiores amet quaerat ipsa non aliquam dicta, fugit suscipit ratione eum accusantium sapiente repellat.
                        </p>
                        <input class="contactform-input" name="age" type="text" placeholder="Возраст">
                        <form id="form" action="/send.php" method="post" class="contactform">
                            <div class="row">
                                <div class="col-md-6 contactform-row">
                                    <input class="contactform-input" name="name" type="text" placeholder="Имя">
                                </div>
                                <div class="col-md-6 contactform-row">
                                    <input class="contactform-input" name="phone" type="text" placeholder="Телефон">
                                </div>
                                <div class="col-md-12 contactform-row">
                                    <textarea class="contactform-input" name="comment" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
                                </div>
                                
                                <div class="col-md-12">
                                    <button class="button-main">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/content-->

            <!--sidebar-->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-block">
                        <h4>
                            Телефон
                        </h4>
                        <p class="subinfo">
                            <?php
                                echo get_field('contacts-phone');
                            ?>
                        </p>                                    
                    </div>
                    <div class="sidebar-block">
                        <h4>
                            E-mail
                        </h4>
                        <p class="subinfo">
                            <?php
                                echo get_field('contacts-email');
                            ?>
                        </p>                                    
                    </div>
                </div>
            </div>
            <!--/sidebar-->
        </div>
    </section>
    
        <!--page-->
<?php get_footer(); ?>