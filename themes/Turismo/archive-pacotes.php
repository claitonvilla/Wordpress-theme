<?php get_header(); ?>

<section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner_pacote', 'options'); ?>')">
        <div class="row">
            <h1>
                <?php the_field('subtitulo_banner_pacote', 'options'); ?>
            </h1>
            <p>
            <?php the_field('titulo_banner_pacote', 'options'); ?>
            </p>
        </div>
    </section>
    <section class="container-fluid" id="allpackages">
        <div class="container packs">
            <div class="row lineOne">
                
            <?php if ( have_posts() ) :   while ( have_posts() ) : the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>  
            
                <div class="col-sm-4 unicpack ">
                    <div class="card" style="">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" class="card-img-top" style="text-decoration:none"
                                alt="..."></a>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>" style="text-decoration:none">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                            </a>

                            <?php   
                                $maioremenor = array();
                                foreach(get_field('adicionar_valores') as $campo):
                                    $maiormenor[] = $campo['valor'];
                                endforeach; 
                            ?>  


                            <h6 class="card-title">R$<?php echo min($maiormenor); ?>,00 - R$<?php echo max($maiormenor); ?>,00</h6>
                            <p class="card-text"><?php the_field('chamada'); ?></p>
                            <div class="icones">
                                <div class="icon"><i class="fa fa-calendar"></i><?php the_field('epoca_do_ano'); ?></div>
                                <div class="icon"><i class="fa fa-cube"></i><?php the_field('numero_de_noites'); ?> Nights</div>

                                <?php if ( get_field('incluir_voo') == 1): ?>   

                                     <div class="icon"><i class="fa fa-plane"></i>flight included </div>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>  

                <?php endwhile; 

                else: 
                    echo 'nao existe postagens aqui';
            
                endif; ?>


            </div>               
        </div>
    </section>

    <?php get_footer(); ?>