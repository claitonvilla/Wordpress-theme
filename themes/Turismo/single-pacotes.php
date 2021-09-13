<?php get_header(); ?>




<section class="container-fluid" id="headerpacote"
        style="background-image: url('<?php the_field('imagem_banner'); ?>">
        <div class="row">
            <h1>

                <?php   
                    $maioremenor = array();
                    foreach(get_field('adicionar_valores') as $campo):
                        $maiormenor[] = $campo['valor'];
                    endforeach; 
                ?> 

                R$<?php echo min($maiormenor); ?>,00 - R$<?php echo max($maiormenor); ?>,00
                
            </h1>
            <p>
                <?php the_field('nome_pacote'); ?>
            </p>
        </div>
    </section>
    <section class="container-fluid" id="details">
        <div class="container conteudos">
            <div class="row imagens">
                <div class="col-sm-6 itens">

                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>   

                    <div class="img" style="background-image: url('<?php echo $featured_img_url; ?>">
                    </div><br>
                    <div class="row subimagens">


                    <?php 
                        $imagens = get_field('galeria');
                        foreach($imagens as $imagem):                                                                       
                    ?>

                        <div class="col-sm-4">
                            <div class="imgBox" style="background-image: url('<?php echo $imagem; ?>">
                            </div>
                        </div>

                    <?php endforeach; ?>        


                        
                    </div><br>
                </div>
                <div class="col-sm-6 end">
                    <div class="row title">
                        <div class="col-sm-12 infosPack">     
                            <div class="icon"><i class=""></i> <?php the_field('epoca_do_ano'); ?></div>
                            <div class="icon"><i class="fa fa-cube"></i><?php the_field('numero_de_noites'); ?> Noites</div>
                            <div class="icon"><i class="fa fa-plane"></i><?php the_field('incluir_voo'); ?></div>
                        </div>
                    </div><br>
                    <div class="row endereco">
                        <div class="col-sm-12 infosEnd">
                            <p><i class="fa fa-map-marker"></i> <?php the_field('endereco'); ?></p><br>
                        </div>
                        <div class="row text">
                            <?php the_field('descricao'); ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="container-fluid" id="infoGeral">
        <div class="container sobre">
            <div class="row price">
                <h1><?php the_field('titulo_sessao_precos'); ?></h1>
            </div>
            <div class="row tableprice">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Package</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $dados = get_field('adicionar_valores');
                            foreach($dados as $dado): 
                        ?>        

                            <tr>
                                <th scope="row"></th>
                                <td><?php echo $dado['data_inicial']; ?></td>
                                <td><?php echo $dado['data_final']; ?></td>
                                <td>R$ <?php echo $dado['valor']; ?>,00</td>
                            </tr>

                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="row info">
                <h1><?php the_field('titulo_sessao_informacoes'); ?></h1>
            </div>
            <div class="row tableinfo">
                <table class="table">
                    <tbody>

                        <?php
                            $infos = get_field('adicionar_informacoes');
                            foreach($infos as $info): 
                        ?>          


                        <tr>
                            <th scope="row" width="15%"><?php echo $info['titulo_informacao']; ?></th>
                            <td><?php echo $info['conteudo_informacao']; ?></td>
                        </tr>


                        <?php endforeach; ?>

                        
                    </tbody>
                </table>
            </div>
            <div class="row mapcontact">
                <div class="col-sm-9 maps">
                    <div class="title"><?php the_field('titulo_sessao_mapa'); ?></div>
                    <div class="gmaps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14693.352331322254!2d-46.55390723022461!3d-22.974592149999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1630074525969!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-sm-3 contact">
                    <div class="titlecont">
                        <p><?php the_field('titulo_sessao_contatos'); ?></p>
                    </div>
                    <div class="dadosCont">
                        <p><span>Nome</span><br><strong><?php the_field('nome_contato'); ?></strong></p>
                        <p><span>Telefone</span><br><strong><a href="" style="text-decoration:none"><?php the_field('telefone_contato'); ?></a></strong>
                        </p>
                        <p><span>Celular</span><br><strong><a href="" style="text-decoration:none"><?php the_field('celular_contato'); ?></a></strong>
                        </p>
                        <p><span>Email</span><br><strong><a href="" style="text-decoration:none"><?php the_field('email_contato'); ?></a></strong></p>
                        </a>
                    </div>
                    <div class="button">
                        <a class="btn btn-danger" href="#" role="button"> <?php the_field('botao'); ?></a>
                    </div>
                </div>
            </div>
            <div class="row formcontact">
                <div class="col-sm-9 form">
                    <div class="title">Enquiry</div>
                    <div class="formcont">
                        <form action="">
                            <div class="row one">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row two">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="From">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="To">
                                    </div>
                                </div>
                            </div>
                            <div class="row three">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="button">
                        <a class="btn btn-danger" href="#" role="button">Send Request</a>
                    </div>
                </div>
                <div class="col-sm-3 terms">
                    <div class="termstext">
                        <p><?php the_field('titulo_sessao_reservas'); ?></p>
                    </div>
                    <div class="dadosCont">
                        <p>
                            <?php the_field('conteudo_termos_de_reserva'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>