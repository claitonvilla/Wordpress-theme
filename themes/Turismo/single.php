<?php get_header(); ?>
<?php if ( have_posts() ) :   while ( have_posts() ) : the_post(); ?>

<section class="container-fluid" id="headerBlog" style="background-image: url('<?php the_field('imagem_banner_pacote', 'options'); ?>')">
    <div class="row">
        <div class="icones">
            <div class="icon"><i class="fa fa-user"></i><?php the_author(); ?></div>
            <div class="icon"><i class="fa fa-calendar"></i><?php the_time('d/m/Y H:i'); ?></div>

            <?php setPostViews(get_the_ID());?>

            <div class="icon"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></div>
        </div>
        <p><?php the_title(); ?></p>
    </div>
</section>
<section class="container-fluid" id="cont">
    <div class="container all">
        <div class="row title">
            <div class="col-sm-12 texttitle">
                <h1><?php the_field('titulo_conteudo'); ?></h1>
            </div>
        </div>
        <div class="row conteudo">
            <div class="col-sm-12 quadro">
                <div class="col-sm-8 quadroesquerdo">
                    <?php the_field('conteudo'); ?>
                </div>
                <div class="col-sm-4 quadrodireito">
                    <h2><?php the_field('titulo_depoimento'); ?></h2><br>
                    <?php the_field('conteudo_depoimento'); ?>
                </div>
            </div>
        </div><br>
        <div class="row imagem">
            <div class="col-sm-12 imgfull">

            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

                <div class="img" style="background-image: url('<?php echo  $featured_img_url; ?>')"></div>
            </div>
        </div>
        <div class="row text">
            <div class="col-sm-12 titleform">
                <h1>Leave a Comment</h1>
            </div>
        </div>
        <div class="row formbox">
            <div class="col-sm-8 all-form">
                <?php echo do_shortcode('[contact-form-7 id="218" title="Faça um comentário pagina blog"]'); ?>
            </div>
            <div class="col-sm-4 quadroSocial">
                <div class="textSocial">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur
                        similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi
                        mollitia corporis ipsa voluptate corrupti.</p>
                </div>
                <div class="row social-icon">
                    <div class="col-sm-12 icons">


                        <?php 
                            $iconesDetail = get_field('icon', 'options');                                            
                            foreach($iconesDetail as $iconeDel):
                        ?>

                            <div class="socialIcon">
                                <a href="<?php echo $iconeDel['url']; ?>"><i class="<?php echo $iconeDel['icone']; ?>"></i></a>
                            </div>

                        <?php endforeach; ?>

                        
                    </div>
                </div>
            </div>
        </div>





    </div>

</section>





























<?php endwhile;  ?>
<?php endif; ?>
<?php get_footer(); ?>