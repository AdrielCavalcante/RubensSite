function menuMobile() {
    if(document.getElementById('hambuguer').classList.contains('actived')) {
        document.getElementById('hambuguer').classList.remove('actived');
        document.getElementById('body').classList.remove('mobile');
        document.getElementById('menu').classList.add('d-none');
    } else {
        document.getElementById('hambuguer').classList.add('actived');
        document.getElementById('body').classList.add('mobile');
        document.getElementById('menu').classList.remove('d-none');
    }
}

jQuery(document).ready(function($){
    $( ".menu-item" ).click(function() {
        if(document.getElementById('hambuguer').classList.contains('actived')) {
            menuMobile();
        }
    });
});