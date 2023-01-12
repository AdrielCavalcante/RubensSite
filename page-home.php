<?php get_header(); ?>

<main class="container-fluid">
    <section class="row topo">
        <article class="col-12 col-md-6 col-lg-4">
            <h1><?php the_field('slogan'); ?></h1>
            <p><?php the_field('resumo'); ?></p>
            <div>
                <a href="#" target="_blank"><button>Orçar projeto</button></a>
                <a href="<?php the_field('curriculo'); ?>" target="_blank">Meu Currículo</a>
            </div>
        </article>
        <article class="d-none d-md-block col-md-6 col-lg-8" style="background-image: url(<?php the_field('wallpaper'); ?>);">
        &nbsp;
        </article>
    </section>
    <section class="container" id="portfolio"> 
        <h2>Portfólio</h2>
        <div class="row audios">
        <?php $the_query = new WP_Query(['post_type' => 'post']); 
            if ( $the_query->have_posts() ) :

            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <h5><?php the_title(); ?></h5>
                        <audio controls>
                            <source src="<?php the_field('audio') ?>" type="audio/ogg">

                            Seu navegador não suporte reprodutor de audio
                        </audio>
                    </div>
                </div>
            <?php endwhile; 
            
            wp_reset_postdata();
            
            else : ?>
            <p><?php _e( 'Sem posts cadastrados' ); ?></p>
        <?php endif; ?>
    </section>
    <section id="sobre" class="d-flex" style="gap: 2rem;">
            <img src="http://rubenssite.local/wp-content/uploads/2023/01/imagemSobre-2.png" class="rubinho" alt="">
        <aside>
            <h2>Sobre mim</h2>
            <article>
                <?php the_field('sobre'); ?>
            </article>
        </aside>
    </section>
</main>

<?php get_footer(); ?>
