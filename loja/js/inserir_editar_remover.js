var acao="salvar";
var id = "NULL";
$(function(){
   

    
    //REMOVER
    function define_acao_remover(){

     
        $(".remover").click(function(){
            
            i = $(this).val();
            t = $(this).attr("name");

            // estrutura JSON.
            p = {id:i,tabela:t};
            

            $.post("remover.php",p,function(r){
                
                if(r=='1'){
                    $("#tr"+i).remove();
                }
                if($("tr.dados").length==0){
                    tr = "<tr><td colspan='3'>Não há dados cadastrados</td>";
                    $("tbody").append(tr);
                }
            });

        });
    }

    define_acao_remover();
    //////// FIM REMOVER//////////////////////////////////////////

    //INSERIR/////////////////////////////////////////
    $(".inserir").click(function(){
        
        tabela = $("form[name='f']").attr("value");

        if(tabela=="Usuario"){
            nome_usuario = $("input[name='nome_usuario']").val();
            email = $("#email_cadastro").val();
            var senha = $.md5($("input[name='senha_cadastro']").val());
            permissao = $("input[name='permissao']").val();
            nome = $("input[name='nome']").val();
            sobrenome = $("input[name='sobrenome']").val();
            data_nascimento = $("input[name='data_nascimento']").val();
            rua = $("input[name='rua']").val();
            numero = $("input[name='numero']").val();
            compl = $("input[name='compl']").val();
            bairro = $("input[name='bairro']").val();
            cidade = $("input[name='cidade']").val();
            estado = $("input[name='estado']").val();
            telefone = $("input[name='telefone']").val(); 
            cep = $("input[name='cep']").val();
            cpf = $("input[name='cpf']").val();
            rg = $("input[name='rg']").val();          
            
            var p = new FormData();
            p.append('nome_usuario',nome_usuario);
            p.append('email',email);
            p.append('senha',senha);
            p.append('permissao',permissao);
            p.append('nome',nome);
            p.append('sobrenome',sobrenome);
            p.append('data_nascimento',data_nascimento);
            p.append('rua',rua);
            p.append('numero',numero);
            p.append('compl',compl);
            p.append('bairro',bairro);
            p.append('cidade',cidade);
            p.append('estado',estado);
            p.append('telefone',telefone);
            p.append('cep',cep);
            p.append('cpf',cpf);
            p.append('rg',rg);
            p.append('id',id);

        }
        else if(tabela=="Produto"){
            // como adicionar imagem?
            imagem = $("input[name='imagem']")[0].files[0];
            nome_produto = $("input[name='nome_produto']").val();
            descricao = $("input[name='descricao']").val();
            tamanho = $("select[name='tamanho']").val();
            cor = $("input[name='cor']").val();
            cod_categoria = $("select[name='cod_categoria']").val();
            valor_unitario = $("input[name='valor_unitario']").val();
            estoque = $("input[name='estoque']").val();           
            
            var p = new FormData();
            p.append('imagem',imagem);
            p.append('nome_produto',nome_produto);
            p.append('descricao',descricao);
            p.append('tamanho',tamanho);
            p.append('cor',cor);
            p.append('cod_categoria',cod_categoria);
            p.append('valor_unitario',valor_unitario);
            p.append('estoque',estoque);
            p.append('id',id);
               
        }
        else if(tabela=="Categoria"){
            tipo = $("input[name='tipo']").val();

            var p = new FormData();
            p.append('tipo',tipo);
            p.append('id',id);

        }
        else if(tabela=="Venda"){
            nome = $("input[name='nome']").val();
            sobrenome = $("input[name='sobrenome']").val();
            cpf = $("input[name='cpf']").val();
            horario = $("name[name='horario']").val();
            data = $("input[name='data']").val();
            status = $("select[name='status']").val();
            valor= $("input[name='valor']").val();

            var p = new FormData();
            p.append('nome',nome);
            p.append('sobrenome',sobrenome);
            p.append('cpf',cpf);
            p.append('horario',horario);
            p.append('data',data);
            p.append('status',status); 
            p.append('valor',valor);
            p.append('id',id);
                
        }
        console.log(p);
        //$.post(acao+tabela+".php",p,function(r){
        $.ajax({
            url:acao+tabela+".php",
            type:"post",
            data: p,
            contentType:false,
            processData:false,
            success: function(r){
            console.log(r);

                if(r == "1"){
                    location.href = "index.php";
                }
                tbody = "";
                $.each(r,function(i,v){
                    if(tabela=="Usuario"){

                        tbody+="<tr class='dados' id='tr"+ v.id_usuario + "'>";
                        tbody+="<td>"+ v.nome_usuario + "</td>";
                        tbody+="<td>" + v.email + "</td>";
                        tbody+="<td>" + v.senha + "</td>";
                        tbody+="<td>" + v.permissao + "</td>";
                        tbody+="<td>" + v.nome + "</td>";
                        tbody+="<td>" + v.sobrenome + "</td>";
                        tbody+="<td>" + v.data_nascimento + "</td>";
                        tbody+="<td>" + v.rua + "</td>";
                        tbody+="<td>" + v.numero + "</td>";
                        tbody+="<td>" + v.compl + "</td>";
                        tbody+="<td>" + v.bairro + "</td>";
                        tbody+="<td>" + v.cidade + "</td>";
                        tbody+="<td>" + v.estado + "</td>";
                        tbody+="<td>" + v.telefone + "</td>";
                        tbody+="<td>" + v.cep + "</td>";
                        tbody+="<td>" + v.cpf + "</td>";
                        tbody+="<td>" + v.rg + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_usuario+"' name='usuario' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_usuario+"' name='usuario'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela=="Produto"){

                        tbody+="<tr class='dados' id='tr"+ v.id_produto + "'>";
                        tbody+="<td><img src='"+ v.imagem + "' class='foto' /></td>";
                        tbody+="<td>"+ v.nome_produto + "</td>";
                        tbody+="<td>" + v.descricao + "</td>";
                        tbody+="<td>" + v.tamanho + "</td>";
                        tbody+="<td>" + v.cor + "</td>";
                        tbody+="<td>" + v.tipo + "</td>";
                        tbody+="<td>" + v.valor_unitario + "</td>";
                        tbody+="<td>" + v.estoque + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_produto+"' name='produto' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_produto+"' name='produto'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela="Categoria"){

                        tbody+="<tr class='dados' id='tr"+ v.id_categoria + "'>";
                        tbody+="<td>"+ v.tipo + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_categoria+"' name='categoria' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_categoria+"' name='categoria'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    
                });
                $("tbody").html("");
                $("tbody").append(tbody);
                $(".close").click();
                $(".modal-backdrop").hide(); 
                if(acao=='alterar'){
                    acao_msg = "alterad@";
                }
                else{
                    acao_msg = "inserid@";
                }
                $("#msg").html(tabela + " " + acao_msg + " com sucesso.");   
                
                if(tabela=="Usuario"){
                    $("input[name='nome_usuario']").val("");
                    $("input[name='email']").val("");
                    $("input[name='senha']").val("");
                    $("input[name='permissao']").val("");
                    $("input[name='nome']").val("");
                    $("input[name='sobrenome']").val("");
                    $("input[name='data_nascimento']").val("");
                    $("input[name='rua']").val("");
                    $("input[name='numero']").val("");
                    $("input[name='compl']").val("");
                    $("input[name='bairro']").val("");
                    $("input[name='cidade']").val("");
                    $("input[name='estado']").val("");
                    $("input[name='telefone']").val("");
                    $("input[name='cep']").val("");
                    $("input[name='cpf']").val("");
                    $("input[name='rg']").val("");
                }
                else if(tabela=="Produto"){
                  // como adicionar a imagem?
                    $("input[name='nome_produto']").val("");
                    $("input[name='descricao']").val("");
                    $("input[select='tamanho']").val("");
                    $("input[select='cor']").val("");
                    $("input[select='cod_categoria']").val("");
                    $("input[name='valor_unitario']").val("");
                    $("input[name='estoque']").val("");
                }
                else if(tabela=="Categoria"){
                    $("input[name='tipo']").val("");
                }
                
                define_acao_remover();
                define_acao_alterar();
                acao='salvar';
            }
        });
    });
    //////////////FIM INSERIR/////////////////
    
    
    //// Alterar
    function define_acao_alterar(){
        $(".alterar").click(function(){

            i = $(this).val();
            t = $(this).attr("name");

            p = {id:i,tabela:t};

            $.post("selecionarAlterar.php",p,function(r){
                
                if(t=='usuario'){
                    $("input[name='nome_usuario']").val(r[0].nome_usuario);
                    $("input[name='email']").val(r[0].email);
                    $("input[name='senha']").val(r[0].senha);
                    $("input[name='permissao']").val(r[0].permissao);
                    $("input[name='nome']").val(r[0].nome);
                    $("input[name='sobrenome']").val(r[0].sobrenome);
                    $("input[name='data_nascimento']").val(r[0].data_nascimento);
                    $("input[name='rua']").val(r[0].rua);
                    $("input[name='numero']").val(r[0].numero);
                    $("input[name='compl']").val(r[0].compl);
                    $("input[name='bairro']").val(r[0].bairro);
                    $("input[name='cidade']").val(r[0].cidade);
                    $("input[name='estado']").val(r[0].estado);
                    $("input[name='telefone']").val(r[0].telefone);
                    $("input[name='cep']").val(r[0].cep);
                    $("input[name='cpf']").val(r[0].cpf);
                    $("input[name='rg']").val(r[0].rg);
                }
                else if(t=='produto'){
                    // como adicionar imagem?
                    $("input[name='nome_produto']").val(r[0].nome_produto);
                    $("input[name='descricao']").val(r[0].descricao);
                    $("select[name='tamanho']").val(r[0].tamanho);
                    $("input[select='cor']").val(r[0].cor);
                    $("select[name='cod_categoria']").val(r[0].cod_categoria);
                    $("input[name='valor_unitario']").val(r[0].valor_unitario);
                    $("input[name='estoque']").val(r[0].estoque);
                }
                else if(t=="categoria"){
                    $("input[name='tipo']").val(r[0].tipo);
                }
                
                acao="alterar";
                id = i;
            });

        });
    }
    define_acao_alterar();
    /////////////fim do alterar//////////////////


     /////// buscar produto/////////////////
    /*$('#busca').typeahead({
        source: function (query, resultado) {
        $.ajax({
            url: url + "/php/buscarProduto.php",
            data: { query: query, id_produto: $_POST["id_produto"] },
            dataType: "json",
            type: "POST",
            success: function (data) {
            resultado($.map(data, function (item) {
                return item;
            }));
            }
        });
        }
    });

    function onBtnBuscarClick() {
        $("#produto-list").empty();
        var nome_produto = $('#busca').val();
        $.getJSON(url + "/php/buscarProduto.php",
        { query: nome_produto, id_produto: $_POST["id_produto"] })
        .done(function (data) {
            if (data.length > 0) {
            for (var produto = 0; produto < data.length; produto++) {
                addProduto(data[produto].id_produto, data[produto].imagem, data[produto].nome_produto, 
                    data[produto].descricao, data[produto].tamanho, data[produto].cor, data[produto].cod_categoria,
                    data[produto].valor_unitario, data[produto].estoque);
            }
            } else {
            loadProduto();
            }
        });
    }

    $('#btnBuscar').click(onBtnBuscarClick);
    loadProduto();
    /////////////fim do buscar//////////////////
    */

});

