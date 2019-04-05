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
                    Контакты
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
                    <h2>
                        Свяжитесь со мной
                    </h2>
                    <div class="divider"></div>
                    <p class="subinfo">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam perspiciatis corporis consequatur laborum pariatur magnam, sint asperiores amet quaerat ipsa non aliquam dicta, fugit suscipit ratione eum accusantium sapiente repellat.
                    </p>

                    <form action="<?php echo site_url() ?>/send.php" method="POST" class="contactform">
                        <div class="row">
                            <div class="col-md-6 contactform-row">
                                <input name="name" class="contactform-input" type="text" placeholder="Имя">
                            </div>
                            <div class="col-md-6 contactform-row">
                                <input name="phone" class="contactform-input" type="text" placeholder="Телефон">
                            </div>
                            <div class="col-md-12 contactform-row">
                                <textarea name="message" class="contactform-input" name="" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
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
            <!--/content-->

            <!--sidebar-->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-block">
                        <h4>
                            Адрес
                        </h4>
                        <p class="subinfo">
                            Россия, Город, улица, дом
                        </p>                                    
                    </div>
                    <div class="sidebar-block">
                        <h4>
                            Телефон
                        </h4>
                        <p class="subinfo">
                            2128506
                        </p>                                    
                    </div>
                    <div class="sidebar-block">
                        <h4>
                            E-mail
                        </h4>
                        <p class="subinfo">
                            info@mail.ru
                        </p>                                    
                    </div>
                </div>
            </div>
            <!--/sidebar-->
        </div>
    </div>
    
        <!--page-->
<?php get_footer(); ?>