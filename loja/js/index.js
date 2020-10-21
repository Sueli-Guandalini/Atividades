
jQuery(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();



    $("#login").click(function(){
        
        var md5 = $.md5($("input[name='senha']").val());
        console.log(md5);
        console.log($("input[name='senha']").val());
        $("input[name='senha']").val(md5);
        $("form[name='form_login']").submit();
    });

    
    $(".comprar").click(function(){
        id = $(this).val();
        qtd = $("#qtd"+id).val();
        p = {id:id, qtd:qtd}
        $.post("adicionar_carrinho.php",p,function(r){
            if(r == "0"){
                alert("Usuário não logado. Autentique-se para comprar");
                $("#close"+id).click();
                $("#btnLogin").click();
            }else{  
                $(".modal-backdrop").hide();      
                $("#mensagem").html("Produto adicionado no carrinho");
                $("#close"+id).click();   
            }  
           
        });
    });

    $("#finalizar").click(function(){
        
    });


});