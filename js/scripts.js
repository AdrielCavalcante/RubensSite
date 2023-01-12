function menuMobile() {
    if(document.getElementById('hambuguer').classList.contains('actived')) {
        document.getElementById('hambuguer').classList.remove('actived');
        document.getElementById('body').classList.remove('mobile');
        document.getElementById('menu').classList.add('d-none');
        jQuery("#hambuguer").removeClass('fa-times').addClass('fa-bars');
        jQuery('.custom-logo').attr('src', 'http://rubenssite.local/wp-content/uploads/2022/11/Logotipo-sem-fundo-e1669246355834.png');

    } else {
        document.getElementById('hambuguer').classList.add('actived');
        document.getElementById('body').classList.add('mobile');
        document.getElementById('menu').classList.remove('d-none');
        jQuery("#hambuguer").removeClass('fa-bars').addClass('fa-times');
        jQuery('.custom-logo').attr('src', 'http://rubenssite.local/wp-content/uploads/2022/11/Logotipo-branco-sem-fundo.png');
    }
}

document.addEventListener("DOMContentLoaded", () => {
    jQuery(document).ready(function($){
        $( ".menu-item" ).click(function() {
            if(document.getElementById('hambuguer').classList.contains('actived')) {
                menuMobile();
            }
        });

        var header = $('#header');
        
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                // fica branco e cor fixa
                header.addClass("desfixar");
                $('.custom-logo').attr('src', 'http://rubenssite.local/wp-content/uploads/2022/11/Logotipo-branco-sem-fundo.png');
            } else {
                header.removeClass("desfixar");
                $('.custom-logo').attr('src', 'http://rubenssite.local/wp-content/uploads/2022/11/Logotipo-sem-fundo-e1669246355834.png');
            }
        });
    });
});
