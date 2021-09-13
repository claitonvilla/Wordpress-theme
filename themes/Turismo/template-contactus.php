<?php 

// Template Name: Contact US

get_header();

?>


    <section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner'); ?>')">
        <div class="row">
            <h1>
                <?php the_field('titulo_banner'); ?>
            </h1>
            <p>
                <?php the_title(); ?>
            </p>
        </div>
    </section>
    <section class="container-fluid" id="contact">
        <div class="container allcontact">
            <div class="row title">
                <div class="col-sm-12">
                    <h2><?php the_field('titulo_superior'); ?></h2>
                </div>
            </div>
            <div class="row quadroUm">
                <div class="col-sm-12 all">
                    <div class="col-sm-8 map">
                        <div class="mapa"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7346.79756096422!2d-46.54035200000003!3d-22.9723589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1630439100577!5m2!1spt-BR!2sbr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><br>
                    </div>
                    <div class="col-sm-4 textos">
                        <div class="col-sm-12">
                            <div class="row subtitle">
                                <h4><?php the_field('subtitulo_superior'); ?></h4>
                            </div>
                            <div class="row conteudo">
                                <?php the_field('conteudo_superior'); ?>
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
            <div class="row titleform">
                <div class="col-sm-12">
                    <h1><?php the_field('titulo_inferior'); ?></h1>
                </div>
            </div>
            <div class="row formbox">
                <div class="col-sm-8 all-form">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail Adress">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="button">
                            <a class="btn btn-danger" href="#" role="button">Send Message</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 quadroContact">
                    <div class="img" style="background-image: url('<?php the_field('imagem_inferior'); ?>')"></div>
                    <div class="textSocial">
                        <p><?php the_field('nome_contato'); ?></p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>



    <?php get_footer(); ?>