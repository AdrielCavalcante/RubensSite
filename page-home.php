<?php get_header(); ?>

<main class="container-fluid">
    <section class="intro row">
        <article class="col-12 col-md-6">
            <img src="http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/wave-e1673906673516.png" style="width: 100%; height: 90px;" alt="">
            <h1 class="slogan"><?php the_field('slogan'); ?></h1>
            <img src="http://rubenschammasvoz.com.br/wp-content/uploads/2023/01/wave-e1673906673516.png" style="width: 100%; height: 90px;" alt="">
            <div class="demo d-flex d-md-none">
                <h4>Demonstrativo de voz:</h4>
                <audio controls>
                    <source src="<?php the_field('demo'); ?>" type="audio/ogg">
        
                    Seu navegador não suporte reprodutor de audio
                </audio>
            </div>
            <div>
                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521966410593" target="_blank"><button><i class="fab fa-whatsapp"></i>Acesse para orçarmos</button></a>
            </div>
        </article>
        <div class="col-6 d-none d-md-flex side" style="background-image: url(<?php the_field('wallpaper'); ?>);">
            <div style="background-color: rgba(0, 0, 0, .5); color: white; padding: 2rem 1.25rem; border-radius: 2rem;">
                <h4>Demostrativo de voz:</h4>
                <audio controls>
                    <source src="<?php the_field('demo'); ?>" type="audio/ogg">
        
                    Seu navegador não suporte reprodutor de audio
                </audio>
            </div>
        </div>
    </section>
    <section class="interessado" style="margin-top: 0;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 3rem; color: white;">
                <div style="text-align: center;" class="col-5 col-md-2">
                    <i class="far fa-random" style="font-size: 1.75rem; margin-bottom: 0.25rem;"></i>
                    <h6>Flexibilidade</h6>
                </div>
                <div style="text-align: center;" class="col-5 col-md-2">
                    <i class="fas fa-expand-arrows-alt" style="font-size: 1.75rem; margin-bottom: 0.25rem;"></i>
                    <h6>Versatilidade</h6>
                </div>
                <div style="text-align: center;" class="col-5 col-md-2">
                    <i class="far fa-file-certificate" style="font-size: 1.75rem; margin-bottom: 0.25rem;"></i>
                    <h6>Credibilidade</h6>
                </div>
                <div style="text-align: center;" class="col-5 col-md-2">
                    <i class="far fa-head-side-headphones" style="font-size: 1.75rem; margin-bottom: 0.25rem;"></i>
                    <h6>Estúdio de qualidade</h6>
                </div>
        </div>
    </section>
    <section class="row topo" id="estudio">
        <article class="d-flex align-items-center justify-content-center col-12 col-lg-8" id="lateral" style="background-image: url(<?php the_field('fotoEstudio'); ?>); background-size: cover; background-position: center;">
            <div class="d-block d-lg-none">
                <?php the_field('SobreEstudio'); ?>
            </div>
        </article>
        <article class="d-none d-lg-block col-lg-4">
            <?php the_field('SobreEstudio'); ?>
        </article>
    </section>
    <section class="container" id="spot"> 
        <h2>Estilo de locução</h2>
        <div class="row audios">
        <?php $the_query = new WP_Query(['post_type' => 'post']); 
            if ( $the_query->have_posts() ) :
            $i = 0;
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <h5><?php the_title(); ?></h5>
                        <i class="fas fa-microphone" style="cursor: pointer;" onClick="playAudio(<?php echo $i; ?>)"></i>
                        <audio controls id="estilo<?php echo $i++; ?>">
                            <source src="<?php the_field('audio') ?>" type="audio/ogg">

                            Seu navegador não suporte reprodutor de audio
                        </audio>
                        <script>
                            function playAudio(id) {
                                document.getElementById("estilo"+id).play();
                            }
                        </script>
                    </div>
                </div>
            <?php endwhile; 
            
            wp_reset_postdata();
            
            else : ?>
            <p><?php _e( 'Sem posts cadastrados' ); ?></p>
        <?php endif; ?>
    </section>
    <section class="interessado">
        <h4>Ficou interessado? Me chame no Whatsapp, não perca tempo!</h4>
        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521966410593" target="_blank"><button><i class="fab fa-whatsapp"></i>Orçar locução</button></a>
    </section>
    <section id="sobre" class="d-flex" style="gap: 2rem;">
            <img src="<?php the_field('sobreImagem'); ?>" class="rubinho" alt="">
        <aside>
            <h2>Sobre mim</h2>
            <article>
                <?php the_field('sobre'); ?>
            </article>
        </aside>
    </section>
</main>

<?php get_footer(); ?>
