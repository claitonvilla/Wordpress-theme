<?php 

// Template Name: About US
get_header();
?>

    <section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner');?>')">
        <div class="row">
            <h1>
                <?php the_title(); ?>
            </h1>
            <p>
                <?php the_field('titulo_banner'); ?>
            </p>
        </div>
    </section>
    <section class="container-fluid" id="sobreNos">
        <div class="container all">
            <div class="row one">
                <div class="col-sm-12 title">
                    <h1><?php the_field('titulo_superior'); ?></h1>
                </div>
            </div>
            <div class="row two">
                <div class="col-sm-12 text">
                    <div class="col-sm-6 imagem">
                        <div class="img" style="background-image: url('<?php the_field('imagem_superior');?>')">
                        </div><br>
                    </div>
                    <div class="col-sm-6 textos">
                        <div class="col-sm-12">
                            <div class="row title">
                                <h4><?php the_field('subtitulo_superior');?></h4>
                            </div>
                            <div class="row conteudo">
                                <?php the_field('conteudo_superior');?>
                            </div>
                            <div class="row social">
                                <div class="col-sm-12 icons">


                                    <?php 
                                        $icones = get_field('icon', 'options');
                                        foreach($icones as $icone):                                             
                                    ?>


                                        <div class="socialIcon">
                                            <a href="<?php echo $icone['url']; ?>"><i class="<?php echo $icone['icone']; ?>"></i></a>
                                        </div>

                                    <?php endforeach; ?>        


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row three">
                <div class="col-sm-12 description">
                    <div class="row title">
                        <h1><?php the_field('titulo_inferior');?></h1>
                    </div>
                    <div class="row subtitle">
                        <h4><?php the_field('subtitulo_inferior');?></h4>
                    </div>
                    <div class="row conteudo">
                    <?php the_field('conteudo_inferior');?>
                    </div>
                </div>
            </div>
    </section>

    <?php get_footer(); ?>