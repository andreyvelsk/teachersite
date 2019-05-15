$(document).ready(function(){

    //slick slider
    //--------------------------
    $('.response-items').slick(
        {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            dots: true
        }
    );
    //!----------------------

    //ekkoLightBox (просмотр изображений)
    //-----------------------------------------------
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    //!-----------------------------------------------

    $("#form").submit(function(e) { //устанавливаем событие отправки для формы с id=form
        e.preventDefault();
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/send.php", //путь до php фаила отправителя
            dataType: "json",
            data: form_data,
            success: function(data) {
                alert(data.message);
                console.log(data.code);
            },
            error: function(data) {
                alert(data.message);
                console.log(data.code);
            }
        });
    });

    //адаптив значок меню
    //------------------------------------------
    $('.mainnavbar-hamburger').click(function() {
        $('.mainnavbar-menu').toggleClass('menu_active');
        $('.hamburger-link').toggleClass('hamburger-link__active');
        $('.mainnavbar-login').toggleClass('mainnavbar-login__hidden');
    });

    //!-------------------------------------


});