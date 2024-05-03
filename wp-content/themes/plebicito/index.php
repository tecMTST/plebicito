<?php get_header(); ?>

<main>
    <div class="cadastro-container">
        <div class="cadastro-item cadastro-capa">
            <h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/PLEBISCITO-LOGO-BRANCA.svg" alt="Defender as estatais é garantir nosso futuro">
            </h1>
        </div>
        <div class="cadastro-item cadastro-form">
            <div class="formulario">
                <?php echo do_shortcode( '[forminator_form id="11"]' ); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>