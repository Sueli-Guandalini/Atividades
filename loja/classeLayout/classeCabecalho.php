<?php

    class Cabecalho{

        private $logo;
        private $alt_logo;
        private $links;

        public function exibe(){   
            if(basename($_SERVER['PHP_SELF'],'.php')!="login"){
                include "validacaoUsuario.php";
            }

         
            echo '<!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title></title>
                <!-- Fonte -->
                <link href="https://fonts.googleapis.com/css2?family=Roboto:300;400;700&display=swap" rel="stylesheet">
                <!-- Bootstrap -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <link rel="stylesheet" href="css/styles.css">
            
                <!-- Scripts -->
                <script 
                src="https://code.jquery.com/jquery-3.5.0.min.js" 
                integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" 
                crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <!-- Font Awesome -->
                <script src="https://kit.fontawesome.com/981ce2b7f1.js" crossorigin="anonymous"></script>
                <!-- Progress Bar -->
                <script src="js/progress.min.js"></script>
                <!-- Parallax -->
                <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
                rel="stylesheet">
            
            </head>
            <body>
               <!-- Primeira Barra de navegação  -->
                <nav class="navbar navbar-principal" >
                    <a href="#" class="navbar-brand">
                        <img id="logo" src="img/logotipo.png" >
                    </a>
            
                    
                    <!-- Botão de entrar ou cadastrar -->
                    <div class="float-left"></div>';

                    if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["permissao"]=='1'){
                        echo "<div style='color:white;'>Usuário Admin logado.</div>(<a href='logout.php'>Sair</a>)";
                    }

                    else if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["permissao"]==2){
                        echo "<div style='color:white;'>Bem vindo, ".$_SESSION["usuario"]["nome_usuario"]." (cliente).</div>(<a href='logout.php'>Sair</a>)";
                    }else{

                        echo '<button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg" id="btnLogin">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                              </svg>
                              Entre ou cadastre-se
                        </button>';
                        

                    echo '</div>
                   <!--Modal do cadastro de usuario-->                   
                   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="login-form col-xs-10 offset-xs-1 
                        col-sm-6 offset-sm-3 
                        col-md-4 offset-md-4">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <header>
                            <h1><img class="img-fluid" src="img/Slide1.jpg" /></h1>
                            <h2 class="text-center">Entre com seu <b>Email</b> e <b>senha</b></h2>
                        </header>
                        <form action="autenticaLogin.php" method="POST" name="form_login">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <input type="text" name="login" 
                                     class="form-control" placeholder="Nome de usuário"
                                     required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </div>
                                        <input type="password" name="senha" class="form-control password" id="senha" data-cript="sha1, md5" placeholder="Senha" required="required"  />
                                    </div>
                            </div>
                            <footer>
                                <div class="float-right">
                                    <button type="button" id="login"
                                    class="btn btn-primary">Entrar</button>
                                </div>
                            </footer>

                            <!--Modal do cadastrar usuario novo-->  
                        </form>
                        <div class="float-left"></div>
                            <button class="btn btn-default btn-cadastrar btn-dark " data-toggle="modal" data-target="#NovoUsuario">
                                Cadastrar</button>
                        </div>
                    </div>
                
                    <div class="modal" tabindex="-1" role="dialog" id="NovoUsuario">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Novo Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="salvarUsuario.php" method="post" name="f" value="Usuario">
                                <div class="modal-body ">
                                        
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="nome">Nome</label>
                                            <input type="text" name="nome" id="nome" class="form-control so-texto" required="required" />
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="sobrenome">Sobrenome</label>
                                            <input type="text" name="sobrenome" id="sobrenome" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="cpf">CPF</label>
                                            <input type="text" name="cpf" id="cpf" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="rg">RG</label>
                                            <input type="text" name="rg" id="rg" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="data_nascimento">Data Nascimento</label>
                                            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="telefone">Telefone</label>
                                            <input type="tel" name="telefone" id="telefone" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="rua">Endereço</label>
                                            <input type="text" name="rua" id="rua" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="numero">Numero</label>
                                            <input type="text" name="numero" id="numero" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="compl">Complemento</label>
                                            <input type="text" name="compl" id="compl" class="form-control" />
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" name="bairro" id="bairro" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" name="cidade" id="cidade" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="estado">UF</label>
                                            <input type="text" name="estado" id="estado" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="cep">CEP</label>
                                            <input type="text" name="cep" id="cep" class="form-control" required="required"/>
                                        </div>
                                    </div>
            
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informação para o acesso</h5>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="nome_usuario">Usuário</label>
                                            <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email_cadastro" class="form-control" required="required"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label for="senha">Senha</label>
                                            <input type="password" name="senha_cadastro" class="form-control password" data-cript="sha1, md5" id="senhaNova" placeholder="Senha" required="required"  />
                                        </div>                 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Limpar</button>
                                    <button type="button" class="btn btn-primary inserir">Salvar</button>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <!-- FIM -->';
            }
            
            if(!isset($_SESSION["usuario"]) ||(isset($_SESSION["usuario"])&& $_SESSION["usuario"]["permissao"]==2)){
                echo'      <!-- Botão de central de suporte -->
                    <div>
                        <button type="button" class="btn btn-dark">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                            </svg>
                                <a  href="suporte.php" id="link">Central de Suporte</a>
                        </button>
                    </div>
            
                    <!-- Carrinho  -->
                    <div>
                        <button type="button" class="btn btn-dark">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                                <a  href="carrinho.php" id="link">CARRINHO</a>
                        </button>
                    </div>';
            }
                echo' </nav>
            
            
            
                <P>
                    <!-- Segunda Barra de navegação  -->
                    <nav class="navbar nav-tabs" >';
                        
                if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["permissao"]=='1'){
                  echo '<div>
                            <button type="button" class="btn btn-dark">
                                <a  href="produto.php" id="link">PRODUTO</a>
                            </button>
                        </div>


                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="venda.php" id="link">VENDA</a>
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="usuario.php" id="link">USUÁRIO</a>
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="categoria.php" id="link">CATEGORIA</a>
                            </button>
                        </div>
                        ';
                }
                else{
                    echo '<div>
                            <button type="button" class="btn btn-dark">
                                <a  href="blusa.php" id="link">BLUSA</a>
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="body.php" id="link">BODY</a>                    
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="calca.php" id="link">CALÇA</a>
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="jardineira.php" id="link">JARDINEIRA</a>
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="macacao.php" id="link">MACACÃO</a>
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="vestido.php" id="link">VESTIDO</a>
                            </button>
                        </div>
            
                        <div>
                            <button type="button" class="btn btn-dark">
                                <a  href="short.php" id="link">SHORT</a>
                            </button>
                        </div>
                      
                        
                         <!-- Botão de pesquisa -->
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 typeahed" type="text" name="busca" 
                                id="busca" placeholder="Pesquisar por nome..." >
                            <button class="btn btn-dark my-2 my-sm-0" type="button id="btnBuscar">
                                <i class="material-icons"><a  href="buscarProduto.php" id="link">search</a></i>
                            </button>
                        </form>';
                        
                }  
                echo'
                    </nav>
                </P>
                <div class="container">
                ';


            
        }

    }


?>