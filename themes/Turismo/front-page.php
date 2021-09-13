<?php get_header(); ?>


<section class="container-fluid" id="banner">
        <div class="row">
            <div class="carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <?php                         
                            $indicadores = get_field('adicionar_banner');
                            foreach($indicadores as $key => $indicador):
                                $active = ($key == 0)? "active":'';
                        ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php echo $active; ?>"></li>
                        <?php endforeach; ?>    
                        
                    </ol>
                    <div class="carousel-inner">

                        <?php 
                            $imagens = get_field('adicionar_banner');
                            foreach($imagens as $key => $imagem):
                                $active = ($key == 0)? "active":'';
                        ?>                

                        <div class="carousel-item <?php echo $active; ?>" style="background-image: url('<?php echo $imagem['imagem']; ?>')">
                            <div class="bannerdiv">
                                <h4><?php echo $imagem['titulo']; ?></h4>
                                <h2><?php echo $imagem['subtitulo']; ?></h2>
                            </div>
                        </div>

                        <?php endforeach; ?>
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="infos">
        <div class="container">
            <div class="featured">
                <div class="title">Featured Vacations</div>
                <div class="moreInfos"><a href="" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row cartao">


                <?php   $args = array(
                            'numberposts' => 3,
                            'post_type'   => 'pacotes'
                        );
                                
                        $the_query = new WP_Query( $args ); 
                        
                        
                        if ( $the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            
                ?>      



                        <div class="col-sm-4">
                            <div class="card" style="">
                                <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo IMG.'product-1-370x270.jpg';?>')"><img src="<?php echo IMG.'product-1-370x270.jpg';?>" class="card-img-top" style="text-decoration:none"
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


                    <?php endwhile; endif; wp_reset_postdata(); ?>


                
            </div>
            <div class="row sobre">
                <div class="col-sm-12">
                    <div class="sobreNos"><?php the_field('titulo_da_sessao'); ?></div>
                </div>
            </div>
            <div class="row infoNos">
                <div class="col-sm-6 infos">
                    <?php the_field('conteudo_da_sessao'); ?>
                    <a class="btn btn-danger" href="#" role="button"><?php the_field('botao_label'); ?></a>
                </div>
                <div class="col-sm-6 imagem">
                    <img src="<?php the_field('imagem_sobre_nos');?>" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="blogs"
        style="background-image: url('<?php echo IMG.'other-image-fullscren-1-1920x900.jpg';?>')">
        <div class="container painel">
            <div class="blogsviews">
                <div class="title"><?php the_field('titulo_sessao_blog_home'); ?></div>
                <div class="moreBlogs"><a href="" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row allcards">



                <?php   $args1 = array(
                                'numberposts' => 3,
                                'post_type'   => 'post'
                            );
                                    
                            $the_query1 = new WP_Query( $args1 ); 
                            
                            
                            if ( $the_query1->have_posts() ) : 
                                while ( $the_query1->have_posts() ) : $the_query1->the_post();
                                                            
                ?>                             

                            <div class="col-sm-4 cardblog">
                                <div class="card" style="">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo IMG.'blog-1-370x270.jpg';?>" class="card-img-top" style="text-decoration:none"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" style="text-decoration:none">
                                            <h4 class="card-title"><?php the_title(); ?></h4>
                                        </a>

                                        <?php setPostViews(get_the_ID());?>

                                        <p class="card-text"><?php the_author(); ?>   |   <?php the_time('d/m/Y H:i'); ?>   |   <?php echo getPostViews(get_the_ID()); ?></p>
                                    </div>
                                </div>
                            </div>

                <?php endwhile; endif; wp_reset_postdata(); ?> 



            </div>
        </div>
    </section>
    <section class="container-fluid" id="depoimentos">
        <div class="container deps">
            <div class="depoviews">
                <div class="title"><?php the_field('titulo_sessao_depoimentos_home'); ?></div>
                <div class="moreDepo"><a href="" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row quadros">

                <?php   $args2 = array(
                                    'numberposts' => 3,
                                    'post_type'   => 'depoimentos'
                                );
                                        
                                $the_query2 = new WP_Query( $args2 ); 
                                
                                
                                if ( $the_query2->have_posts() ) : 
                                    while ( $the_query2->have_posts() ) : $the_query2->the_post();
                                                                
                ?>                




                    <div class="col-sm-4 infosDep">
                        <div class="imagens">

                                 <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'contato'); ?>

                                <div class="img">
                                    <div style="background-image: url('<?php echo $featured_img_url; ?>')"></div>                            
                                </div>

                        </div>
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <p>
                            <?php echo excerpt(15); ?>
                        </p>
                    </div>



                <?php endwhile; endif; wp_reset_postdata(); ?>                     


            </div>            
            <div class="contact">
                <div class="text">
                    <h4><?php the_field('titulo_da_sessao_contato'); ?></h4>
                    <p><?php the_field('conteudo_da_sessao_contato'); ?></p>
                </div>
                <div>
                    <a class="btn btn-danger" href="<?php the_field('botao_url_contato'); ?>" role="button"><?php the_field('botao_label_contato'); ?></a>
                </div>            
            </div> 
        </div> 
    </section>


<?php get_footer(); ?>