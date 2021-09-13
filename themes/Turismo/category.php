<?php get_header(); ?>




<section class="container-fluid" id="headerpacote" style="background-image: url('<?php the_field('imagem_banner_blog', 'options'); ?>')">
    <div class="row">
        <h1>
        <?php the_field('subtitulo_banner_blog', 'options'); ?>
        </h1>
        <p>
        <?php the_field('titulo_banner_blog', 'options'); ?>
        </p>
    </div>
</section>
<section class="container-fluid" id="blogsAll">
    <div class="container list">
        <div class="row all">
            <div class="col-sm-8 imgBlogs">
                <div class="row">

                    <?php if ( have_posts() ) :   while ( have_posts() ) : the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'contato'); ?>


                        <div class="col-sm-6 cardOne">
                            <div class="card" style="">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo  $featured_img_url; ?>" class="card-img-top" style="text-decoration:none" alt="..."></a>
                                <div class="card-body">
                                    <a href="" style="text-decoration:none">
                                        <h4 class="card-title"><?php the_title(); ?>
                                        </h4>
                                    </a>

                                    <?php setPostViews(get_the_ID());?>

                                    <p class="card-text"> <?php the_author(); ?> | <?php the_time('d/m/Y H:i'); ?> | <?php echo getPostViews(get_the_ID()); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;  ?>
                    <?php else: ?>
                        Não há Post
                    <?php endif; ?>
                    
                </div>                
               
                <div class="row listagem">
                    <nav aria-label="Page navigation example">
                   
                         <?php if ( have_posts() ) : wp_pagenavi(); endif; ?>
                        
                    </nav>
                </div>
            </div>
            <div class="col-sm-4 search">
                <div class="row title">
                    <div class="col-12 allInfo">
                        <h1 class="mb-3">Blog Search</h1>
                        <form class="form-inline mb-3" method="get" action="/noticias">
                            <div class="col-sm-8 pl-0">
                                <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Go</button>
                            </div>
                        </form>
                        <h2>Mais Lidos</h2>


                            <?php   $args1 = array(
                                    'numberposts' => 3,
                                    'post_type'   => 'post',
                                    'orderby'   => 'meta_value_num',
                                    'meta_key'  => '_post_views_count',
                                    'order' => 'DESC'
                                );
                                        
                                $the_query1 = new WP_Query( $args1 ); 
                                
                                
                                if ( $the_query1->have_posts() ) : 
                                    while ( $the_query1->have_posts() ) : $the_query1->the_post();
                                                                
                            ?>       


                                    <p><a href="<?php the_permalink(); ?>" style="text-decoration: none"><?php the_title(); ?></a></p>


                            <?php endwhile; endif; wp_reset_postdata(); ?>         

                        <!-- <p><a href="" style="text-decoration: none">Et animi voluptatem, assumenda enim, consectetur quaerat!</a></p>
                        <p><a href="" style="text-decoration: none">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</a></p> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









































<?php get_footer(); ?>