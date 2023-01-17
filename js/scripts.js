function menuMobile() {
    if(document.getElementById('hambuguer').classList.contains('actived')) {
        document.getElementById('hambuguer').classList.remove('actived');
        document.getElementById('body').classList.remove('mobile');
        document.getElementById('menu').classList.add('d-none');
        jQuery("#hambuguer").removeClass('fa-times').addClass('fa-bars');
        jQuery('.custom-logo').attr('src', 'http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/logoTextual.png');

    } else {
        document.getElementById('hambuguer').classList.add('actived');
        document.getElementById('body').classList.add('mobile');
        document.getElementById('menu').classList.remove('d-none');
        jQuery("#hambuguer").removeClass('fa-bars').addClass('fa-times');
        jQuery('.custom-logo').attr('src', 'http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/logoTextualBranca.png');
    }
}

document.addEventListener("DOMContentLoaded", () => {
    
    jQuery(document).ready(function($){
        //Textillate
        $(function() {
            $('.slogan').textillate({
                in: { 
                    effect: 'rotateIn',
                    delay: 120,
                }
            });
        })

        $( ".menu-item" ).click(function() {
            if(document.getElementById('hambuguer').classList.contains('actived')) {
                menuMobile();
            }
        });
        
        var header = $('#header');
        
        $(window).scroll(function () {
            if ($(this).scrollTop() > 10) {
                // fica branco e cor fixa
                header.addClass("desfixar");
                $('.custom-logo').attr('src', 'http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/logoTextualBranca.png');
            } else {
                header.removeClass("desfixar");
                $('.custom-logo').attr('src', 'http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/logoTextual.png');
            }
        });

        //Parallax
        setTimeout(function() {
            $('#lateral').parallax({imageSrc: 'http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/estudio.jpeg'});
        
        }, 100);
    });
});
