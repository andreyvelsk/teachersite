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
                
                    <?php
                        $commenter = wp_get_current_commenter();
                        $fields = array(
                            'author' => '
                                <div class="col-md-6 contactform-row">
                                    <input id="author" name="author" class="contactform-input" type="text" 
                                    value="' . esc_attr( $commenter['comment_author'] ) . '" 
                                    placeholder="Имя">
                                </div>
                            ',
                            'email' => '
                                <div class="col-md-6 contactform-row">
                                <input id="email" name="email" class="contactform-input" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="E-mail"/>
                                </div>
                            '
                        );

                        $args = array(
                            'fields' => $fields,
                            'title_reply' => '',
                            'logged_in_as' => '
                                <div class="col-md-12 contactform-row contactform-logedinas">' 
                                    . sprintf( __( 'Вы вошли как <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Выйти?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '
                                </div>
                            ',
                            'comment_notes_after' => '',
                            'comment_notes_before' => '',
                            'comment_field' => 
                                '
                                <p class="col-md-12 contactform-row">
                                    <textarea name="comment" class="contactform-input" id="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                                </p>
                                ',
                            'submit_field' => 
                                '
                                <p class="form-submit row">
                                    <div class="col-md-12">
                                    %1$s %2$s
                                    </div>
                                </p>
                                ',
                            'label_submit'=>'отправить',
                            'class_form' => 'contactform row',
                            'class_submit' => 'button-main'
                            
                        );
                        remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );
                        add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
                        function kama_reorder_comment_fields( $fields ){
                            // die(print_r( $fields )); // посмотрим какие поля есть

                            $new_fields = array(); // сюда соберем поля в новом порядке

                            $myorder = array('author','email', 'comment'); // нужный порядок

                            foreach( $myorder as $key ){
                                $new_fields[ $key ] = $fields[ $key ];
                                unset( $fields[ $key ] );
                            }

                            // если остались еще какие-то поля добавим их в конец
                            if( $fields )
                                foreach( $fields as $key => $val )
                                    $new_fields[ $key ] = $val;

                            return $new_fields;
                        }
                        comment_form( $args );
                    ?>
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