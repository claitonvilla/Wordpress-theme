<?php 

// Template Name: Terms

get_header();

?>

    <section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner'); ?>')">
        <div class="row">
            <h1>
                <?php the_field('descricao_banner'); ?>
            </h1>
            <p>
                <?php the_title(); ?>
            </p>
        </div>
    </section>
    <section class="container-fluid" id="terms">
        <div class="container allcont">
            <div class="row title">
                <div class="col-sm-12">
                    <h2><?php the_field('subtitulo'); ?></h2>
                </div>
            </div>
            <?php the_field('conteudo'); ?>         
        </div>
    </section>


    <?php get_footer(); ?>
