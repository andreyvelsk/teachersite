<form name="loginform" id="loginform" action="/wp-login.php" method="post" class="contactform">

    <p class="login-username">
        <input type="text" name="log" id="user_login" class="input contactform-input" value="" size="20" tabindex="10" placeholder="Имя пользователя или e-mail"/>
    </p>
    <p class="login-password">
        <input type="password" name="pwd" id="user_pass" class="input contactform-input" value="" size="20" tabindex="20" placeholder="Пароль"/>
    </p>

    <p class="login-remember">
        <label>
            <input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" />
            Запомнить меня
        </label>
        
    </p>

    <div class="login-bottom">
        <div class="login-submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button-main" value="Войти" tabindex="100" />
            <input type="hidden" name="redirect_to" value="/" />
        </div>
        <div class="login-register">
            <a href="<?= wp_registration_url()?>" title="Регистрация">
                Регистрация
            </a>
            <span class="delimiter">
            </span>
            <a href="<?= wp_lostpassword_url()?>" title="Регистрация">
                Забыли пароль?
            </a>
        </div>
    </div>

</form>