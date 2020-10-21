<?php

    include "classeLayout/classeLayout.php";

    $c = new Cabecalho();
    $c->exibe();



 if(!isset($_SESSION["usuario"]) ||(isset($_SESSION["usuario"])&& $_SESSION["usuario"]["permissao"]==2)){
    echo' 
    
    
    <div class="titulo"><h1>Chegou a nova coleção, confira as novidades!!!</h1></div><br>
    <div class="row"> 
        <div class="col-md-3">
            <div class="card" >	
                <img src="img/vestido4.jpg" class="card-img-responsiva" alt="Perfil 1">
                <div class="card-body">
                    <h2>Vestidos</h2>
                                <!--Botão confira-->
                    <button type="button" class="btn btn-dark">
                        <a  href="vestido.php" id="link">Confira</a>
                    </button>
                </div>
            </div>
        </div><br>
        
        <div class="col-md-3">
            <div class="card" >
                <img src="img/calca2.jpg" class="card-img-responsiva" alt="Perfil 2">
                <div class="card-body">
                    <h2>Calças</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="calca.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br>

        <div class="col-md-3">
            <div class="card">
                <img src="img/jardineira3.jpg" class="card-img-responsiva" alt="Perfil 3">
                <div class="card-body">
                    <h2>Jardineiras</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="jardineira.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br>

        <div class="col-md-3">
            <div class="card">
                <img src="img/body2.jpg" class="card-img-responsiva" alt="Perfil 4">
                <div class="card-body">
                    <h2>Bodys</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="body.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div> 
    </div>
    <br>
    <div class="row">
    <div class="col-md-3">
            <div class="card">
                <img src="img/short3.jpg" class="card-img-responsiva" alt="Perfil 5">
                <div class="card-body">
                    <h2>Shorts</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="short.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br> 

    <div class="col-md-3">
            <div class="card">
                <img src="img/blusa7.jpg" class="card-img-responsiva" alt="Perfil 6">
                <div class="card-body">
                    <h2>Blusas</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="blusa.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br>

    <div class="col-md-3">
            <div class="card">
                <img src="img/macacao3.jpg" class="card-img-responsiva" alt="Perfil 7">
                <div class="card-body">
                    <h2>Macacões</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="macacao.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br>

    <div class="col-md-3">
            <div class="card">
                <img src="img/vestido2.jpg" class="card-img-responsiva" alt="Perfil 4">
                <div class="card-body">
                    <h2>Vestidos</h2>
                            <!--Botão confira -->
                    <button type="button" class="btn btn-dark">
                        <a  href="vestido.php" id="link">Confira</a>
                    </button>
                </div>   
            </div>
        </div><br
    </div>';

    

}
    

 
    $r = new Rodape();
    $r->exibe();
 ?>