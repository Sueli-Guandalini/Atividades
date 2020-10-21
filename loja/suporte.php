<?php

    include "classeLayout/classeLayout.php";

    $c = new Cabecalho();
    $c->exibe();

    include "classeLayout/classeProduto.php";
    include "classeLayout/classeLinhaProduto.php";


    
                echo '
                    
                    <p>
                        <div id="contact-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="main-title">Entre em contato conosco</h3>
                                    </div>
                                    <div class="col-md-4 contact-box">
                                        <i class="fas fa-phone"></i>
                                        <p><span class="contact-title">Ligue para:</span> (48)99999-9999</p>
                                        <p><span class="contact-title">Horários:</span> 8:00 - 19:00</p>
                                    </div>
                                    <div class="col-md-4 contact-box">
                                    <i class="fas fa-envelope"></i>
                                        <p><span class="contact-title">Envie um e-mail:</span> contato@collection.com.br</p>
                                    </div>
                                    <div class="col-md-4 contact-box">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><span class="contact-title">Endereço:</span> Rua Lorem Ipsum - 1314</p>
                                    </div>
                                    <div class="col-md-6" id="msg-box">
                                        <p>Ou nos deixe uma mensagem:</p>
                                    </div>
                                    <div class="col-md-6" id="contact-form">
                                        <form action="">
                                            <input type="email" class="form-control" placeholder="E-mail" name="email">
                                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                                            <button type="button" class="btn btn-dark submit" >Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="copy-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    <p>Desenvolvido por <a href="https://www.collection.com.br" target="_blank">Collection</a> &copy; 2020</p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>';
    

    $r = new Rodape();
    $r->exibe();  
?>       
                    