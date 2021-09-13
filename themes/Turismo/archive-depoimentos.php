<?php get_header(); ?>

<section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner_depoimentos', 'options'); ?>')">
        <div class="row">
            <h1>
                <?php the_field('subtitulo_banner_depoimentos', 'options'); ?>
            </h1>
            <p>
            <?php the_field('titulo_banner_depoimentos', 'options'); ?> 
            </p>
        </div>
</section>
<section class="container-fluid interna" id="depoimentos">
    <div class="container deps">        
        <div class="row quadros">           
        
        
            <?php if ( have_posts() ) :   while ( have_posts() ) : the_post(); ?>
            
            
                <div class="col-sm-4 infosDep">
                    <div class="imagens">

                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'contato'); ?>

                        <div class="img">
                            <div style="background-image: url('<?php echo $featured_img_url; ?>')"></div>                            
                        </div>
                    </div>
                    <div style="background-color: white;">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <p>
                            <?php echo excerpt(15); ?>
                        </p>
                    </div>
                </div>


            <?php endwhile; ?>
            <?php endif; ?>  
              
        </div> 
    </div> 
</section>







<?php get_footer(); ?>